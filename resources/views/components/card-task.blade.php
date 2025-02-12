<div class="card bg-opacity-25 text-white m-4 
    {{ $task->status === 'pendiente' ? 'bg-danger' : 
        ($task->status === 'en proceso' ? 'bg-warning' : 'bg-success') 
    }} 
" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title ">{{$task->title}}</h5>

      <p>{{$task->description}}</p>
      
      <p>{{$task->due_date->format('Y-m-d')}}</p>
      <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="col-12 mt-2 mb-2">
            <div class="form-group">
                <strong>Estado:</strong>
                <select name="status" class="form-select" required>
                    <option value="pendiente" @selected($task->status === 'pendiente')>Pendiente</option>
                    <option value="en proceso" @selected($task->status === 'en proceso')>En progreso</option>
                    <option value="completada" @selected($task->status === 'completada')>Completada</option>
                </select>
            </div>
        </div>

        <button type="submit" class="btn btn-primary fw-bold w-100 mt-5">Actualizar</button>
       </form>


       <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="mt-2">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger w-100 fw-bold" 
            onclick="return confirm('¿Estás seguro de que quieres eliminar esta tarea?')">
            Borrar
        </button>
    </form>
    </div>
  </div>