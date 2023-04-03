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
                <h6 class="m-0 font-weight-bold text-primary">ALTA</h6>
            </div>
            <div class="card-body">
            @if($errors->any())

            @endif

            <form action="{{ url('usuario') }}"  enctype="multipart/form-data" method="POST" class="submit-prevent-form">
            {{csrf_field()}}
                <label for=""> Nombre Completo del Usuario:</label>
                <input class="form-control" type="text"  name="nombre" value="{{old('nombre')}}" class="@error('nombre') is-invalid @enderror">
                @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <label for=""> Correo:</label>
                <input class="form-control" type="safeEmail"  name="correo" value="{{old('correo')}}" class="@error('correo') is-invalid @enderror">
                @error('correo')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <label for=""> Contraseña:</label>
                <input class="form-control" type="password"  name="contraseña" value="{{old('contraseña')}}" class="@error('contraseña') is-invalid @enderror">
                @error('contraseña')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="col-xl-3 col-md-6 mb-4" >
                <label for=""> Imagen:</label>
                <input  class="nav-link active" type="file"  name="img_perfil" value="{{old('img_perfil')}}" class="@error('img_perfil') is-invalid @enderror">
                @error('img_perfil')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                <div class="row">

                <label for=""> Tipo de Usuario:</label>
                <select class="form-control form-select" aria-label="Default select example" name="type_id">
                <option selected>Seleciona el tipo de usuario</option>
                    @foreach($typeusers as $typeuser)
                    <option value={{$typeuser->id}}>{{$typeuser->name}}</option>
                    @endforeach
                </select>
                <div class="row">
                <a class="btn btn-danger m-3"  href="/usuario" >Cancelar</a>
                    <button type="submit" class="btn btn-primary m-3 submit-prevent-button">Guadar</button>

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