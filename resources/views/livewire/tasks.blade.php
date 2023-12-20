<div>
    <h2>Tasks:</h2>
    <input type="text" wire:model="task">
    <button wire:click="add">Add</button>
    <ul>
        @foreach ($tasks as $task)
            <li>
                {{ $task }}
            </li>
        @endforeach
    </ul>
</div>
