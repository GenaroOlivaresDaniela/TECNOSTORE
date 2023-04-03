<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\empresa;
use App\Models\maquina;
use App\Models\produccion;
use App\Models\producto;
use App\Models\productoproduccione;
use App\Models\subcategoria;
use App\Models\type_maquina;
use App\Models\type_user;
use App\Models\usuario;
use Illuminate\Http\Request;

class inicio extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         
$typeuser = type_user::count('id');
$usuario = usuario::count('id');
$empresa = empresa::count('id');
$subcategoria= subcategoria::count('id');
$categoria = categoria::count('id');
$typemaquina = type_maquina::count('id');
$maquina = maquina::count('id');
$producto = producto::count('id');
$produccion = produccion::count('id');
$pp = productoproduccione::count('id');



return view('welcome', compact('typeuser','usuario','empresa','subcategoria','pp','categoria','typemaquina','maquina','producto', 'produccion'));
    }
}
