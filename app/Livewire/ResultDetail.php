<?php

namespace App\Livewire;

use App\Models\Option;
use App\Models\Question;
use App\Models\Result as ResultModel;
use Illuminate\Support\Collection;
use Livewire\Component;

class ResultDetail extends Component
{
    // Quiz
    public int $current = 1;

    public ResultModel $result;
    public ?Collection $questions;
    public ?Collection $options;

    public function mount(ResultModel $result): void
    {
        $this->result = $result;
        $answers = collect($result->answers->pluck("option_id"));
        $this->questions = Question::with("options")->get()->keyBy("order");
        $this->options = Option::all()->keyBy("id")->map(fn($option) => [
            "question_id" => $option->question_id,
            "id" => $option->id,
            "text" => $option->text,
            "value" => $option->value,
            "state" => $answers->contains($option->id),
        ]);
    }

    public function changeQuestion(int $question): void
    {
        if ($question >= 1 && $this->current <= $this->questions->last()->order) {
            $this->current = $question;
        }
    }

    public function render()
    {
        return view('livewire.result-detail');
    }
}
