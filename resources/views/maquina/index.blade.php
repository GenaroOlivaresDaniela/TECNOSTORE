@include('Layouts.header')

@include('Layouts.menu')


@section('header')

@endsection


<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">MAQUINAS</h1>
    
</div>

@if(Session::has('message'))
    <h6 class="alert alert-success">{{
        
        Session::get('message')
                                }} </h6>
                                @endif 



<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-12 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
          <!--   <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Lista De  Carreras</h6>
            </div> -->
             <!-- Logout Modal-->
    
            <div class="card-body">
                <!-- DataTales Example -->
               
                        <div class="card-header py-3">
                            <h3 class="m-1 font-weight-bold text-primary">MAQUINAS</h3>
                            <div class="d-flex justify-content-end">
                                    <a class="btn btn-primary" href="maquina/create"><i class="bi bi-file-plus"></i>+</a>
                            </div>
                        </div>
                        <div class="card-body">
                           
                            <div class="table table-responsive ">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre de la maquina</th>
                                            <th>Empresa</th>
                                            <th>Tipo de maquina</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        
                                    <th>Id</th>
                                            <th>Nombre de la maquina</th>
                                            <th>Empresa</th>
                                            <th>Tipo de maquina</th>
                                            <th></th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($maquinas as $maquina)
                                        <tr>
                                            <td>{{$maquina->id}}</td>
                                            <td>{{$maquina->nombrem}}</td>
                                            <td>{{$maquina->nombre_empresa}}</td>
                                            <td>{{$maquina->namem}}</td>

                                            
                                            <td>
                                            
                                            <div class="row col-12">
                                                    <div class="col-4">                                                
                                                        <a class="btn btn-success m-3" href="maquina/{{$maquina->id}}"  ><i class="fa-regular fa-eye"></i></a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a class="btn btn-warning m-3" href="maquina/{{$maquina->id}}/edit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                                    </div>
                                                    <!-- <button type="submit" class="btn btn-danger m-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash"></i></button> -->
                                                    <button href="" type="submit" class="btn btn-danger m-3" class="badge-md badge-pill badge-danger" data-toggle="modal" data-target="#exampleModalCenter{{$maquina->id}}" ><i class="fa-solid fa-trash"></i></button>
                                                        <div class="modal fade" id="exampleModalCenter{{$maquina->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document" >
                                                        <div class="modal-content">
                                                        <div class="modal-header d-flex justify-content-center">
                                                        </div>
                                                        <div class="modal-body">
                                                            <h5 class="text-center">¿Esta seguro que desea eliminar la maquina {{$maquina->nombrem}}?</h5>
                                                                </div>
                                                                <div class="modal-footer d-flex justify-content-center">  
                                                                <button type="submit" class="btn btn-secondary btn-default" data-dismiss="modal">CANCELAR</button>

                                                    <form action="maquina/{{$maquina->id}}"  method="POST" class="submit-prevent-form">
                                                    {{csrf_field()}}
                                                        @method("delete")
                                                        <button type="submit" class="btn btn-primary m-3 submit-prevent-button">ACEPTAR</button>

                                                    



                                                     </form>
                                                     </div>
                                                     </div>
                                                     </div>

                                                     </div><!--fin del modal  -->
                                                                                                       
                                                           </div>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                   
          
            </div>
        </div>

       

    </div>

  
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@include('Layouts.footer')
