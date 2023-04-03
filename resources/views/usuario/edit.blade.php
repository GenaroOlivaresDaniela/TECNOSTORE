@include('Layouts.header')
@include('Layouts.menu')


@section('header')

@endsection

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    
   
</div>


<!-- Content Row -->



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">EDITAR</h6>
            </div>
            <div class="card-body">
                
            <form action="{{url('usuario/'.$usuario->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method("PATCH")
                <input class="form-control" type="text" value="{{$usuario->id}}" aria-label="Disabled input example" disabled>
            <label for=""> Nombre Completo del Usuario:</label>
                <input class="form-control" type="text" value="{{$usuario->nombre}}" name="nombre">
                <label for=""> Correo:</label>
                <input class="form-control" type="safeEmail" value="{{$usuario->correo}}" name="correo">
                <label for=""> Contraseña:</label>
                <input class="form-control" type="password" value="{{$usuario->contraseña}}" name="contraseña">
                <label for=""> Imagen:</label>
                <input  class="nav-link active" type="file" value="{{$usuario->img_perfil}}" name="img_perfil">
                <div class="row">
                <label for=""> Tipo de Usuario:</label>
                <select class="form-control form-select" aria-label="Default select example" name="type_id">
                    <option>Seleciona el tipo</option>
                    @foreach($typeusers as $typeuser)
                    <option value={{$typeuser->id}}>{{$typeuser->name}}</option>
                    @endforeach
                </select>
                 <div class="row">
                <a class="btn btn-danger m-3"  href="/usuario" >CANCELAR</a>
                    <button type="submit" class="btn btn-primary m-3">GUARDAR CAMBIOS</button>

                </div>
            </form>
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

@include('Layouts.footer')