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
    <link rel="stylesheet" href="{{ asset('css/consulta.css')}}">

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
      <div id="ubicacion"> <br><br><br><br><h1>Ubicación</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3393.4675570328295!2d-60.519943667712354!3d-31.730436486712676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b4530b39d3b3d9%3A0xe9d80be420302e23!2sCEVRA%20Centro%20Especializado%20en%20V%C3%ADas%20Respiratorias%20y%20Alergias.!5e0!3m2!1ses-419!2sar!4v1654126220312!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      
      <br>
      <br><br><br><br><br><br><br><br><br><br><br><br>

      <div  id="contacto">
        <h1>Contacto</h1>
        <div class="card border-dark " style="max-width:18rem; text-align:center">
          <div class="card-header">Contacto</div>
          <div class="card-body text-dark">
            <h5 class="card-title">Ciudad de Paraná</h5>
            <p>
              Urquiza 323<br>
              <i class="fa fa-phone fa-1x"></i>0345-4217788<br>
              <a href="https://wa.me/5493454958823" ><i class="fa fa-whatsapp fa-1x"></i>WhatsApp 93454958823</a><br>
              <a href="mailto:alergoinmuno@hotmail.com.ar" ><i class="fa fa-envelope fa-1x"></i>alergoinmuno@hotmail.com.ar</a><br>
              <a href="mailto:info@cevra.com.ar"><i class="fa fa-envelope fa-1x"></i>info@cevra.com.ar</a>
            </p>
            <h6>
              Turnos programados
            </h6>
          </div>
        </div>
      </div>
       

  
      <br>
      <br><br><br><br><br>
    

            <!-- Formulario de Contacto -->
      <form class="my-form">
        <div class="container" id="consulta">
          <h1>Consulta</h1>
          <ul>
            <li>
              <select>
                <option selected disabled>-- Please choose an option --</option>
                <option>Opción 1</option>
                <option>Opción 2</option>
                <option>Opción 3</option>      
              </select>
            </li>
            <li>
              <div class="grid grid-2">
                <input type="text" placeholder="Nombre" required>  
                <input type="text" placeholder="Apellido" required>
              </div>
            </li>
            <li>
              <div class="grid grid-2">
                <input type="email" placeholder="Email" required>  
                <input type="tel" placeholder="Teléfono">
              </div>
            </li>    
            <li>
              <textarea placeholder="Mmensaje"></textarea>
            </li>   
            <li>
              <input type="checkbox" id="terms">
              <label for="terms">Acepto  <a href="">terminos y condiciones</a></label>
            </li>  
            <li>
              <div class="grid grid-3">
                <div class="required-msg">Campos Requeridos</div>
                <button class="btn-grid" type="submit" disabled>
                  <span class="back">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
                  </span>
                  <span class="front">Enviar</span>
                </button>
                <button class="btn-grid" type="reset" disabled>
                  <span class="back">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/eraser-icon.svg" alt="">
                  </span>
                  <span class="front">Restablecer</span>
                </button> 
              </div>
            </li>    
          </ul>
        </div>
      </form>


      <script src="{{ asset('js/home.js') }}" ></script>
      <script src="{{ asset('js/consulta.js') }}" ></script>
</body>
</html>