<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class SessionsController extends Controller
{
    public function create () {
        return view('auth.login');
    }
    public function store() {
        if(auth()->attempt(request (['correo', 'contraseña'])) == false) {
            return back()->withErrors([
            'message' => 'Correo o contraseña inconrrectos, intente de nuevo'
            ]);
        }
    return redirect()-> to('/');
    }
    public function destroy(){

        auth()->logout();

        return redirect()->to('/');
    }
}
