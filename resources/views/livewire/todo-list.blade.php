<div class="h-screen">
    <h1 class="text-3xl text-center my-10">Todo List</h1>
    <livewire:create-task />
    <ul class="max-w-3xl mx-auto mb-24 mt-8">
        @foreach($tasks as $task)
            <livewire:task :task="$task" :key="$task->id"/>
        @endforeach
    </ul>
</div>
