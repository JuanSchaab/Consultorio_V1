<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script  src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">

    <title>Document</title>
</head>
<body>
    <nav id="menu" class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top ">
        <div class="container-fluid ">
           <div class="row">
               <img class="col pe-1"src="{{ asset('images/logo.png') }}" width="65" height="65" > </img>
                
               <a class="navbar-brand col ps-0 " href="#"> <p class="" style="font-size: 55% ">C.E.V.R.A <br> Centro Especializado <br> en Vías Respiratorias y Alergias.</p>  </a>  
               
                </div>
          <button class="navbar-toggler text-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse row " id="navbarNavAltMarkup">
                <div class="navbar-nav text-center col-lg-11 justify-content-center  "id="navbarNavAltMarkup">
                    <a class="nav-link" href="#quienessomos">Quienes somos</a>
                    <a class="nav-link" href="#tratamientos">Tratamientos</a>
                    <a class="nav-link" href="#ubicacion">Ubicación</a>
                    <a class="nav-link" href="#contacto">Contacto</a>
                    <a class="nav-link" href="#consulta">Consulta</a>
                </div>

                <div class=" collapse navbar-collapse text-center col-1 justify-content-center"  id="navbarNavAltMarkup">
                    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
            
                    <div id="id01" class="modal">
                        
                            <form class="modal-content animate" action="/action_page.php" method="post">
                                <div class="imgcontainer">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                                    <img src="img_avatar2.png" alt="Avatar" class="avatar">
                                </div>
                        
                                <div class="container">
                                    <label for="uname"><b>Username</b></label>
                                    <input type="text" placeholder="Enter Username" name="uname" required>
                            
                                    <label for="psw"><b>Password</b></label>
                                    <input type="password" placeholder="Enter Password" name="psw" required>
                                    
                                    <button type="submit">Login</button>
                                    <label>
                                    <input type="checkbox" checked="checked" name="remember"> Remember me
                                    </label>
                                </div>
                        
                                <div class="container" style="background-color:#f1f1f1">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                    <span class="psw">Forgot <a href="#">password?</a></span>
                                </div>
                            </form>
                    </div>
                </div>
          </div>
        </div>
      </nav>
    
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/portada.jpg') }}" class="d-block w-100" alt="...">
          </div>
         </div>
      </div>

      <div class="fondo1"> </div>
      
      <br><br><br>

      
      <div class=" qs "id="quienessomos" > <br><br>
        <p class="text-center fs-1">Quienes somos</p><br>
           <p class="text-center fs-1 text-break"><h5 class="text-center fs-3 text-break"> ¡Hola!, somos los doctores Calí y creamos CEVRA - <br> Centro especializado en vías respiratorias y alergias para ofrecer soluciones en problemas respiratorios.</h5> </p>
         

            <div class="contenedor d-flex justify-content-evenly row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 ">
              
              <div class="card-container col p-2">
                    <div class="header headerr">
                      <a href="#">
                        <img src="{{ asset('images/nico-modified.png') }}" alt="">
                      </a>
                      <h2>Dr. Nicolas Calí</h2>
                      <h4>Alergista e inmunologo</h4>
                    </div>
                    <div class="descripcion">
                      <p class="card-text">Médico egresado en la Universidad Nacional de Córdoba en el año 2006. Especialista en Alergia e Inmunología en Niños y Adultos desde el año 2011, 
                        habiendo realizado concurrencia en el Servicio y Catedra N° 1 de Alergia e Inmunología Hospital Nacional de Clínicas de Córdoba. <br> Pasante del Servicio Dermatología Hospital Pediátrico del Niño Jesús de Córdoba, 
                        Servicio de Inmunología Hospital Pediatrico Prof. Dr. Juan P. Garrahan de Buenos Aires y Servicio de Neumónologia Pediátrica en el Hospital Santísima Trinidad de Córdoba.</p>
                      
                    </div>
                 </div>
            
            

                    <div class="card-container col p-2">
                          <div class="header headerr">
                            <a href="#">
                              <img src="{{ asset('images/sebastian-modified.png') }}" alt="">
                            </a>
                            <h2>Dr. Sebastian Calí</h2>
                            <h4>Neumonologo</h4>
                          </div>
                              <div class="descripcion">
                                <p>
                                  Médico egresado de la Universidad Nacional de Córdoba en el año 2002. <br>
                                    Especialista en Neumonología desde el año 2006, habiendo realizado Residencia en Neumonología del Hospital Tránsito Cáceres de Allende, Córdoba y la Carrera de postgrado en Neumonología, de la Universidad Nacional de Córdoba. 
                                    <br> Posgrado Universitario en Medicina del Sueño, Universidad Austral, Buenos Aires.
                                </p>
                              </div>
                        </div>
              </div>
              <br><br>
        </div>
      
      <br>
      <div id="tratamientos"> <br><br><br><br><h1>Tratamientos</h1></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <br>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <br>
      <br><br><br><br><br>
      <div id="ubicacion"> <br><br><br><br><h1>Ubicación</h1></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <br>
      <br><br><br><br><br>
      <div id="contacto"> <br><br><br><br><h1>Contacto</h1></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <br>
      <br><br><br><br><br>
      <div id="consulta"> <br><br><br><br><h1>Consulta</h1></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, ipsa consectetur quia enim voluptatum perferendis aliquid alias error aliquam laboriosam quod laudantium eligendi eum dignissimos officiis doloribus. Dignissimos, vitae totam.</p>

      <script src="{{ asset('js/home.js') }}" ></script>
</body>
</html>