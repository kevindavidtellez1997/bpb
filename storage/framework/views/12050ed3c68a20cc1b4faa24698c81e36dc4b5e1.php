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
  

<?php $__env->startSection('seccionHeader'); ?>
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
 
<?php $__env->stopSection(); ?>
</body>
</html>


<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bpb\resources\views/boockCoachs.blade.php ENDPATH**/ ?>