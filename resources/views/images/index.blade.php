<x-app-layout>
    <div class="flex justify-center">
        <div class="max-w-4xl w-full">
            <h1 class="text-lg font-bold mb-4 text-center">Lista de Imágenes</h1>
            
            <a class="italic text-blue-500 hover:underline mb-4 inline-block" href="{{ route('images.create') }}">Subir Imagen</a>
            
            @foreach ($images as $image)
                <div >
                    <div class="border p-4 rounded shadow-md w-96 h-auto ">

                    
                    <h3 class="font-semibold">{{ $image->title }}</h3>
                    <img 
                      class="object-cover w-96 h-96"
                        src="{{ asset('storage/' . $image->path) }}" 
                        alt="{{ $image->title }}" 
                    >
                    <div class="flex justify-center space-x-4">
                        <a href="{{ route('images.edit', $image->id) }}" class="text-blue-500 hover:underline">Editar</a>
                        
                        <form method="POST" action="{{ route('images.destroy', $image->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('¿Estás seguro de que deseas eliminar esta imagen?')">Eliminar</button>
                        </form>
                    </div>
                </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
