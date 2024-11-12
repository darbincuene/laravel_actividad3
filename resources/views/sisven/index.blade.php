<x-app-layout>
    <div class="flex justify-center p-6">
        <table class="w-full max-w-4xl bg-white rounded-lg shadow-lg text-gray-700">
            <caption class="text-lg font-semibold py-2">Lista de Productos</caption>
            <thead>
                <tr class="bg-blue-200 border-b border-gray-300 text-left text-gray-600">
                    <th class="px-4 py-3 border border-black">Id</th>
                    <th class="px-4 py-3 border border-black">Nombre</th>
                    <th class="px-4 py-3 border border-black">Precio</th>
                    <th class="px-4 py-3 border border-black">Stock</th>
                    <th class="px-4 py-3 border border-black">Categoría</th>
                    <th class="px-4 py-3 border border-black">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr class="border border-black hover:bg-white transition-colors">
                        <td class="px-4 py-2 text-center border border-black">{{ $producto->id}}</td>
                        <td class="px-4 py-2 border border-black">{{ $producto->name }}</td>
                        <td class="px-4 py-2 text-center border border-black">${{ number_format($producto->price, 2) }}</td>
                        <td class="px-4 py-2 text-center border border-black">{{ $producto->stok }}</td>
                        <td class="px-4 py-2 border border-black">
                            {{ $producto->category ? $producto->category->name : 'No hay' }}
                        </td>
                        <td class="px-4 py-2 text-center border border-black">
                            <form action="{{ route('products.destroy', ['id' => $producto->id]) }}" method="POST" class="inline-block">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="px-4 py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" title="Eliminar Producto">
                                    <i class="fas fa-trash-alt mr-2"></i> Eliminar
                                </button>
                            </form>

                                
                                <button type="submit" class="px-4 py-2 bg-green-600 text-white font-semibold rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" title="editar Producto">
                                    <a href="{{route('products.edit',['id'=>$producto->id])}}">Actualizar</a> 
                                </button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
