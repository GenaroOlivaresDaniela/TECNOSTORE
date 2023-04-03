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
                
            <form action="{{url('produccion') }}" method="POST" class="submit-prevent-form">
            {{csrf_field()}}
            <label for=""> Nombre de la Produccion:</label>
                <input class="form-control" type="text"  name="nombrepr" value="{{old('nombrepr')}}" class="@error('nombrepr') is-invalid @enderror">
                @error('nombrepr')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            <label for=""> Día:</label>
                <input class="form-control" type="text"  name="dia" value="{{old('dia')}}" class="@error('dia') is-invalid @enderror">
                @error('dia')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <label for=""> Fecha de inicio:</label>
                <input class="form-control" type="date"  name="fecha_inicio" value="{{old('fecha_inicio')}}" class="@error('fecha_incio') is-invalid @enderror">
                @error('fecha_inicio')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <label for=""> Fecha final:</label>
                <input class="form-control" type="date"  name="fecha_final" value="{{old('fecha_final')}}" class="@error('fecha_final') is-invalid @enderror">
                @error('fecha_final')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <label for=""> Total de Produccion:</label>
                <input class="form-control" type="number"  name="total_produccion" value="{{old('total_produccio')}}" class="@error('total_produccion') is-invalid @enderror">
                @error('total_produccio')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                
                 <label for=""> Maquina:</label>
                 <select class="form-control form-select" aria-label="Default select example" name="maquina_id">
                <option selected>Seleciona la maquina</option>
                    @foreach($maquinas as $maquina)
                    <option value={{$maquina->id}}>{{$maquina->nombrem}}</option>
                    @endforeach
                </select>               
                <div class="row">
                <a class="btn btn-danger m-3"  href="/produccion" >Cancelar</a>
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