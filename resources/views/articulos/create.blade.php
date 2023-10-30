@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">Crear nuevo articulo</h4>
        <div class="card w-100">
            <div class="card-body">
                <form method="POST" action="{{ route('articulos.store') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label mt-3" for="dni">Dni : </label>
                        <input type="text" class="form-control" id="dni" name="dni" placeholder="Ingrese el dni" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="nombres">Nombres : </label>
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese los nombres" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="apellidos">Apellidos : </label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese los apellidos" required>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a href="{{ route('alumnos.index') }}" class="btn btn-danger">Volver a listado</a>
            </div>
        </div>
    </div>
@endsection
