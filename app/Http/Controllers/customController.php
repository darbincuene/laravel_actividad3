<?php

namespace App\Http\Controllers;
use App\Models\customer;
use Illuminate\Http\Request;

class customController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function destroy(string $id)
     {
        $clientes=Customer::find($id);

        if($clientes){
            $clientes->delete();
            $client=Customer::all();
            return redirect()->route('clientes.index');

        }else{
            return response()->json(['message'=>'producto no encontrado']);
        }
     }


    public function index()
    {
        $clientes = Customer::all(); 
        return view('sisven.client', compact('clientes'));
    }
    
    public function edit(string $id)
    {
        $clientes=Customer::findOrFail($id);
        return view('sisven.clienteEditar',compact('clientes'));

    }
    
    public function update(Request $request, string $id)
    {
        $request->validate([
            'document_number'=>'required|numeric',
            'first_name'=>'required',
            'last_name'=>'required',
            'address'=>'required',
            'Date_of_birth'=>'required',
            'phone_number'=>'required|numeric',
            'email'=>'required'
        ]);
        $clientes=Customer::findOrFail($id);
        $clientes->update([
            'document_number'=>$request->input('document_number'),
            'first_name'=>$request->input('first_name'),
            'last_name'=>$request->input('last_name'),
            'address'=>$request->input('address'),
            'Date_of_birth'=>$request->input('Date_of_birth'),
            'phone_number'=>$request->input('phone_number'),
            'email'=>$request->input('email')   
        ]);

        return redirect()->route('clientes.index');
    }


   
    public function create()
    {
        return view('sisven.createclient');
        
    }

    
    public function store(Request $request)
    {
        $valited=$request->validate([
            'document_number'=>'required|numeric',
            'first_name'=>'required',
            'last_name'=>'required',
            'address'=>'required',
            'Date_of_birth'=>'required|date',
            'phone_number'=>'required|numeric',
            'email'=>'required'
        ]);
        Customer::create($valited);
        return redirect()->route('clientes.index');
        

    }

  
    public function show(string $id)
    {
        
    }

   
}
