<!DOCTYPE html>
<html>
<head>
    <title>Subir Imagen</title>
</head>
<body>
    <h1>Subir Imagen</h1>
    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        <label for="image">Imagen:</label>
        <input type="file" name="image" id="image" required>
        <button type="submit">Subir</button>
    </form>
</body>
</html>
