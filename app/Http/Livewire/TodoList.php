<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Illuminate\Support\Collection;
use Livewire\Component;

class TodoList extends Component
{
    public Collection $tasks;

    public function render()
    {
        return view('livewire.todo-list');
    }

    public function mount()
    {
        $this->tasks = Task::all();
    }
}
