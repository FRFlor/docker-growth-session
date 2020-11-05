<li class="my-4 p-4 flex justify-between border border-gray-200 text-gray-800 shadow">
    <p>{{$task->description}}</p>

    <div class="flex items-center">
        <label for="task_{{$task->id}}" class="sr-only">
            Completed
        </label>
        <input id="task_{{$task->id}}" type="checkbox"
               wire:click="toggleIsComplete"
               class="h-8 w-8 cursor-pointer" {{$task->is_complete ? 'checked="checked"' : ''}}">
        <button class="border border-red-500 h-8 w-8 rounded-sm ml-4" wire:click="delete">
            <i class="fas fa-trash text-red-500"></i>
        </button>
    </div>
</li>
