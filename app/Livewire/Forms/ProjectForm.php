<?php

namespace App\Livewire\Forms;

use App\Models\Project;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ProjectForm extends Form
{
    #[Validate(['required', 'string'], ["name" => "Nama Proyek"])]
    public string $name = '';
    #[Validate(['required', 'date_format:Y'], ["year" => "Tahun"])]
    public ?string $year = "";
    #[Validate(['required', 'numeric'], ["teamCount" => "Jumlah Tim"])]
    public ?int $teamCount = null;

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
            $project->refresh();
        }

        return $project;
    }
}
