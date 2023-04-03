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
                
            <form action="{{url('productoproduccion/'.$productoproduccion->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method("PATCH")
                <input class="form-control" type="text" value="{{$productoproduccion->id}}" aria-label="Disabled input example" disabled>
            <label for=""> Fecha:</label>
                <input class="form-control" type="date" value="{{$productoproduccion->fecha}}" name="fecha">
                
                <label for=""> Hora:</label>
                <input  class="nav-link active" type="time" value="{{$productoproduccion->hora}}" name="hora">
                
                <label for=""> cantidad:</label>
                <input  class="nav-link active" type="number" value="{{$productoproduccion->cantidad}}" name="cantidad">
                
                
                <label for="">Producto:</label>
                <select class="form-control form-select" aria-label="Default select example" name="producto_id">
                    <option>Seleciona el producto</option>
                    @foreach($productos as $producto)
                    <option value={{$producto->id}}>{{$producto->nombrep}}</option>
                    @endforeach
                </select>
                <label for="">Produccion:</label>
                <select class="form-control form-select" aria-label="Default select example" name="produccion_id">
                    <option>Seleciona la produccion</option>
                    @foreach($producciones as $produccion)
                    <option value={{$produccion->id}}>{{$produccion->nombrepr}}</option>
                    @endforeach
                </select>
                 <div class="row">
                <a class="btn btn-danger m-3"  href="/productoproduccion" >CANCELAR</a>
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