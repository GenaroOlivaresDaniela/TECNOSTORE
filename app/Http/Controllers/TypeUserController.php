<?php

namespace App\Http\Controllers;

use App\Models\type_user;
use Illuminate\Http\Request;

class TypeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $typeusers = type_user::all();

    return view('typeuser.index'  ,compact('typeusers'));
  
}

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
public function create()
    {
        return view('typeuser.add');
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
            'name' => 'required'],
        [
            'name.required' =>'El campo esta vacio'
            
        ]);

        $typeuser=$request->all();
        type_user::create($typeuser);

        return redirect('typeuser')->with('message','SE AGREGO CORRECTAMENTE');
  
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typeuser = type_user::find($id);

        // return $typeuser;
        return view('typeuser.show', compact('typeuser'));

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function edit($id)
{
    $typeuser = type_user::findOrFail($id); 
    return view('typeuser.edit', compact('typeuser'));
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
        $typeuser = type_user::findOrFail($id);
        $input = $request->all();
        $typeuser->update($input);
        return redirect('typeuser')->with('message','SE MODIFICO CORRECTAMENTE');
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
        $typeuser = type_user::findOrFail($id);
        $typeuser->delete();
            // return 'El registro se elimno con exito';

         return redirect('typeuser')->with('message','SE ELIMINO CON EXITO');


    }
    

}

