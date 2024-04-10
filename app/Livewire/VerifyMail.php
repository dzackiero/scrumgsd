<?php

namespace App\Livewire;

use Livewire\Component;

class VerifyMail extends Component
{
    public function sendVerification(): void
    {
        if (auth()->user()->hasVerifiedEmail()) {
            $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);

            return;
        }

        auth()->user()->sendEmailVerificationNotification();

        session()->flash('status', 'verification-link-sent');
    }

    public function render()
    {
        if (auth()->user()->hasVerifiedEmail()) {
            $this->redirectRoute("home");
        }
        return view('livewire.verify-mail');
    }
}
