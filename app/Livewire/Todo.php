<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public string $name = '';

    protected $listeners = [
        'mudaai' => 'vai'
    ];

    public function render()
    {
        return view('livewire.todo');
    }

    public function vai($data)
    {
        dd($data);
    }
}
