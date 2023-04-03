@extends('Layouts.app')



@section('content')


<h1 class="display-1 text-center">TECNOSTORE</h1>


<div class="container col-md-5 bg-secondary border border-4 rounded-3">
  
<form class="row g-1"  method="POST" action="">
    @csrf

    <div class="col-md-8 offset-md-2" > 
      <label for="Email" class="form-label">Correo </label>
      <input type="email" class="form-control" placeholder="ingrese su correo electronico" id="correo" name="correo">
    </div>
    <div class="col-md-8 offset-md-2">
      <label for="password" class="form-label">Contraseña</label>
      <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña de 8 digitos">
    </div>
 @error('message')
    <p class="border border-danger rounded-3 bg-danger col-md-8 offset-md-2">Error, correo y/o contraseña incorrectos</p>
   @enderror 

    <button class="btn btn-dark col-md-6 my-3 offset-md-3" type="submit" >Entrar</button>
 
    
</div>
</form> 
@endsection