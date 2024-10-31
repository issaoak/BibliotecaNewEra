@extends('layouts.plantilla')

@section('content')
    <h2>Registro de Libro</h2>
    <form action="{{ route('libro.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="paginas">Páginas</label>
            <input type="number" name="paginas" id="paginas" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="año">Año</label>
            <input type="number" name="año" id="año" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="editorial">Editorial</label>
            <input type="text" name="editorial" id="editorial" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email de Editorial</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

    @if(session('success'))
        <script>alertify.success("{{ session('success') }}");</script>
    @endif
@endsection
