<?php

namespace App\Livewire\Forms;

use App\Livewire\Task;
use App\Models\Task as ModelsTask;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskForm extends Form
{


    #[Rule('required | min:3 | max:255')]
    public $task_title = '';
    #[Rule('required | min:3 | max:500')]
    public $task_description = '';

    #[Rule('required')]
    public $task_status = 'new';

    #[Rule('required | after_or_equal:today')]
    public $task_deadline = '';


    public function add()
    {
        $user = auth()->user();

        $newTask = new ModelsTask([
            'title' => $this->task_title,
            'description' => $this->task_description,
            'status' => $this->task_status,
            'deadline' => $this->task_deadline,
            'user_id' => $user->id
        ]);

        $newTask->save();
    }
}
