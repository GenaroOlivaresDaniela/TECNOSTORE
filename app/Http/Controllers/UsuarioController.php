<?php

namespace App\Http\Controllers;

use App\Models\type_user;
use App\Models\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
{
    $usuarios = usuario::Select('usuarios.id','usuarios.nombre','usuarios.correo','usuarios.contraseña','usuarios.img_perfil','type_users.name')
    ->join('type_users','type_users.id', '=', 'usuarios.type_id')->get();
    return view('usuario.index'  ,compact('usuarios'));
  
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        
        $typeusers = type_user::all('id','name');
        return view('usuario.add', compact('typeusers'));
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
        $user=$request->all();
       
        
        $validacion = $request->validate([
            'nombre' => 'required',
            'correo' => 'required',
            'contraseña' => 'required|min:8',
            'img_perfil'=>'image|required|mimes:jpg|max:2048'
            

        ],
            
        [
            'nombre.required' =>'El campo esta vacio',
            'correo.required' => 'El campo esta vacio',
            'contraseña.required' => 'El campo esta vacio',
              'contraseña.min' => 'Se require minimo 8 caracteres',
            'img_perfil.required' => 'El campo esta vacio'
            
        ]);
        $usuario = $request->all();
if(isset($usuario["img_perfil"])){
    $usuario["img_perfil"]=$filename=time().'.'.$usuario["img_perfil"]->extension();
    $request->img_perfil->move(public_path('img_perfil'),$filename);
}

      
        // $usuario['contraseña']=bcrypt($request->contraseña);
        usuario::create($usuario);

           
        return redirect('usuario')->with('message','SE AGREGO CORRECTAMENTE');
  
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = usuario::Select('usuarios.id','usuarios.nombre','usuarios.correo','usuarios.contraseña','usuarios.img_perfil','type_users.name')
   ->join('type_users','type_users.id', '=', 'usuarios.type_id')
   ->Where('usuarios.id', $id)->first();
        return view('usuario.show', compact('usuario'))->with('usuarios', $usuario);

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    
    $typeusers = type_user::all('id','name');
    $usuario = usuario::find($id);
   return view('usuario.edit', compact('typeusers','usuario'));
   
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
        $user = usuario::findOrFail($id);
        $usuario = $request->all();
        if(isset($usuario["img_perfil"])){
            $usuario["img_perfil"]=$filename=time().'.'.$usuario["img_perfil"]->extension();
            $request->img_perfil->move(public_path('img_perfil'),$filename);
        }
       
        $input['contraseña']=bcrypt($request->contraseña);
        $user->update($usuario);
        return redirect('usuario')->with('message','SE MODIFICO CORRECTAMENTE');
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
        $usuario = usuario::findOrFail($id);
        $usuario->delete();
        return redirect('usuario')->with('message','SE ELIMINO EXITOSAMENTE');


    }
    

    
}

