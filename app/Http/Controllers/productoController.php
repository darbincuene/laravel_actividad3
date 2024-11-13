<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\category;


class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = producto::with('category')->get();
        return view('sisven.index', compact('productos'));
        
        
    }

    public function destroy(string $id)
    {
        $productos= producto::find($id);
      

        if($productos){
            $productos->delete();
             $producto = producto::all();
            return redirect()->route('sisven.index' );
        }else{
            return response()->json(['message'=>'producto no encontrado'],404);

        }
        
    }

    public function create()
    {
        $categories=category::all();
        return view('sisven.create',compact('categories'));
    }
    
    public function store(Request $request)
    {
        $valited =$request->validate([
            'name' => 'required',
            'price'=> 'required',
            'stok'=>'required',
            'category_id'=>'required | exists:categories,id'

        ]);
        
        producto::create($valited);
       // dd($valited);
        return redirect()->route('sisven.index')->with('info','producto creado con exito');
    }



    public function edit(string $id)
    {
        
        $productos = producto::findOrFail($id);
        $categories =category::all();
        return view('sisven.edit',compact('productos','categories'));
       
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'stok'=>'required|numeric',
            'category_id'=>'required|exists:categories,id'
        ]);

        $producto= producto::find($id);
        $producto->update([
            'name'=>$request->input ('name'),
            'price'=>$request->input ('price'),
            'stok'=>$request->input ('stok'),
            'category_id'=>$request->input ('category_id')
        ]);
        return redirect()->route('sisven.index');
    }
   
    
   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    

    /**
     * Update the specified resource in storage.
     */
    

    /**
     * Remove the specified resource from storage.
     */
    
}
