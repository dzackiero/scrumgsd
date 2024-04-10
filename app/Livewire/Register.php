<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('components.layouts.guest')]
class Register extends Component
{
    #[Validate(['required', 'string', 'max:255'])]
    public string $name = "";

    #[Validate(['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class])]
    public string $email = "";

    #[Validate(["required", "string", "min:6"])]
    public string $password = "";


    public function register()
    {
        $data = $this->validate();

        $user = User::create($data);
        auth()->login($user);

        event(new Registered($user));

        $this->redirectRoute("verification.notice");
    }

    public function render()
    {
        return view('livewire.register');
    }
}
