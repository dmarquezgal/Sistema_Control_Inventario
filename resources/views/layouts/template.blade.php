<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ventas</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow w-100">
    <a href="{{route('pedidos_v.index')}}" class="navbar-brand bg-dark col-md-3 col-lg-2 mr-3 px-3">Panel Ventas</a>
    <button class=" navbar-toggler position-absolute d-md-none collapsed bg-dark" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link btn btn-success m-3 text-white"  href="{{route('pedidos_v.create')}}">
                        Nueva Venta
                        </a>
                        
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link "  href="{{route('pedidos_v.index')}}">
                        <strong>Ventas</strong> 
                        </a>
                    </li>
                 
                    <li class="nav-item">
                        <a class="nav-link "  href="{{route('productos_v.index')}}">
                        <strong> Productos</strong>
                        </a>
                    </li>
                
                </ul>

                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary m-3 text-white" href="{{ route('login.destroy') }}">
                          Cerrar sesión
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

     
    </div>
</div>
@yield('nav')
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>

</html>