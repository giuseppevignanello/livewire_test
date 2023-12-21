<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskCreate extends Component
{

    public $tasks = [];

    #[Rule('required | min:3 | max:255')]
    public $task_title = '';
    #[Rule('required | min:3 | max:500')]
    public $task_description = '';

    #[Rule('required')]
    public $task_status = 'new';

    #[Rule('required')]
    public $task_deadline = '';

    public function add()
    {
        $this->validate();

        //get authenticated user
        $user = Auth::user();

        //add new taks
        $newTask = new Task([
            'title' => $this->task_title,
            'user_id' => $user->id,
            'description' => $this->task_description,
            'status' => $this->task_status,
            'deadline' => $this->task_deadline
        ]);
        $newTask->save();

        //emit event to Tasks 
        $this->dispatch('tasksAdded');
        //reset the input
        $this->reset('task_title', 'task_description', 'task_status', 'task_deadline');
    }
    public function render()
    {
        return view('livewire.task-create');
    }
}
