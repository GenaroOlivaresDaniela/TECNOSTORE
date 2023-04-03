<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\usuario;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $empresas = empresa::Select('empresas.id','empresas.nombre_empresa','usuarios.nombre')
    ->join('usuarios','usuarios.id','=','empresas.usuario_id')->get();

    return view('empresa.index'  ,compact('empresas'));
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        $usuarios = usuario::all('id','nombre');
        return view('empresa.add', compact('usuarios'));
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
            'nombre_empresa' => 'required',
            'usuario_id' => 'required'
        ],
            
        [
            'nombre_empresa.required' =>'El campo esta vacio',
            'nombre.required' => 'El campo esta vacio'
            
        ]);
        $empresa=$request->all();
        empresa::create($empresa);
        return redirect('empresa')->with('message','SE AGREGO CORRECTAMENTE');
  
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = empresa::Select('empresas.id','empresas.nombre_empresa','usuarios.nombre')
        ->join('usuarios','usuarios.id','=','empresas.usuario_id')
    ->Where('empresas.id', $id)->first();
   //   return $id;
   
   return view('empresa.show', compact('empresa'))->with('empresa', $empresa);

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $usuarios = usuario::all('id','nombre');
    $empresa =empresa::find($id);
   return view('empresa.edit', compact('usuarios','empresa'));
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
        $empresa = empresa::findOrFail($id);
         $input = $request->all();
        $empresa->update($input);
        return redirect('empresa')->with('message','SE MODIFICO EXITOSAMENTE');
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
        $empresa = empresa::findOrFail($id);
        
        $empresa->delete();
        return redirect('empresa')->with('message','SE ELIMINO EXITOSAMENTE');


    }
    

}


