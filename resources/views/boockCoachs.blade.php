<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BPB Training</title> 
  <link rel="shortcut icon" href="img/logo2.jpeg" />  
  <link rel="stylesheet" href="/css/OcultaPerfilCoach.css">
  <link rel="stylesheet" href="/css/restriccionAthleteModal.css">
  </head>
<body >
  @extends('plantilla')

@section('seccionHeader')
<div class="modalConten">
 
</div>
<div class="ModalInfoCoach" id="ModalInfoCoach" >
  <h5 class="NombreModal" id="NombreModal"></h5> 
  <p id="perfilCoach" class="perfilCoach">
  </p> 
    <a class="btnCloseInfo" onClick="cerraInfo()"  id="btnmostrar" value="mas">Close</a>

</div>

<div class="ModalRestriccion" id="ModalRestriccion">
  <img src="/img/warning.png" width="40px" alt="" class="imgWarning">
  <p>You do not have permission for this action</p>
  <button class="btnWarning" onclick="cerrarModalWarnig()">ok</button>
</div>
{{-- <section class="bg-light py-10" style="position: relative">
                        
  
  
  <div class="container px-5">
      <div class="row gx-5 justify-content-center">
          <div class="col-lg-6">
              <div class="mb-2 text-center">
                  
                  <h2 class="text-center heading" style="font-weight: bold;font-size:35px;margin-top:15px;">BOOK A <span style="color:#ec6962">COACH</span></h2>
                  <p>Whether you are looking to improve a technique or skill, seek agility or speed, we have the ideal Coach for you. Meet them, and find the one that best suits your current needs.</p>
              
              </div>
          </div>
      </div>
      
      <div class="row gx-5 justify-content-center" id="contenedorCoach">
      </div> 
  </div>
  
                   
</section> --}}

<div class="container-fluid mt-5">
    <div class="row justify-content-center">
      
      <div class="card mb-2" style="width:79vw;">
        <p style="" id="tituloSeccion">Book a Coach</p>
      </div>
      <div class="row justify-content-center " id="contenedorCoach">
      
      </div>
    </div>  
</div>  


<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script> 
 <script src="/js/capturarIdCoach.js"></script>
 <script src="/js/verCoaches/MostrarCoachBoock.js"></script>
 <script src="/js/verCoaches/oculataPerfiCoach.js"></script>
 
@endsection
</body>
</html>

