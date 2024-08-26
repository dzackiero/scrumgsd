<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectDetail extends Component
{
    public $project;

    public function mount(Project $project)
    {
        $this->project = $project->toArray();
    }

    public function update()
    {
        Project::find($this->project['id'])
            ->update($this->project);
        $this->dispatch("project-updated");
    }

    public function delete()
    {
        Project::find($this->project['id'])->delete();
        $this->redirectRoute('projects');
    }

    public function render()
    {
        return view('livewire.project-detail');
    }
}
