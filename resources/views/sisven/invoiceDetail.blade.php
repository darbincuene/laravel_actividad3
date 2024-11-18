<x-app-layout>
    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            .print-area, .print-area * {
                visibility: visible;
            }

            .print-area {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
            }
            .no-print {
                display: none;
            }
        }
    </style>

    <div class="container mx-auto mt-5 print-area">
        <h2 class="text-2xl font-bold mb-4">Detalle de Factura</h2>

        @if ($details->isNotEmpty())
            <div class="bg-white p-5 shadow rounded mb-5">
                <p><strong>Cliente:</strong> {{ $details->first()->invoice->customer->first_name ?? 'N/A' }} {{ $details->first()->invoice->customer->last_name ?? '' }}</p>
                <p><strong>Fecha:</strong> {{ $details->first()->invoice->date ?? 'N/A' }}</p>
                <p><strong>Modo de Pago:</strong> {{ $details->first()->invoice->paymode->name ?? 'N/A' }}</p>
            </div>

            <div class="bg-white p-5 shadow rounded">
                <h3 class="text-xl font-semibold mb-3">Productos</h3>

                <table class="table-auto w-full border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="border border-gray-300 px-4 py-2 text-left">Producto</th>
                            <th class="border border-gray-300 px-4 py-2 text-center">Cantidad</th>
                            <th class="border border-gray-300 px-4 py-2 text-center">Precio</th>
                            <th class="border border-gray-300 px-4 py-2 text-center">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp

                        @foreach ($details as $detail)
                            @php
                                $subtotal = $detail->quantity * $detail->price;
                                $total += $subtotal;
                            @endphp
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">{{ $detail->product->name }}</td>
                                <td class="border border-gray-300 px-4 py-2 text-center">{{ $detail->quantity }}</td>
                                <td class="border border-gray-300 px-4 py-2 text-center">{{ number_format($detail->price, 2) }}</td>
                                <td class="border border-gray-300 px-4 py-2 text-center">{{ number_format($subtotal, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4 text-right">
                    <p class="text-lg font-bold">Total: ${{ number_format($total, 2) }}</p>
                </div>
            </div>
        @else
            <p class="text-gray-500">No hay productos para esta factura.</p>
        @endif
    </div>

    <div class="flex justify-between mt-5 no-print">
        <a href="{{ route('sisven.facturas') }}" class="inline-block text-blue-600 hover:underline">Volver a la lista</a>
        <button onclick="window.print()" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Imprimir</button>
    </div>
</x-app-layout>
