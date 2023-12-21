<div>
    @foreach ($tasks as $task)
        <li>
            <span><strong>Title: </strong> {{ $task->title }}</span>
            <span><strong>Description: </strong> {{ $task->description }}</span>
            <span><strong>Status: </strong> {{ $task->status }}</span>
            <span><strong>Deadline: </strong> {{ $task->deadline }}</span>
        </li>
    @endforeach
</div>
