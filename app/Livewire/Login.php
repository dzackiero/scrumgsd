<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.guest')]
class Login extends Component
{
    #[Validate('required|email')]
    public string $email = "";

    #[Validate(["required", "min:6"])]
    public string $password = "";

    public function login(): void
    {
        $credential = $this->validate();
        if (auth()->attempt($credential)) {
            $this->redirectRoute("form");
        } else {
            $this->addError("attempt", "Wrong Email or Password, Please try again.");
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
