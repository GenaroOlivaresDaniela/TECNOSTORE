@extends('Layouts.app')



@section('content')

<h1 class="display-1 text-center">REGISTRO TECNOSTORE</h1>
<div class="container col-md-5 bg-secondary border border-4 rounded-3">
  
    <form class="row g-1"  method="POST" action="">
        @csrf


        <div class="col-md-8 offset-md-2" > 
            <label for="Nombre" class="form-label">Nombre Completo</label>
            <input type="name" class="form-control" placeholder="ingrese su nombre completo" id="nombre" name="nombre">
          </div>
          @error('nombre')
          <p class="border border-danger rounded-3 bg-danger col-md-8 offset-md-2">Error, nombre requerido</p>
         @enderror 
      
        <div class="col-md-8 offset-md-2" > 
        
          <label for="Email" class="form-label">Correo Electronico </label>
          <input type="email" class="form-control" placeholder="ingrese su correo electronico" id="correo" name="correo">
          @error('correo')
          <p class="border border-danger rounded-3 bg-danger col-md-8 offset-md-2">Error, email requerido</p>
         @enderror 

         <div class="col-md-8 offset-md-2">
          <label for="contraseña" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña de 8 digitos">
          @error('contraseña')
          <p class="border border-danger rounded-3 bg-danger col-md-8 offset-md-2">Error, contraseña requerida</p>
         @enderror 
      
          
      
        </div>
        <label for="imagen"> Imagen:</label>
                <input  class="for-control" type="file"  name="img_perfil" id="imagen">

                <label for=""> Tipo de Usuario:</label>
                <select class="form-control form-select" aria-label="Default select example" name="type_id">
                <option selected>Seleciona el tipo de usuario</option>
                    @foreach($typeusers as $typeuser)
                    <option value={{$typeuser->id}}>{{$typeuser->name}}</option>
                    @endforeach
                </select>
        
      
        </div>
      
    
        
        <button class="btn btn-dark col-md-6 my-3 offset-md-3" type="submit">Registrarse</button>
     
        
    </div>
    </form> 
@endsection