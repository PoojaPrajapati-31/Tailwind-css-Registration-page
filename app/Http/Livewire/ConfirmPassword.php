<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ConfirmPassword extends Component
{
    public $password;
    public $confirmPassword;
    public $showPassword = false;
    public $showConfirmPassword = false;

    protected function rules()
    {
        return [
            'password' => 'required|min:6',
            'confirmPassword' => 'required|same:password',
        ];
    }

    public function render()
    {
        return view('livewire.confirm-password');
    }

    public function togglePasswordVisibility()
    {
        $this->showPassword = !$this->showPassword;
    }

    public function toggleConfirmPasswordVisibility()
    {
        $this->showConfirmPassword = !$this->showConfirmPassword;
    }

    public function submit()
    {
    $this->validate();

    // Perform any additional actions or logic here

    // Reset the form fields
    $this->password = '';
    $this->confirmPassword = '';

    // Redirect or show a success message as desired
    session()->flash('success', 'Form submitted successfully!');
    }
}
