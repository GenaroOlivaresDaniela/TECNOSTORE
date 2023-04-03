<?php
 
namespace App\Http\Controllers;

use App\Models\maquina;
use App\Models\produccion;
use App\Models\producto;
use Illuminate\Http\Request;

class ProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $producciones = produccion::Select('produccions.id','produccions.nombrepr','produccions.dia','produccions.fecha_inicio','produccions.fecha_final','produccions.total_produccion','maquinas.nombrem')
    ->join('maquinas','maquinas.id','=','produccions.maquina_id')
    ->get();

    return view('produccion.index'  ,compact('producciones'));
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        $maquinas = maquina::all('id','nombrem');
        return view('produccion.add', compact('maquinas'));   
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
            'nombrepr' => 'required',
            'dia' => 'required',
            'fecha_inicio' => 'required',
            'fecha_final' => 'required',
            'total_produccion' => 'required',
            
        ],
            
        [
            'nombrepr.required' =>'El campo esta vacio',
            'dia.required' => 'El campo esta vacio',
            'fecha_inicio.required' => 'El campo esta vacio',
            'fecha_finl.required' => 'El campo esta vacio',
            'total_produccion.required' => 'El campo esta vacio',
           
            
        ]);
        $produccion = $request->all();
        produccion::create($produccion);
        return redirect('produccion')->with('message','SE AGREGO CORRECTAMENTE');
  
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produccion = produccion::Select('produccions.id','produccions.nombrepr','produccions.dia','produccions.fecha_inicio','produccions.fecha_final','produccions.total_produccion','maquinas.nombrem')
        ->join('maquinas','maquinas.id','=','produccions.maquina_id')
        ->Where('produccions.id', $id)->first();
           //   return $id;
           
           return view('produccion.show', compact('produccion'))->with('produccion', $produccion);

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $maquinas = maquina::all('id','nombrem');
    $produccion =produccion::find($id);
    return view('produccion.edit', compact('maquinas','produccion'));


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
        $produccion = produccion::findOrFail($id);
        $input = $request->all();
        $produccion->update($input);
        return redirect('produccion')->with('message','SE MODIFICO CORRECTAMENTE');
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
        $produccion = produccion::findOrFail($id);
        
        $produccion->delete();
        return redirect('produccion')->with('message','SE ELIMINO EXITOSAMENTE');


    }
    

}

