<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Reset Password - UHDWonder")]
class ResetPasswordPage extends Component
{

    public $token;
    public $email;
    public $password;
    public $password_confirmation;


    public function render()
    {
        return view('livewire.auth.reset-password-page');
    }
}
