<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/nav.css')}}" rel="stylesheet" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top">
      <div class="container-fluid">
        <span class=""><img src="{{ asset('images/logo.png') }}" alt="" width="65px" height="65px"></span>
        <a class="navbar-brand" href="#">C.E.V.R.A. <br> <p style="font-size: 55%">Centro Especializado <br> en Vías Respiratorias y Alergias.</p></a>
        <p></p>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item" >
            <button type="button" class="boton botondesactivado" id="1" onclick="activado(1)"  > <a class="nav-link "  aria-current="page" href="#principal">Principal</a>
          </li>
          <li class="nav-item">
            <button type="button" class="boton botondesactivado" id="2" onclick="activado(2)" ><a class="nav-link" href="#quienessomos">Quienes somos</a></button>
          </li>
          <li class="nav-item">
            <button type="button" class="boton botondesactivado" id="3" onclick="activado(3)" ><a class="nav-link" href="#ubicacion">Ubicación</a></button>
          </li>
          <li class="nav-item">
            <button type="button" class=" boton botondesactivado" id="4" onclick="activado(4)" >  <a class="nav-link " href="#consulta">Consulta</a></button>
          </li>
          <li class="nav-item">
            <button type="button" class="boton botondesactivado" id="5" onclick="activado(5)" ><a class="nav-link" href="#contacto">Contacto</a></button>
          </li>
        </ul>
      </div>
      </div>
    </nav>
     @yield('nav')


    
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>
</body>
</html>