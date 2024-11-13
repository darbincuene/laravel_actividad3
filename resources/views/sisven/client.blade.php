<x-app-layout>
    <div class="flex justify-center p-6">
        <table class="w-full max-w-4xl bg-white rounded-lg shadow-lg text-gray-700">
            <caption class="text-lg font-semibold py-2">Clientes</caption>
            <thead>
                <tr class="bg-blue-200 border-b border-gray-300 text-left text-gray-600">
                    <th class="px-4 py-3 border border-black">Document Number</th>
                    <th class="px-4 py-3 border border-black">First Name</th>
                    <th class="px-4 py-3 border border-black">Last Name</th>
                    <th class="px-4 py-3 border border-black">Address</th>
                    <th class="px-4 py-3 border border-black">Date of Birth</th>
                    <th class="px-4 py-3 border border-black">Phone Number</th>
                    <th class="px-4 py-3 border border-black">Email</th>
                    <th class="px-4 py-3 border border-black">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr class="border border-black hover:bg-white transition-colors">
                        <td class="px-4 py-2 text-center border border-black">{{ $cliente->document_number }}</td>
                        <td class="px-4 py-2 border border-black">{{ $cliente->first_name }}</td>
                        <td class="px-4 py-2 text-center border border-black">{{ $cliente->last_name }}</td>
                        <td class="px-4 py-2 text-center border border-black">{{ $cliente->address }}</td>
                        <td class="px-4 py-2 border border-black">{{ $cliente->Date_of_birth }}</td>
                        <td class="px-4 py-2 text-center border border-black">{{ $cliente->phone_number }}</td>
                        <td class="px-4 py-2 text-center border border-black">{{ $cliente->email }}</td>

                        <td class="px-4 py-2 text-center border border-black">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('clientes.edit', ['id' => $cliente->id]) }}" class="px-4 py-2 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50" title="Editar Cliente">
                                    Editar
                                </a>
                                
                                <form action="{{ route('clientes.destroy', ['id' => $cliente->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50" title="Eliminar Cliente">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                        
                     
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
