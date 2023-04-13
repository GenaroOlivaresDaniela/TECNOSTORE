<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;
use App\Models\type_user;
use App\Models\usuario;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function show(){
      
        
        return view('auth.registro');
    }


    public function registro(RegisterRequest $request){
 
       
        $user = usuario::create($request->validated());
        return redirect('/login')->with('success','ususario creado correctmente');


}
}
