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
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr class="border border-black hover:bg-white transition-colors">
                        <td class="px-4 py-2 text-center border border-black">{{ $cliente->document_number }}</td>
                        <td class="px-4 py-2 border border-black">{{ $cliente->first_name }}</td>
                        <td class="px-4 py-2 text-center border border-black">{{ $cliente->last_name }}</td>
                        <td class="px-4 py-2 text-center border border-black">{{ $cliente->address }}</td>
                        <td class="px-4 py-2 border border-black">{{ $cliente->date_of_birth }}</td>
                        <td class="px-4 py-2 text-center border border-black">{{ $cliente->phone_number }}</td>
                        <td class="px-4 py-2 text-center border border-black">{{ $cliente->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
