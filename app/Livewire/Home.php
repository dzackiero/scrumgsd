<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.basic')]
class Home extends Component
{

    public function render()
    {
        return view('livewire.home');
    }
}
