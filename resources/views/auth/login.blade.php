@extends('layouts.app')

@section('content')
<div class="rog g-3">
<h1 style="color: blue;">¡ BIENVENIDO A TECNOSTORE !</h1>
<p>
    <p></p>
</p>

</div>
    <form action="{{ route('inicio') }}" enctype="multipart/form-data" method="POST" class="col-6 offset-md-3" style="background-color: #b9f1d6;">
   
    {{csrf_field()}}
   
    <div class="col-6 offset-md-3">
                <label for=""> Correo:</label>
                <input class="form-control" type="safeEmail"  name="correo" value="{{old('correo')}}"  class="@error('correo') is-invalid @enderror">
                @error('correo')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-6 offset-md-3">
                <label for=""> Contraseña:</label>
                <input class="form-control" type="password" name="contraseña" value="{{old('contraseña')}}"   class="@error('contraseña') is-invalid @enderror">
                @error('contraseña')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                   
                    <div class="col-6 offset-md-3">

                <a class="btn btn-danger m-3"  href="/login" >Cancelar</a>
                    <button type="submit" class="btn btn-primary m-3 submit-prevent-button">Ingresar</button>

                </div>

                
                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
										No tiene una cuenta! <a href="/registro">Registrate aquí</a>
									</div>



    </form>
