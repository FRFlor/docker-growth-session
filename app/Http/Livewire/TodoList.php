<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Collection;
use Livewire\Component;

class TodoList extends Component
{
    public Collection $tasks;

    protected $listeners = [
        'task-deleted' => 'refreshList',
        'task-created' => 'refreshList',
    ];

    public function render()
    {
        $this->refreshList();
        return view('livewire.todo-list');
    }

    public function refreshList()
    {
        $this->tasks = Task::query()->orderByDesc('id')->get();
    }
}
