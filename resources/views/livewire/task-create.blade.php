<div>
    <h2 class="text-center mb-3 text-lg">Add a new Task</h2>
    <form wire:submit='add'>
        <div class="flex m-auto w-2/4 gap-3">
            <div>
                <div class="flex flex-col">
                    <label for="title">Title</label>
                    <input class="rounded-md bg-gray-100" id="title" type="text" wire:model='task_title'>
                    @error('task_title')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="status">Status</label>
                    <select class="rounded-md bg-gray-100" id="status" wire:model='task_status'>
                        @foreach (\App\Enums\Status::cases() as $status)
                            <option value="{{ $status->value }}">{{ $status->name }}</option>
                        @endforeach

                    </select>
                    @error('task_status')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex flex-col">
                    <label for="deadline">Deadline</label>
                    <input class="rounded-md bg-gray-100" id="deadline" type="date" wire:model='task_deadline'>
                    @error('task_deadline')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div>
                <div class="flex flex-col">
                    <label for="description">Description</label>
                    <textarea class="rounded-md bg-gray-100" cols="30" rows="10" wire:model='task_description' id="description"></textarea>
                    @error('task_description')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

            </div>
        </div>
        <div class="flex justify-end w-2/4 m-auto">
            <button class="bg-blue-500 py-2 px-4 text-white rounded-md" type="submit">Add</button>
        </div>

    </form>
</div>
