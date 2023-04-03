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
                
            <form action="{{url('producto/'.$producto->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method("PATCH")
                <input class="form-control" type="text" value="{{$producto->id}}" aria-label="Disabled input example" disabled>
            <label for=""> Producto:</label>
                <input class="form-control" type="text" value="{{$producto->nombrep}}" name="nombrep">
                <div class="row">
                <label for=""> Imagen:</label>
                <input  class="nav-link active" type="file" value="{{$producto->imagen}}" name="imgagenl">
                <div class="row">

                
                <label for="">Empresa:</label>
                <select class="form-control form-select" aria-label="Default select example" name="empresa_id">
                    <option>Seleciona la empresa</option>
                    @foreach($empresas as $empresa)
                    <option value={{$empresa->id}}>{{$empresa->nombre_empresa}}</option>
                    @endforeach
                </select>
                <label for="">Categoria:</label>
                <select class="form-control form-select" aria-label="Default select example" name="categ_id">
                    <option>Seleciona la categoria</option>
                    @foreach($categorias as $categoria)
                    <option value={{$categoria->id}}>{{$categoria->nombrec}}</option>
                    @endforeach
                </select>
                 <div class="row">
                <a class="btn btn-danger m-3"  href="/producto" >CANCELAR</a>
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