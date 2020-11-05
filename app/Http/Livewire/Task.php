<?php

namespace App\Http\Livewire;

use App\Models\Task as TaskModel;
use Livewire\Component;

class Task extends Component
{
    public TaskModel $task;

    public function render()
    {
        return view('livewire.task');
    }

    public function delete()
    {
        $this->task->delete();
        $this->emit('task-deleted', $this->task->id);
    }
}
