<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateTask extends Component
{
    public string $newTaskDescription = '';

    public function render()
    {
        return view('livewire.create-task');
    }

    public function create()
    {
        \App\Models\Task::query()->create([
            'description' => $this->newTaskDescription,
            'is_complete' => false
        ]);
        $this->newTaskDescription = '';
        $this->emit('task-created');
    }
}
