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

            <form action="{{ url('productoproduccion') }}"  enctype="multipart/form-data" method="POST" class="submit-prevent-form">
            {{csrf_field()}}
                <label for=""> Fecha:</label>
                <input class="form-control" type="date"  name="fecha" value="{{old('fecha')}}" class="@error('fecha') is-invalid @enderror">
                @error('fecha')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="col-xl-3 col-md-6 mb-4" >
                <label for=""> Hora:</label>
                <input  class="nav-link active" type="time"  name="hora" value="{{old('hora')}}" class="@error('hora') is-invalid @enderror">
                @error('hora')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4" >
                <label for=""> Cantidad:</label>
                <input  class="nav-link active" type="number"  name="cantidad" value="{{old('cantidad')}}" class="@error('cantidad') is-invalid @enderror">
                @error('cantidad')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>

                <label for=""> Producto:</label>
                <select class="form-control form-select" aria-label="Default select example" name="producto_id">
                <option selected>Seleciona el producto</option>
                    @foreach($productos as $producto)
                    <option value={{$producto->id}}>{{$producto->nombrep}}</option>
                    @endforeach
                </select>
                <label for=""> Produccion:</label>
                <select class="form-control form-select" aria-label="Default select example" name="produccion_id">
                <option selected>Seleciona la produccion</option>
                    @foreach($producciones as $produccion)
                    <option value={{$produccion->id}}>{{$produccion->nombrepr}}</option>
                    @endforeach
                </select>
                
                <div class="row">
                <a class="btn btn-danger m-3"  href="/productoproduccion" >Cancelar</a>
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