@yield('menu')

<!-- Page Wrapper -->
<div id="wrapper">

 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">TECNOSTORE<sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="/">
    <i class="fa-solid fa-house"></i>        
    <span>INICIO</span></a>
</li>

<!-- Nav Item - Dashboard -->
<li class="nav-item active3">
    <a class="nav-link" href="/productoproduccion">
    <i class="fa-brands fa-product-hunt"></i>
    <span>PRODUCTOS Y PRODUCCION</span></a>
</li>

<!-- Nav Item - Dashboard -->
<li class="nav-item active1">
    <a class="nav-link" href="/typeuser">
    <i class="fa-solid fa-users"></i> 
    <span>TIPO DE USUARIOS</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item active2">
    <a class="nav-link" href="/empresa">
    <i class="fa-solid fa-landmark"></i>       
    <span>EMPRESAS</span></a>
</li>
<!-- Nav Item - Dashboard -->
<li class="nav-item active3">
    <a class="nav-link" href="/subcategoria">
    <i class="fa-solid fa-bars"></i>
    <span>SUBCATEGORIAS</span></a>
</li>

<!-- Nav Item - Dashboard -->
<li class="nav-item active3">
    <a class="nav-link" href="/categoria">
    <i class="fa-solid fa-bars"></i>
    <span>CATEGORIA</span></a>
</li>

<!-- Nav Item - Dashboard -->
<li class="nav-item active3">
    <a class="nav-link" href="/typemaquina">
    <i class="fa-solid fa-bars"></i>
    <span>TIPO DE MAQUINAS</span></a>
</li>

<!-- Nav Item - Dashboard -->
<li class="nav-item active3">
    <a class="nav-link" href="/usuario">
    <i class="fa-sharp fa-solid fa-users"></i>
    <span>USUARIO</span></a>
</li>

<!-- Nav Item - Dashboard -->
<li class="nav-item active3">
    <a class="nav-link" href="/maquina">
    <i class="fa-solid fa-bars"></i>
    <span>MAQUINAS</span></a>
</li>

<!-- Nav Item - Dashboard -->
<li class="nav-item active3">
    <a class="nav-link" href="/producto">
    <i class="fa-brands fa-product-hunt"></i>
    <span>PRODUCTOS</span></a>
</li>

<!-- Nav Item - Dashboard -->
<li class="nav-item active3">
    <a class="nav-link" href="/produccion">
    <i class="fa-brands fa-product-hunt"></i>
    <span>PRODUCCIONES</span></a>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
</ul>
<!-- End of Sidebar -->


 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        <form
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                    aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
               


            </div>
            
        </form>

        <!-- Cerrar sesion -->
        <div class="container-fluid">
        <h1 class="display-5 fw-bolder">           </h1>
                <a class="btn btn-danger m-2"  href="/login" >Cerrar Sesion</a>

</div>





        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            

        
               

        </ul>

    </nav>
    <!-- End of Topbar -->
    