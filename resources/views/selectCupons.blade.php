<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BPB Training</title> 
    <link rel="shortcut icon" href="img/logo2.jpeg" /> 
    <link rel="stylesheet" href="/css/estilosCuponesUser.css">
    <link rel="stylesheet" href="/css/estilosCuponesPago.css">
</head>
<body style="position: relative">
    @extends('plantilla')
    @section('seccionHeader')
    {{-- modal fuera de servicio--}}
    <div class="ModalInfoCupon" id="ModalInfoCupon" >
        <div class="ModalImgOfert">

            <div class="d-flex justify-content-center" class="contenLogoDescripcion">
                
                <div class="imgBPB">
                    <img src="/img/logo.png" width="80px" alt="" > 
                </div>

                <div class="InfoCuponModal" >
                    <span class="infoBonus"></span>
                    
                </div>

            </div>
        </div>
        <div> 
            <p  class="CopyBPB" >copy the code and go to BPBTraining</p>
            <div class="DivcodeModal justify-content-center" id="codigoMostrado">
                
               {{-- <input id="CodeText" type="text" value="SADF-FUPX-ASDT" class="inpuCodeModal">  --}}
               
            </div>
            {{-- <span class="CodeModal">DSFR-YSDF-JIGD  </span> --}}
        </div>
        <h5 class="NombreModal" id="NombreModal" ></h5> 
    
          <a class="btnCloseInfo" onClick="cerraInfo()"  id="btnmostrar" value="mas">Close</a>

    </div>

    <div class="ModalCompraExitosa" id="ModalCompraExitosa">
        <header class="headerModalCompraExitosa">
            <img class="imgModalCompraExitosa" src="/img/iconsuccess.png" alt="">
        </header>
        <div class="tituloModalCompraExitosa">
            Great!
        </div>
        <div class="mensajeModalCompraExitosa">
            Your class has been booked
        </div>
    </div>

    <div class="ModalNoCupon" id="ModalNoCupon">
        <header class="headerModalCupon">
            <img class="imgModalCupon" src="/img/denegado.png" alt="">
        </header>
        <div class="tituloModalCupon">
            Please!
        </div>
        <div class="mensajeModalCupon">
            Select a coupon with the class
            <div id="claseAseleccionar"></div>
        </div>
    </div>

    <div class="modalConfiramrPago" id="modalConfiramrPago">
        <header class="headerConfiramrPago">
            <img class="imgConfiramrPago" src="/img/iconConfirmar.png" alt="">
        </header>
        <div class="mensajeConfiramrPago">
            Are you sure you want to procede with this payment?
        </div>
        <div id="codigoModal">
            
        </div>
        <div id="idCuponPasar">
            
        </div>
        <div class="d-flex justify-content-center">   
            <button class="btnConfiramrPago" id="btnConfiramrPago" onclick="Proceder()">Proceed</button>
            <button class="btnConfiramrPago" onclick="Cerrar()">Cancel</button>           
        </div>
    </div>

    <div class="container-fluid mt-5" id="divPc" style="display: none">
        <div class="d-flex justify-content-center">
            <div class="contenWidth">
                <div class="card mb-2" id="tituloArea">
                    Select a coupon with the class
                    <div class="divAtrasWallet" onclick="back()"><img class="imgAtras" src="img/atras.png" alt=""><span class="Goback">Go back</span> </div>
                    <div class="ClaseSeleccionada" id="ClaseSeleccionada"></div>
                </div>
                <div id="CreadorCuponesDinamicos">
                    
                    
                </div>
                
                

            </div>
        </div>

    </div>

    <div class="container-fluid mt-5" id="divMovil" style="display: none">
        <div class="d-flex justify-content-center">
            <div class="contenWidthMovil">
                <div class="card mb-2" id="tituloArea">
                    select a coupon with the class
                    <div class="divAtrasWalletMovil" onclick="back()"><img class="imgAtras" src="img/atras.png" alt=""><br/><span class="GobackMovil">Go back</span> </div>
                    <div class="ClaseSeleccionada" id="ClaseSeleccionadaMov"></div>
                </div>
                <div id="CreadorCuponesDinamicosMovil">
                    
                </div>

            </div>
        </div>
    </div>

    <script src="/js/verificarConecxion/verificarToken.js"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.1.js"
    integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script src="/js/usuario/PagarConCupon.js"></script>
    @endsection
    
</body>
</html>