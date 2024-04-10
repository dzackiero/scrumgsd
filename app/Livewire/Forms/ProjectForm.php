<?php

namespace App\Livewire\Forms;

use App\Models\Project;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProjectForm extends Form
{
    #[Validate(['required', 'string'], ["name" => "Project Name"])]
    public string $name = 'Test';
    #[Validate(['required', 'date_format:Y'], ["year" => "Project Year"])]
    public ?string $year = "2024";
    #[Validate(['required', 'numeric'], ["teamCount" => "Team Size"])]
    public ?int $teamCount = 2;

    public $id;

    public function setData(Project $project): void
    {
        $this->name = $project->name;
        $this->year = $project->year;
        $this->teamCount = $project->team_count;

        $this->id = $project->id;
    }

    public function createOrUpdate(): Project
    {

        $data = [
            "user_id" => auth()->user()->id,
            "name" => $this->name,
            "year" => $this->year,
            "team_count" => $this->teamCount,
        ];

        if ($this->id) {
            $project = Project::find($this->id);
            $project->update($data);
            $project->refresh();
        } else {
            $project = Project::create($data);
        }

        return $project;
    }
}
