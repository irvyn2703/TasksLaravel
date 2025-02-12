@extends('layouts.base')

@section('content')
@if (session()->has('success'))
    <div class="alert alert-success mt-3 row">
        <strong>{{ session('success') }}</strong>
    </div>
@endif
<div class="col-12 d-flex align-items-center flex-column">
    <div>
        <h2 class="text-white p-3">CRUD de Tareas</h2>
    </div>
</div>

<x-form-task :action="route('tasks.store')" />

<x-view-task :tasksData="$tasksData" />
@endsection