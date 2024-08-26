<?php

namespace App\Livewire;

use App\Enums\Step;
use App\Livewire\Forms\PersonalForm;
use App\Livewire\Forms\ProjectForm;
use App\Models\Answer;
use App\Models\Option;
use App\Models\Project;
use App\Models\Question;
use App\Models\Result;
use Illuminate\Support\Collection;
use Livewire\Component;

class Form extends Component
{
    // First Screen/Form displayed
    public int $step = Step::Project->value;


    // Forms
    public ProjectForm $projectForm;
    public PersonalForm $personalForm;

    public bool $useExistingProject = false;
    public $selectedProject = '';
    public ?array $project;

    // Project

    public ?Collection $projects;

    // Quiz
    public int $current = 1;
    public ?Collection $questions;
    public ?Collection $options;

    public function mount(): void
    {
        $this->projects = Project::whereUserId(auth()->id())->get()->keyBy('id');
        $this->questions = Question::with("options")->get()->keyBy("order");
        $this->options = Option::all()->keyBy("id")->map(fn($option) => [
            "question_id" => $option->question_id,
            "id" => $option->id,
            "text" => $option->text,
            "value" => $option->value,
            "state" => false,
        ]);
    }

    public function updated($property): void
    {
        if ($property === 'selectedProject') {
            $project = Project::find($this->selectedProject);
            if ($project) {
                $this->project = $project->toArray();
            }
        }
    }

    public function render()
    {
        return view('livewire.form');
    }

    public function changeStep(int $step, bool $validate = true): void
    {
        if ($validate) {
            $this->validateStep();
        }
        $this->step = $step;
    }

    public function existingProject(): void
    {
        $this->validateOnly('selectedProject',
            ['selectedProject' => ['required']],
            ['selectedProject.required' => 'Proyek harus dipilih terlebih dahulu']);
        $this->useExistingProject = true;
        $this->step = Step::Personal->value;
    }

    public function validateStep(): void
    {
        if ($this->step == Step::Project->value) {
            $this->projectForm->validate();
            return;
        }
        if ($this->step == Step::Personal->value) {
            $this->personalForm->validate();
            return;
        }
        if ($this->step == Step::Quiz->value) {
            return;
        }
    }

    // Quiz Functions

    public function changeQuestion(int $question): void
    {
        if ($question < 1) {
            $this->changeStep(Step::Personal->value);
            $this->current = 1;
        } else if ($this->current >= $this->questions->last()->order) {
            $this->submit();
        } else {
            $this->current = $question;
        }
    }

    public function submit(): void
    {
        $personal = $this->personalForm->validate();
        $score = $this->calculateTotal();
        try {
            \DB::beginTransaction();

            if ($this->useExistingProject) {
                $project = Project::find($this->selectedProject);
            } else {
                $project = $this->projectForm->createOrUpdate();
            }

            $result = Result::create([
                "user_id" => auth()->user()->id,
                "name" => $personal["name"],
                "position" => $personal["position"],
                "score" => $score,
                "project_id" => $project->id
            ]);

            $filteredOptions = $this->options->filter(fn($opt) => $opt["state"]);
            foreach ($filteredOptions as $option) {
                Answer::create([
                    "result_id" => $result->id,
                    "option_id" => $option["id"],
                ]);
            }
            \DB::commit();

            $this->redirectRoute("results.detail", ["result" => $result->id]);
        } catch (\Exception $e) {
            \DB::rollBack();
        }
    }

    public function calculateTotal()
    {
        return $this->options->filter(fn($opt) => $opt["state"])->pluck("value")->sum() ?? 0;
    }
}
