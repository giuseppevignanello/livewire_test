<div>
    <label for="title">Title</label>
    <input id="title" type="text" wire:model='task_title'>
    <label for="description">Description</label>
    <textarea cols="30" rows="10" wire:model='task_description' id="description"></textarea>
    <select id="status" wire:model='task_status'>
        <option value="new">New</option>
        <option value="in_progress">In Progress</option>
        <option value="done">Done</option>
    </select>
    <label for="deadline">Deadline</label>
    <input id="deadline" type="date" wire:model='task_deadline'>
    <button wire:click='add'>Add</button>
    @foreach ($tasks as $task)
        <li>
            {{ $task }}
        </li>
    @endforeach
</div>
