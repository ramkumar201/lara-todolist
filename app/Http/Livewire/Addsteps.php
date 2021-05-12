<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Addsteps extends Component
{
    public $steps = [];

    public function increment()
    {
        $this->steps[] = count($this->steps);
    }

    public function remove($index)
    {
        unset($this->steps[$index]);
    }

    public function render()
    {
        return view('livewire.addsteps');
    }
}
