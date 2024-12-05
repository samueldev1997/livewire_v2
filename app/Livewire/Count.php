<?php

namespace App\Livewire;

use Livewire\Component;

class Count extends Component
{
    public $name = 'Muelzin';

    public function render()
    {
        return view('livewire.count');
    }

    public function toogle()
    {
        if($this->name[0] === str($this->name[0])->upper()->toString()){
            $this->name = str($this->name)->lower();

        } else {
            $this->name = str($this->name)->upper();

        }
    }
}
