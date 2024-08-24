<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ForgotPassword extends Component
{
    #[Validate('required|email')]
    public string $email = "";

    public function sendRequest(): void
    {
        $email = $this->validate();
        if (User::where('email', $this->email)->exists()) {
            $status = Password::sendResetLink($email);
            if ($status === Password::RESET_LINK_SENT) {
                session()->flash('success', __($status));
                $this->redirectIntended();
            } else {
                $this->addError("status", __($status));
            }
        }
    }

    public function render()
    {
        return view('livewire.forgot-password');
    }
}
