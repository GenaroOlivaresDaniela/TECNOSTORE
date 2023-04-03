<?php

namespace App\Http\Controllers;

use App\Models\subcategoria;
use Illuminate\Http\Request;

class SubcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $subcategorias = subcategoria::all();

    return view('subcategoria.index'  ,compact('subcategorias'));
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        return view('subcategoria.add');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validacion = $request->validate([
            'nombre_s' => 'required'],
        [
            'nombre_s.required' =>'El campo esta vacio'
            
        ]);

        $subcategoria=$request->all();
        subcategoria::create($subcategoria);

        return redirect('subcategoria')->with('message','SE AGREGO CORRECTAMENTE');
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subcategoria = subcategoria::find($id);

       
        return view('subcategoria.show', compact('subcategoria'));

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $subcategoria = subcategoria::findOrFail($id); 
    return view('subcategoria.edit', compact('subcategoria'));

}

/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subcategoria = subcategoria::findOrFail($id);
        $input = $request->all();
        $subcategoria->update($input);
        return redirect('subcategoria')->with('message','SE MODIFICO CORRECTAMENTE');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $subcategoria = subcategoria::findOrFail($id);
        $subcategoria->delete();
            // return 'El registro se elimno con exito';

         return redirect('subcategoria')->with('message','SE ELIMINO CON EXITO');


    }
    

}

