<div class="row justify-content-center">
    <div class="col-12 col-md-4 mt-4">
        <h4 class="text-center text-danger">Pendientes</h4>
        @foreach ($pendingTasks as $task)
            <x-card-task :task="$task"/>
        @endforeach
    </div>

    <div class="col-12 col-md-4 mt-4">
        <h4 class="text-center text-warning">En Progreso</h4>
        @foreach ($inProgressTasks as $task)
            <x-card-task :task="$task"/>
        @endforeach
    </div>

    <div class="col-12 col-md-4 mt-4">
        <h4 class="text-center text-success">Completadas</h4>
        @foreach ($completedTasks as $task)
            <x-card-task :task="$task"/>
        @endforeach
    </div>
</div>
