@extends('layouts.app')

@section('content')
<div class="rog g-3">
<h1 style="color: blue;">¡  REGISTRATE  !</h1>
<p>
    <p></p>
</p>

</div>

<form action="{{ url('registro') }}"  enctype="multipart/form-data" method="POST" class="col-6 offset-md-3" style="background-color: #b9f1d6;">
            {{csrf_field()}}
            <div class="col-6 offset-md-3">
                <label for=""> Nombre Completo del Usuario:</label>
                <input class="form-control" type="text" name="nombre" value="{{old('nombre')}}" class="@error('nombre') is-invalid @enderror">
                @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
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
                <label for=""> Imagen:</label>
                <input  class="nav-link active" type="file"  name="img_perfil" value="{{old('img_perfil')}}" class="@error('img_perfil') is-invalid @enderror">
                @error('img_perfil')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    </div>
                    <div class="col-6 offset-md-3">

                <a class="btn btn-danger m-3"  href="/login" >Cancelar</a>
                    <button type="submit" class="btn btn-primary m-3 submit-prevent-button">Guadar</button>

                </div>
            </form>
            @endsection