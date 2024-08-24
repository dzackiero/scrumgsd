<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ResetPassword extends Component
{
    #[Validate('required', 'string')]
    public string $token;

    #[Validate(['required', 'email'])]
    public string $email;

    #[Validate(["required", "min:6", "confirmed"])]
    public string $password = "";

    #[Validate(["required", "min:6"])]
    public string $password_confirmation = "";

    public function mount($token)
    {
        $this->token = $token;
    }

    public function resetPassword(): void
    {
        $this->validate();
        $status = Password::reset(
            ["email" => $this->email, "password" => $this->password, "password_confirmation" => $this->password_confirmation, "token" => $this->token],
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();
                event(new PasswordReset($user));
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            session()->flash("success", __($status));
            $this->redirectRoute('login');
        } else {
            $this->addError("email", __($status));
        }
    }

    public function render()
    {
        return view('livewire.reset-password');
    }
}
