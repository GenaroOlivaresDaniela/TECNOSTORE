<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\empresa;
use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $productos = producto::Select('productos.id','productos.nombrep','productos.imagen','empresas.nombre_empresa','categorias.nombrec')
    ->join('empresas','empresas.id','=','productos.empresa_id')
    ->join('categorias','categorias.id','=','productos.categ_id')
    ->get();

    return view('producto.index'  ,compact('productos'));
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        $categorias = categoria::all('id','nombrec');
        $empresas = empresa::all('id','nombre_empresa');
        return view('producto.add', compact('categorias', 'empresas'));
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
            'nombrep' => 'required',
            'imagen'=>'image|required|mimes:jpg|max:2048'
        ],
            
        [
            'nombrep.required' =>'El campo esta vacio',
            'imagen.required' => 'El campo esta vacio',
            'imagen.mimes' => 'El archivo debe de ser en formato JPG'
            
        ]);
        $producto = $request->all();
        if(isset($producto["imagen"])){
            $producto["imagen"]=$filename=time().'.'.$producto["imagen"]->extension();
            $request->imagen->move(public_path('img_perfil'),$filename);
        }

        
        producto::create($producto);
        return redirect('producto')->with('message','SE AGREGO CORRECTAMENTE');
  
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = producto::Select('productos.id','productos.nombrep','productos.imagen','empresas.nombre_empresa','categorias.nombrec')
    ->join('empresas','empresas.id','=','productos.empresa_id')
    ->join('categorias','categorias.id','=','productos.categ_id')
    ->Where('productos.id', $id)->first();
       //   return $id;
       
       return view('producto.show', compact('producto'))->with('producto', $producto);

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $categorias = categoria::all('id','nombrec');
        $empresas = empresa::all('id','nombre_empresa');
        $producto =producto::find($id);
        return view('producto.edit', compact('categorias','empresas','producto'));

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
        $producto = producto::findOrFail($id);
        $product = $request->all();
        if(isset($product["imagen"])){
            $product["imagen"]=$filename=time().'.'.$product["imagen"]->extension();
            $request->img_perfil->move(public_path('img_perfil'),$filename);
        }
       $producto->update($product);
       return redirect('producto')->with('message','SE MODIFICO EXITOSAMENTE');
   
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
        $producto = producto::findOrFail($id);
        
        $producto->delete();
        return redirect('producto')->with('message','SE ELIMINO EXITOSAMENTE');


    }
    

}

