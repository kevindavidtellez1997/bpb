<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BPB Training</title> 
  <link rel="shortcut icon" href="img/logo2.jpeg" /> 
  <link rel="stylesheet" href="css/modalDePago.css"> 
  <link rel="stylesheet" href="/css/campClinic.css">
  <link rel="stylesheet" href="/css/modadDisponibilidad.css">
  </head>
<body  style="background-color:#f0f0f1">

    
<?php $__env->startSection('seccionHeader'); ?>


<div id="modalDisponivilidad">
    <header class="d-flex justify-content-center headerDisponibilidad" >
        <img class="imgDisponi" src="/img/denegado.png" width="65px" alt="">               
    </header>
    <div class="mensaje" id="mensajeDisponivilidad">
        comentario
    </div>
</div>

<div class=" modalMetodosPago" id="modalMetodosPago">
    <header class="headerModalPago">Select a payment method</header>
    <div class="d-flex justify-content-start divMetodos" onclick="metodoStripe()" >
        <div class="imagenMetodoPago"><img width="40px" src="/img/tarjetaNew.png" alt=""></div>
        <div class="NombreMetodoPago mt-2">Debit/Credit Card & US Bank Account</div>
    </div>
    <div class="d-flex justify-content-start divMetodos" onclick="metodoWallet()">
        <div class="imagenMetodoPago"><img width="40px" src="/img/walletNew.png" alt=""></div>
        <div class="NombreMetodoPago mt-2">Wallet</div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="cancelarComprabtn" >
            <button class="btnCancelar" onclick="return cerrarModalMetodos()">Cancel</button> 
        </div>
    </div>
</div>

<div class="container-fluid" id="pcCamp" style="opacity: 0" >
    <div class="d-flex justify-content-center">
        <div class="DivWidthCamp">
            <div class="divBtnCampClinc d-flex justify-content-center">
                
                <div class="btnCampClinc">
                    <div class="d-flex justify-content-center mt-3">
                        <div class="swichCamp d-flex justify-content-center" id="categoriasPc">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div id="headerCampInfEliminacion">
                
            </div>
            <div id="contenedorDelContenidoDinamico" class="mt-2">
                
                <div class="divContenidoDelMes" id="Camps">
                    
                </div> 
                <div class="divClinics" id="divClinics">
                  
                </div>
            </div>
            
        </div>
    </div>

</div>  

<div class="container-fluid" id="responsiveCamp" style="opacity: 0">
    <div class="d-flex justify-content-center">
        <div class="DivWidthCamp">
            <div class="navegacionHaciaAtras">
                <div class="divAtrasWallet" style="margin-top:25px" onclick="navigeToBack()"><img class="imgAtras" src="img/atras.png" width="30px" alt=""><span class="Goback" style="color: #42557d;font-weight:600;margin-left:5px">Go back</span> </div>
            </div>
            <div class="btnCampClincc">
                <div class="d-flex justify-content-center mt-3">
                    <div class="swichCampResponse d-flex justify-content-center" id="categoriasRes">
                        
                    </div>
                </div>
            </div>
            
            <div id="contenedorDelContenidoDinamicoCamp" class="mt-2">
                
                
            </div>
            
            <div id="contenedorDelCoDinamicoClinc" class="mt-2">
                
            </div>
        </div>
    </div>
</div>
<div class="opcidadPantalla" id="opcidadPantalla">
    .
</div> 
<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
  
  <script src="/js/campClinc/verificarDisponibilidad.js"></script>
<script src="/js/campClinc/pagarWorshopStripe.js"></script> 
<script src="/js/campClinc/cambiarColorDelBtnSelec.js"></script>
<script src="/js/campClinc/guardarInfoWorkshopEjecutarTipoDePago.js"></script>
<script src="/js/campClinc/renderCamp.js"></script>
<script src="/js/campClinc/renderClinc.js"></script>
<script src="/js/campClinc/callWorshops.js"></script>
<script src="/js/campClinc/verCategoriasEnUI.js"></script>
<script src="/js/campClinc/verificarDimenciones.js"></script>
<?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bpb\resources\views/Camps&Clinics.blade.php ENDPATH**/ ?>