<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPassword extends Component
{
    public $password;
    public $confirmPassword;
    public $showPassword = false;

    protected function rules()
    {
        return [
            'password' => 'required|min:6',
            'confirmPassword' => 'required|same:password',
        ];
    }

    public function render()
    {
        return view('livewire.show-password');
    }

    public function togglePasswordVisibility()
    {
        $this->showPassword = !$this->showPassword;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}
