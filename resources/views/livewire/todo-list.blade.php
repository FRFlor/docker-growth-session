<div class="h-screen">
    <h1 class="text-3xl text-center my-10">Todo List</h1>
    <ul class="max-w-3xl mx-auto mb-24">
        @foreach($tasks as $task)
            <li class="my-4 p-4 flex justify-between border border-gray-200 text-gray-800 shadow">
                <p>{{$task->description}}</p>
                <div>
                    <label for="task_{{$task->id}}" class="sr-only">
                        Completed
                    </label>
                    <input id="task_{{$task->id}}" type="checkbox" class="h-5 w-5 cursor-pointer" {{$task->is_complete ? 'checked="checked"' : ''}}">
                </div>
            </li>
        @endforeach
    </ul>
</div>
