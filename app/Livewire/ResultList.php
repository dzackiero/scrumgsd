<?php

namespace App\Livewire;

use App\Models\Result;
use Livewire\Component;

class ResultList extends Component
{
    public $results = [];

    public function mount()
    {
        $this->results = Result::where("user_id", auth()->user()->id)->get();
    }

    public function render()
    {
        return view('livewire.result-list');
    }
}
