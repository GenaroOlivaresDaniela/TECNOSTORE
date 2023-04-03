<?php

namespace App\Http\Controllers;

use App\Models\produccion;
use App\Models\producto;
use App\Models\productoproduccione;
use Illuminate\Http\Request;

class ProductoproduccioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $productoproducciones = productoproduccione::Select('productoproducciones.id','productoproducciones.fecha','productoproducciones.hora','productoproducciones.cantidad','productos.nombrep','produccions.nombrepr')
    ->join('productos','productos.id','=','productoproducciones.producto_id')
    ->join('produccions','produccions.id','=','productoproducciones.produccion_id')
    ->get();

    return view('productoproduccion.index'  ,compact('productoproducciones'));
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        $productos = producto::all('id','nombrep');
        $producciones = produccion::all('id','nombrepr');
        return view('productoproduccion.add', compact('productos', 'producciones'));
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
            'fecha' => 'required',
            'hora' => 'required',
            'cantidad' => 'required',
                        
            
        ],
            
        [
            'fecha.required' =>'El campo esta vacio',
            'hora.required' =>'El campo esta vacio',
            'cantidad.required' =>'El campo esta vacio',
            
            
        ]);
        $productoproduccion = $request->all();
        productoproduccione::create($productoproduccion);
        return redirect('productoproduccion')->with('message','SE AGREGO CORRECTAMENTE');
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productoproduccion = productoproduccione::Select('productoproducciones.id','productoproducciones.fecha','productoproducciones.hora','productoproducciones.cantidad','productos.nombrep','produccions.nombrepr')
        ->join('productos','productos.id','=','productoproducciones.producto_id')
        ->join('produccions','produccions.id','=','productoproducciones.produccion_id') 
        ->Where('productoproducciones.id', $id)->first();
       //   return $id;
       
       return view('productoproduccion.show', compact('productoproduccion'))->with('productoproduccion', $productoproduccion);
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $productos = producto::all('id','nombrep');
    $producciones = produccion::all('id','nombrepr');
    
    $productoproduccion =productoproduccione::find($id);
    return view('productoproduccion.edit', compact('productos','producciones','productoproduccion'));

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
        $productoproduccion = productoproduccione::findOrFail($id);
        $input = $request->all();
       $productoproduccion->update($input);
       return redirect('productoproduccion')->with('message','SE MODIFICO EXITOSAMENTE');
   
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
        $productoproduccion = productoproduccione::findOrFail($id);
        
        $productoproduccion->delete();
        return redirect('productoproduccion')->with('message','SE ELIMINO EXITOSAMENTE');



    }
    


}
