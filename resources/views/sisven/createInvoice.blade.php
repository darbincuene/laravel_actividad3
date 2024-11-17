<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Nueva Factura') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-8 space-y-6">

                    <form action="{{ route('invoices.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Número de Factura -->
                        <div class="form-group">
                            <label for="number" class="block text-sm font-medium text-gray-700">Número de Factura</label>
                            <input type="text" id="number" name="number" value="{{ old('number') }}"
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   required>
                            @error('number')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="customer_id" class="block text-sm font-medium text-gray-700">Cliente</label>
                            <select id="customer_id" name="customer_id"
                                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    required>
                                <option value="">Selecciona un cliente</option>
                                @foreach($customers as $customer)
                                    <option value="{{ $customer->id }}" {{ old('customer_id') == $customer->id ? 'selected' : '' }}>
                                        {{ $customer->first_name }} {{ $customer->last_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('customer_id')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date" class="block text-sm font-medium text-gray-700">Fecha de la Factura</label>
                            <input type="date" id="date" name="date" value="{{ old('date') }}"
                                   class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                   required>
                            @error('date')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Modo de Pago -->
                        <div class="form-group">
                            <label for="paymode_id" class="block text-sm font-medium text-gray-700">Modo de Pago</label>
                            <select id="paymode_id" name="paymode_id"
                                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                    required>
                                <option value="">Selecciona un modo de pago</option>
                                @foreach($paymodes as $paymode)
                                    <option value="{{ $paymode->id }}" {{ old('paymode_id') == $paymode->id ? 'selected' : '' }}>
                                        {{ $paymode->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('paymode_id')
                                <span class="text-red-500 text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Botón de Envío -->
                        <div class="flex justify-end">
                            <button type="submit"
                                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition duration-200 ease-in-out">
                                Crear Factura
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
