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

            <form action="{{ url('categoria') }}"  enctype="multipart/form-data" method="POST" class="submit-prevent-form">
            {{csrf_field()}}
                <label for=""> Categoria:</label>
                <input class="form-control" type="text"  name="nombrec" value="{{old('nombrec')}}" class="@error('nombrec') is-invalid @enderror">
                @error('nombrec')
                <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label for=""> Subcategoria:</label>
                <select class="form-control form-select" aria-label="Default select example" name="subcateg_id">
                <option selected>Seleciona la subcategoria</option>
                    @foreach($subcategorias as $subcategoria)
                    <option value={{$subcategoria->id}}>{{$subcategoria->nombre_s}}</option>
                    @endforeach
                </select>
                <label for=""> Empresa:</label>
                <select class="form-control form-select" aria-label="Default select example" name="empresa_id">
                <option selected>Seleciona la empresa</option>
                    @foreach($empresas as $empresa)
                    <option value={{$empresa->id}}>{{$empresa->nombre_empresa}}</option>
                    @endforeach
                </select>
                
                <div class="row">
                <a class="btn btn-danger m-3"  href="/categoria" >Cancelar</a>
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