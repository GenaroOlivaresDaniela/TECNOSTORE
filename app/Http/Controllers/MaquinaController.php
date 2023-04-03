<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\maquina;
use App\Models\type_maquina;
use Illuminate\Http\Request;

class MaquinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $maquinas = maquina::Select('maquinas.id','maquinas.nombrem','empresas.nombre_empresa','type_maquinas.namem')
    ->join('empresas','empresas.id','=','maquinas.empresa_id')
    ->join('type_maquinas','type_maquinas.id','=','maquinas.tipom_id')
    ->get();

    return view('maquina.index'  ,compact('maquinas'));
  
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        $type_maquinas = type_maquina::all('id','namem');
        $empresas = empresa::all('id','nombre_empresa');
        return view('maquina.add', compact('type_maquinas', 'empresas'));
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
            'nombrem' => 'required'
        ],
            
        [
            'nombrem.required' =>'El campo esta vacio',
            
            
        ]);
        $maquina=$request->all();
        maquina::create($maquina);
        return redirect('maquina')->with('message','SE AGREGO CORRECTAMENTE');
  
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maquina = maquina::Select('maquinas.id','maquinas.nombrem','empresas.nombre_empresa','type_maquinas.namem')
        ->join('type_maquinas','type_maquinas.id','=','maquinas.tipom_id')
    ->join('empresas','empresas.id','=','maquinas.empresa_id')
    ->Where('maquinas.id', $id)->first();
   //   return $id;
   
   return view('maquina.show', compact('maquina'))->with('maquina', $maquina);

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $type_maquinas = type_maquina::all('id','namem');
        $empresas = empresa::all('id','nombre_empresa');
        $maquina =maquina::find($id);
        return view('maquina.edit', compact('type_maquinas','empresas','maquina'));
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
        $maquina = maquina::findOrFail($id);
        $input = $request->all();
       $maquina->update($input);
       return redirect('maquina')->with('message','SE MODIFICO EXITOSAMENTE');
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
        $maquina = maquina::findOrFail($id);
        
        $maquina->delete();
        return redirect('maquina')->with('message','SE ELIMINO EXITOSAMENTE');

    }
    

}

