<form action="{{ $action }}" method="POST" class="row">
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
                    <option value="en proceso">En progreso</option>
                    <option value="completada">Completada</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
            <button type="submit" class="btn btn-primary w-100 mb-5 fs-3 fw-bold">Crear</button>
        </div>
    </div>
</form>