<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Collection;
use Livewire\Component;

class TodoList extends Component
{
    public Collection $tasks;

    protected $listeners = [
        'task-deleted' => 'removeTaskFromList'
    ];

    public function render()
    {
        return view('livewire.todo-list');
    }

    public function mount()
    {
        $this->tasks = Task::all();
    }

    public function removeTaskFromList(int $taskId)
    {
        $this->tasks = $this->tasks->filter(fn(Task $task) => $task->id !== $taskId);
    }
}
