<?php

namespace App\Livewire\Auth;

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title("Register - UHDWonders")]
class RegisterPage extends Component
{
    public $name;
    public $email;
    public $password;

    public function save() {
        $this->validate([
            "name"=> "required|max:255",
            "email"=> "required|email|unique:users|max:255",
            "password"=> "required|min:6|max:255",
        ]);

        $user = User::create([
            "name"=> $this->name,
            "email"=> $this->email,
            "password"=> Hash::make($this->password)
        ]);

        //login user 
        auth()->guard()->login($user);

        //redirect to home page
        return redirect()->intended();

    }



    public function render()
    {
        return view('livewire.auth.register-page');
    }
}
