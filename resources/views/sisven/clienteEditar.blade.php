<x-app-layout>
<form action="{{ route('clientes.update', $clientes->id) }}" method="POST" class="max-w-lg mx-auto p-6 bg-white shadow-md rounded mt-1.5 border border-cyan-400">
    @csrf
    @method('PUT')

    <div class="mb-4 ">
        <label for="document_number" class="block text-gray-700 font-semibold">Número de Documento</label>
        <input type="text" name="document_number" id="document_number" value="{{ old('document_number', $clientes->document_number) }}" 
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
        @error('document_number')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="first_name" class="block text-gray-700 font-semibold">Nombre</label>
        <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $clientes->first_name) }}" 
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
        @error('first_name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="last_name" class="block text-gray-700 font-semibold">Apellido</label>
        <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $clientes->last_name) }}" 
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
        @error('last_name')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="address" class="block text-gray-700 font-semibold">Dirección</label>
        <input type="text" name="address" id="address" value="{{ old('address', $clientes->address) }}" 
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
        @error('address')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="Date_of_birth" class="block text-gray-700 font-semibold">Fecha de Nacimiento</label>
        <input type="date" name="Date of birth" id="Date_of_birth" value="{{ old('Date of birth', $clientes->Date_of_birth) }}" 
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" >
        @error('Date of birth')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="phone_number" class="block text-gray-700 font-semibold">Teléfono</label>
        <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number', $clientes->phone_number) }}" 
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
        @error('phone_number')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-4">
        <label for="email" class="block text-gray-700 font-semibold">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email', $clientes->email) }}" 
               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
        @error('email')
            <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
    </div>

    <div class="mt-6">
        <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition duration-200">
            Actualizar
        </button>
    </div>
</form>
</x-app-layout>
