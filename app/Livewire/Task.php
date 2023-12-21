<?php

namespace App\Livewire;

use App\Models\Task as ModelsTask;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Task extends Component
{

    public $tasks = [];
    public $task_title = '';
    public $task_description = '';

    public $task_status = 'new';

    public $task_deadline = '';

    public function mount()
    {
        $user = Auth::user();
        $this->tasks = $user->tasks;
    }
    public function add()
    {
        //get authenticated user
        $user = Auth::user();

        //add new taks
        $newTask = new ModelsTask([
            'title' => $this->task_title,
            'user_id' => $user->id,
            'description' => $this->task_description,
            'status' => $this->task_status,
            'deadline' => $this->task_deadline
        ]);
        $newTask->save();

        //get the updated tasks list
        $this->tasks = $user->tasks;
        //reset the input
        $this->task_title = '';
        $this->task_description = '';
        $this->task_status = 'new';
        $this->task_deadline = '';
    }

    public function render()
    {
        return view('livewire.task');
    }
}
