<?php

namespace App\Http\Controllers;

use App\Models\type_user;
use App\Models\usuario;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create () {
        $typeusers = type_user::all('id','name');
        
        return view('auth.register', compact('typeusers'));
    }
    

    public function store(Request $request){
        //dd($request->all());
        $this->validate(request(), [
            'nombre' => 'required',
            'email' => 'required|email',
            'img_perfil' => 'required',
            'type_id' => 'required',
            
        ]);

        $usuario = $request->all();
        if(isset($usuario["img_perfil"])){
            $usuario["img_perfil"]=$filename=time().'.'.$usuario["img_perfil"]->extension();
            $request->img_perfil->move(public_path('img_perfil'),$filename);
        }
        $usuario = usuario::create(request(['nombre', 'correo', 'contraseña', 'img_perfil', 'type_id'])); 

        auth()->login($usuario);
        return redirect()->to('/');
    }
    
    
}
