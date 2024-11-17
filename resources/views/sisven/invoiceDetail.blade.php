<x-app-layout>
    <div class="container mx-auto mt-5">
        <h2 class="text-2xl font-bold mb-4">Detalle de Factura #{{ $invoices->number }}</h2>

        <div class="bg-white p-5 shadow rounded">
            <p><strong>Cliente:</strong> {{ $invoices->customer->first_name }} {{ $invoices->customer->last_name }}</p> <!-- Aquí también cambias de $invoice a $invoices -->
            <p><strong>Fecha:</strong> {{ $invoices->date }}</p>
            <p><strong>Modo de Pago:</strong> {{ $invoices->paymode->name }}</p>
        </div>

        <a href="{{ route('sisven.facturas') }}" class="mt-5 inline-block text-blue-600 hover:underline">Volver a la lista</a>
    </div>
</x-app-layout>
