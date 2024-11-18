<?php

namespace App\Http\Controllers;
use App\Models\invoice;
use App\Models\paymode;
use App\Models\customer;
use App\Models\detail;
use Illuminate\Http\Request;

class invoiceController extends Controller
{
    
    public function index()
    {
        $invoices = invoice::all();
        return view('sisven.facturas', compact('invoices'));

    }

    public function show(string $id)
    {
        $details = Detail::with('product', 'invoice.customer', 'invoice.paymode')
            ->where('invoices_id', $id)
            ->get();
        return view('sisven.invoiceDetail', compact('details'));
    }
    public function create()
    {
        $paymodes = paymode::all();
        $customers = customer::all();
        return view('sisven.createInvoice',compact('paymodes','customers'));
        
    }
    
    public function store(Request $request)
    {
        $valited =$request->validate([
            'number'=>'required|unique:invoices,number',
            'customer_id'=>'required|exists:customers,id',
            'date'=>'required|date',
            'paymode_id'=>'required|exists:paymode,id',
        ]);
        invoice::create($valited);
        return redirect()->route('sisven.facturas')->with('success','Factura creada con exito');
        
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
