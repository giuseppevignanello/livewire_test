<?php

namespace App\Livewire;

use Livewire\Component;

class Task extends Component
{

    public $tasks = [];
    public $task = '';

    public function mount()
    {
    }
    public function add()
    {
        $this->tasks[] = $this->task;
    }

    public function render()
    {
        return view('livewire.task');
    }
}
