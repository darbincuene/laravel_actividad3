<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear cliente') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-8 space-y-6">
                    <form action="{{ route('clientes.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="form-group">
                            <label for="document_number" class="block text-sm font-medium text-gray-700">Numero Documento</label>
                            <input type="number" name="document_number" id="document_number" placeholder="Numero de Documento"
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="first_name" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" name="first_name" id="first_name" placeholder="Nombre del Cliente"
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="block text-sm font-medium text-gray-700">Apellido</label>
                            <input type="text" name="last_name" id="last_name" placeholder="Apellido del Cliente"
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="address" class="block text-sm font-medium text-gray-700">Dirección</label>
                            <input type="text" name="address" id="address" placeholder="Dirección del Cliente"
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="Date_of_birth" class="block text-sm font-medium text-gray-700">Fecha de Nacimiento</label>
                            <input type="date" name="Date_of_birth" id="Date_of_birth"
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                            <input type="email" name="email" id="email" placeholder="Correo Electrónico"
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="phone_number" class="block text-sm font-medium text-gray-700">Número de Teléfono</label>
                            <input type="number" name="phone_number" id="phone_number" placeholder="Número de Teléfono"
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   required>
                        </div>

                        <button type="submit"
                                class="w-full py-3 px-4 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-200 ease-in-out">
                            Crear Cliente
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
