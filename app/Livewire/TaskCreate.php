<?php

namespace App\Livewire;

use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TaskCreate extends Component
{

    public $tasks = [];

    public $task_title = '';
    public $task_description = '';

    public $task_status = 'new';

    public $task_deadline = '';

    public function add()
    {
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
