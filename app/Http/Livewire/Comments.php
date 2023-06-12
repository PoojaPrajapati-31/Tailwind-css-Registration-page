<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments =[
        [
            'body' => 'lorem ipsum dolor sit amet, consectetur adipsicing elit, sed do eiusmod tempor incididunt.',
            'creator' => 'Pooja',
        ]
    ];

    public function render()
    {
        return view('livewire.comments');
    }
}
