
@extends('plantilla')

@section('nav')
        <!-- login -->
        <html>
          
            <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="{{ asset('css/turnos.css')}}" rel="stylesheet" > 
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            </head>
            <body>
            
            <h2>Modal Login Form</h2>
            
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
        
            <div id="id01" class="modal">
              
              <form class="modal-content animate" action="/action_page.php" method="post">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                 
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
            
            <script>
            // Get the modal
            var modal = document.getElementById('id01');
            
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
            
            
            
          

		
            <!-- modal turno -->
            
                       
         
              
                
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h2>Reserva de Turnos</h2>
                
                <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" >Turnos</button>
            
                <div id="id02" class="modal">
                  
                  <form class="modal-content animate" action="/action_page.php" method="post">
                    <div class="imgcontainer">
                      <span onclick="document.getElementById('id02').style.display='none'" class="close" style="cursor: pointer" title="Close Modal">&times;</span>
                      
                    </div>
                
                   
                        <div class="root">
                            <div action="" id="formulario" class="form-register">
                                <div class="form-register__header">
                                    <ul class="progressbar">
                                        <li class="progressbar__option active">paso 1</li>
                                        <li class="progressbar__option">paso 2</li>
                                        <li class="progressbar__option">paso 3</li>
                                        <li class="progressbar__option">paso 4</li>
                                        <li class="progressbar__option">paso 5</li>
                                    </ul>
                                    <h1 class="form-register__title">Reserva de Turnos</h1>
                                </div>
                                <div class="form-register__body">



                                  <!-- Primer Paso -->
                                  
                                    <div class="step active" id="step-1" >
                                        <div class="step__header">
                                            <h2 class="step__title">Seleccione el Profesional<small>(Paso 1)</small></h2>
                                        </div>
                                        <div class="step__body">
                                            <select class="form-control" name="medico" id='especialidades' onchange="cargarMedicos(this)">
                                                <option>seleccione la especialidad</option>  
                                                @foreach ($arrayEspecialidades as $especialidad)                                               
                                                    <option value="{{$especialidad->especialidad_medico}}">{{$especialidad->especialidad_medico}} </option>
                                                @endforeach       
                                                
                                            </select>
                                            <select class="form-control" name="medico" id='medicos'>
                                                         
                                                
                                            </select>

                                            
                                        </div>
                                        <div class="step__footer">
                                            <button type="button" class="step__button step__button--next" data-to_step="2" data-step="1">Siguiente</button>
                                        </div>                                       
                                    </div>



                                    <!-- Segundo Paso -->
                                    <div class="step" id="step-2">
                                        <div class="step__header">
                                            <h2 class="step__title">Elija un día<small>(Paso 2)</small></h2>
                                        </div>
                                        <div class="step__body">
                                            <input type="text" placeholder="Nombre" class="step__input">
                                            <input type="text" placeholder="Apellido" class="step__input">
                                            <input type="tel" placeholder="Teléfono" class="step__input">
                                            <textarea rows="4" cols="80" placeholder="Dirección" class="step__input"></textarea>
                                        </div>
                                        <div class="step__footer">
                                            <button type="button" class="step__button step__button--back" data-to_step="1" data-step="2">Regresar</button>
                                            <button type="button" class="step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button>
                                        </div>
                                    </div>



                                    <!-- Tercer Paso -->
                                    <div class="step" id="step-3">
                                        <div class="step__header">
                                            <h2 class="step__title">Reserve el turno<small>(Paso 3)</small></h2>
                                        </div>
                                        <div class="step__body">
                                            <input type="text" placeholder="Dato x" class="step__input">
                                            <input type="text" placeholder="Dato x" class="step__input">
                                            <input type="text" placeholder="Dato x" class="step__input">
                                        </div>
                                        <div class="step__footer">
                                            <button type="button" class="step__button step__button--back" data-to_step="2" data-step="3">Regresar</button>
                                            <button type="button" class="step__button step__button--next" data-to_step="4" data-step="3">Siguiente</button>
                                            
                                        </div>
                                    </div>


                                    <!-- Cuarto Paso -->
                                    <div class="step" id="step-4">
                                      <div class="step__header">
                                          <h2 class="step__title">Confirmar Reserva<small>(Paso 4)</small></h2>
                                      </div>
                                      <div class="step__body">
                                          <input type="text" placeholder="Dato x" class="step__input">
                                          <input type="text" placeholder="Dato x" class="step__input">
                                          <input type="text" placeholder="Dato x" class="step__input">
                                      </div>
                                      <div class="step__footer">
                                          <button type="button" class="step__button step__button--back" data-to_step="3" data-step="4">Regresar</button>
                                          <button type="button" class="step__button step__button--next" data-to_step="5" data-step="4">Siguiente</button>
                                          
                                      </div>
                                  </div>



                                  <!-- Quinto Paso -->
                                    <div class="step" id="step-5">
                                      <div class="step__header">
                                          <h2 class="step__title">Listo<small>(Paso 5)</small></h2>
                                      </div>
                                      <div class="step__body">
                                          <input type="text" placeholder="Dato x" class="step__input">
                                          <input type="text" placeholder="Dato x" class="step__input">
                                          <input type="text" placeholder="Dato x" class="step__input">
                                      </div>
                                      <div class="step__footer">
                                          <button type="button" class="step__button step__button--back" data-to_step="4" data-step="5">Regresar</button>
                                          <button type="submit" class="step__button">Registrarse</button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                        
                
                
                    <div class="container" style="background-color:#f1f1f1">
                      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                     
                    </div>
                  </form>
                </div>
                
                <script>
                    //carga de especialidades   
                function cargarMedicos(valor){
                    var especialidad = valor.value;   
                    
                    if (!especialidad){
                        $('#medicos').html('<option value=""> Seleccione un médico </option>');
                    }

                    //carga de medicos
                    $.get('/api/medico/'+especialidad, function(lista){
                        
                        var medicos = '<option value=""> Seleccione un médico </option>';
                        for (var i=0; i<lista.length; i++){
                        medicos += '<option value="'+lista[i].matricula_medico+'">'+lista[i].nombre_persona+' '+lista[i].apellido_persona+'     Matricula:'+lista[i].matricula_medico+'</option>';                            
                        }
                        $('#medicos').html(medicos);
                        
                    });
                };


              


              



                // Get the modal
                var modal = document.getElementById('id02');
                
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
                
                
                </script>

                <script type="text/javascript" src="{{ asset('js/turnos.js') }}"> </script>
                
            
          

            <!-- Posts -->
        <section class="wrapper style1">
            <div class="container">
                <div class="row">
                    <section class="col-6 col-12-narrower">
                        <div class="box post">
                            <a href="#" class="image left"><img src="images/pic01.jpg" alt="" /></a>
                            <div class="inner">
                                <h3>The First Thing</h3>
                                <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                            </div>
                        </div>
                    </section>
                    <section class="col-6 col-12-narrower">
                        <div class="box post">
                            <a href="#" class="image left"><img src="images/pic02.jpg" alt="" /></a>
                            <div class="inner">
                                <h3>The Second Thing</h3>
                                <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="row">
                    <section class="col-6 col-12-narrower">
                        <div class="box post">
                            <a href="#" class="image left"><img src="images/pic03.jpg" alt="" /></a>
                            <div class="inner">
                                <h3>The Third Thing</h3>
                                <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                            </div>
                        </div>
                    </section>
                    <section class="col-6 col-12-narrower">
                        <div class="box post">
                            <a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
                            <div class="inner">
                                <h3>The Fourth Thing</h3>
                                <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                            </div>
                        </div>
                    </section>
                </body>
        </html>
@endsection

