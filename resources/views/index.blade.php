@extends('layouts.base')

@section('content')
<div class="col-12 d-flex align-items-center flex-column">
    <div>
        <h2 class="text-white p-3">CRUD de Tareas</h2>
    </div>
</div>

@if (session()->has('success'))
    <div class="alert alert-success mt-3 row">
        <strong>{{ session('success') }}</strong>
    </div>
@endif


<form action="{{route('store')}}" method="POST" class="row">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Tarea:</strong>
                <input type="text" name="title" class="form-control" placeholder="Tarea" required>
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Descripción:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Descripción..." required></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
            <div class="form-group">
                <strong>Fecha límite:</strong>
                <input type="date" name="due_date" class="form-control" id="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
            <div class="form-group">
                <strong>Estado (inicial):</strong>
                <select name="status" class="form-select" id="" required>
                    <option value="pendiente">Pendiente</option>
                    <option value="en progreso">En progreso</option>
                    <option value="completada">Completada</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            <button type="submit" class="btn btn-primary w-100 mb-5 fs-3 fw-bold">Crear</button>
        </div>
    </div>
</form>

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
            <tr>
                <td class="fw-bold">Estudiar Laravel</td>
                <td>Ver video: tu primer CRUD con laravel 10 en el canal de YouDevs</td>
                <td>
                    31/03/23
                </td>
                <td>
                    <span class="badge bg-warning fs-6">Pendiente</span>
                </td>
                <td>
                    <a href="" class="btn btn-warning">Editar</a>

                    <form action="" method="post" class="d-inline">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection