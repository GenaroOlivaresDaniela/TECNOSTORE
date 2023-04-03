<?php

namespace App\Http\Controllers;

use App\Models\type_maquina;
use Illuminate\Http\Request;

class TypeMaquinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $typemaquinas = type_maquina::all();

    return view('typemaquina.index'  ,compact('typemaquinas'));
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        return view('typemaquina.add');
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
            'namem' => 'required'],
        [
            'name.required' =>'El campo esta vacio'
            
        ]);

        $typemaquina=$request->all();
        type_maquina::create($typemaquina);

        return redirect('typemaquina')->with('message','SE AGREGO CORRECTAMENTE');
  
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typemaquina = type_maquina::find($id);

        // return $typeuser;
        return view('typemaquina.show', compact('typemaquina'));


    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $typemaquina = type_maquina::findOrFail($id); 
    return view('typemaquina.edit', compact('typemaquina'));
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
        $typemaquina = type_maquina::findOrFail($id);
        $input = $request->all();
        $typemaquina->update($input);
        return redirect('typemaquina')->with('message','SE MODIFICO CORRECTAMENTE');

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
        $typemaquina = type_maquina::findOrFail($id);
        $typemaquina->delete();
            // return 'El registro se elimno con exito';

         return redirect('typemaquina')->with('message','SE ELIMINO CON EXITO');


    }
    

}

