<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{

    public $name = "Peppe";
    public function render()
    {
        return view('livewire.test');
    }
}
