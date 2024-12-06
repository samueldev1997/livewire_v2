<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Count extends Component
{
    public $name = 'Muelzin';

    public function render()
    {
        return view('livewire.count', [
            'users' => User::all()
        ]);
    }

    public function submit()
    {
        User::factory()->create([
            'name' => $this->name
        ]);
    }

    public function send()
    {
        $this->emitTo(
            'todo', 
            'mudaai',
            $this->name,
        );
    }

    public function toogle($type)
    {
        if($type === 'upper'){
            $this->name = str($this->name)->upper();

        } else {
            $this->name = str($this->name)->lower();

        }
    }
}
