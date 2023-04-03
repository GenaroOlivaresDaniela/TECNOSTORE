<?php

namespace App\Http\Controllers;
 
use App\Models\categoria;
use App\Models\empresa;
use App\Models\subcategoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller

    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
    {
        $categorias = categoria::Select('categorias.id','categorias.nombrec','subcategorias.nombre_s','empresas.nombre_empresa')
        ->join('empresas','empresas.id','=','categorias.empresa_id')
        ->join('subcategorias','subcategorias.id','=','categorias.subcateg_id')
        ->get();
    
        return view('categoria.index'  ,compact('categorias'));
       
    }
    
    /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
    public function create()
        {
            $subcategorias = subcategoria::all('id','nombre_s');
        $empresas = empresa::all('id','nombre_empresa');
        return view('categoria.add', compact('subcategorias', 'empresas'));
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
                'nombrec' => 'required'
            ],
                
            [
                'nombrec.required' =>'El campo esta vacio',
                
                
            ]);
            $categoria=$request->all();
            categoria::create($categoria);
            return redirect('categoria')->with('message','SE AGREGO CORRECTAMENTE');
      
      
        }
    
          /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $categoria = categoria::Select('categorias.id','categorias.nombrec','subcategorias.nombre_s','empresas.nombre_empresa')
            ->join('empresas','empresas.id','=','categorias.empresa_id')
            ->join('subcategorias','subcategorias.id','=','categorias.subcateg_id')
        ->Where('categorias.id', $id)->first();
       //   return $id;
       
       return view('categoria.show', compact('categoria'))->with('categoria', $categoria);
    
        }
    
         /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
    public function edit($id)
    {
        $subcategorias = subcategoria::all('id','nombre_s');
        $empresas = empresa::all('id','nombre_empresa');
        $categoria =categoria::find($id);
        return view('categoria.edit', compact('subcategorias','empresas','categoria'));
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
            $categoria = categoria::findOrFail($id);
            $input = $request->all();
           $categoria->update($input);
           return redirect('categoria')->with('message','SE MODIFICO EXITOSAMENTE');
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
            $categoria = categoria::findOrFail($id);
        
            $categoria->delete();
            return redirect('categoria')->with('message','SE ELIMINO EXITOSAMENTE');
    
    
        }
        
    
    }
    
    