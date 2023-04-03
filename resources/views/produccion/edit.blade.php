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
                
            <form action="{{url('produccion/'.$produccion->id)}}" method="POST" >
            @csrf
                @method("PATCH")
                <input class="form-control" type="text" value="{{$produccion->id}}" aria-label="Disabled input example" disabled>
                <label for=""> Nombre de la Produccion:</label>
                <input class="form-control" type="text" value='{{$produccion->nombrepr}}' name="nombrepr" >
                <label for=""> Día:</label>
                <input class="form-control" type="text" value='{{$produccion->dia}}'  name="dia">
                <label for=""> Fecha de inicio:</label>
                <input class="form-control" type="date"  value='{{$produccion->fecha_inicio}}' name="fecha_inicio">
                <label for=""> Fecha final:</label>
                <input class="form-control" type="date"  value='{{$produccion->fecha_final}}' name="fecha_final">
                <label for=""> Total de Produccion:</label>
                <input class="form-control" type="number"  value='{{$produccion->total_produccion}}' name="total_produccion" >
                <label for=""> Maquina:</label>
                 <select class="form-control form-select" aria-label="Default select example" name="maquina_id">
                <option selected>Seleciona la maquina</option>
                    @foreach($maquinas as $maquina)
                    <option value={{$maquina->id}}>{{$maquina->nombrem}}</option>
                    @endforeach
                </select>



               
                <div class="row">
                <a class="btn btn-danger m-3"  href="/produccion" >CANCELAR</a>
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