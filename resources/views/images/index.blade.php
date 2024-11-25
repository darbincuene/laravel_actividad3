<!DOCTYPE html>
<html>
<head>
    <title>Lista de Imágenes</title>
</head>
<body>
    <h1>Lista de Imágenes</h1>
    <a href="{{ route('images.create') }}">Subir Nueva Imagen</a>
    <ul>
        @foreach ($images as $image)
            <li>
                <h3>{{ $image->title }}</h3>
                <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $image->title }}" width="150">
                <a >Editar</a>
                <form method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
