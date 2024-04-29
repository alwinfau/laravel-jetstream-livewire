<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{
    public function render()
    {
        return view('livewire.test');
    }

    public function updated($field)
    {
        $this->emit('pageLoaded');
    }
}
