<div class="row">
    <div class="col-12 mt-4">
        <table class="table table-bordered text-white">
            <tr class="text-secondary">
                <th>Tarea</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
            @foreach ($pendingTasks as $task)
            <tr>
                <td class="fw-bold">{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>
                    {{$task->due_date}}
                </td>
                <td>
                    <span class="badge bg-warning fs-6">{{$task->status}}</span>
                </td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>

                    <form action="" method="post" class="d-inline">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @foreach ($inProgressTasks as $task)
            <tr>
                <td class="fw-bold">{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>
                    {{$task->due_date}}
                </td>
                <td>
                    <span class="badge bg-warning fs-6">{{$task->status}}</span>
                </td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>

                    <form action="" method="post" class="d-inline">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @foreach ($completedTasks as $task)
            <tr>
                <td class="fw-bold">{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>
                    {{$task->due_date}}
                </td>
                <td>
                    <span class="badge bg-warning fs-6">{{$task->status}}</span>
                </td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>

                    <form action="" method="post" class="d-inline">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>