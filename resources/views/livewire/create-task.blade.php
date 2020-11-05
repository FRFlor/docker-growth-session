<div>
   <form wire:submit.prevent="create" class="flex justify-center max-w-3xl mx-auto">
       <label class="sr-only" for="new-task">
           New Task
       </label>
       <input id="new-task" class="flex-1 border border-gray-200 py-2 px-6" placeholder="Create new task" type="text" wire:model="newTaskDescription">
       <button class="border rounded border-green-400 bg-green-500 px-4 py-2 text-white ml-2 hover:bg-green-700">Save</button>
   </form>
</div>
