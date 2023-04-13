<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    public function show(){
        if(Auth::check()){
            return redirect()->route('welcome');
        }
    return view('auth.login');
    }


    public function valida(Request $request)
    {
      //  dd($request->all());
$correo = $request->get('correo');
$contraseña = $request->get('contraseña');

$consulta = usuario::where('correo', '=', $correo )
->where('contraseña', '=', $contraseña)->get();


if(count($consulta) == 0 or $consulta[0]->activo == '0'){
    return redirect()->to('/inicio');

}

    }
    protected function authenticated(Request $request, $consulta) 
    {
        return redirect()->route('inicio');
    }

    
}
