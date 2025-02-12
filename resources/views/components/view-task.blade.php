<div class="row">
    <div class="col-12 mt-4">
            @foreach ($pendingTasks as $task)
                <x-card-task :task="$task"/>
            @endforeach
            @foreach ($inProgressTasks as $task)
                <x-card-task :task="$task"/>
            @endforeach
            @foreach ($completedTasks as $task)
                <x-card-task :task="$task"/>
            @endforeach
    </div>
</div>