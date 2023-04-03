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
                
            <form action="{{url('empresa/'.$empresa->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method("PATCH")
                <input class="form-control" type="text" value="{{$empresa->id}}" aria-label="Disabled input example" disabled>
            <label for=""> Nombre de la Empresa:</label>
                <input class="form-control" type="text" value="{{$empresa->nombre}}" name="nombre_empresa">
                <div class="row">
                <label for="">Usuario:</label>
                <select class="form-control form-select" aria-label="Default select example" name="usuario_id">
                    <option>Seleciona el usuario</option>
                    @foreach($usuarios as $usuario)
                    <option value={{$usuario->id}}>{{$usuario->name}}</option>
                    @endforeach
                </select>
                 <div class="row">
                <a class="btn btn-danger m-3"  href="/empresa" >CANCELAR</a>
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