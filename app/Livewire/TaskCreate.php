<?php

namespace App\Livewire;

use App\Livewire\Forms\TaskForm;
use Livewire\Attributes\Rule;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskCreate extends Component
{
    public $tasks = [];
    public TaskForm $form;

    public function add()
    {
        $this->validate();

        $this->form->add();
        //dispatch event to Tasks 
        $this->dispatch('tasksAdded');
        //reset the input
        $this->form->reset();
    }
    public function render()
    {
        return view('livewire.task-create');
    }
}
