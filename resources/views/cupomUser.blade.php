<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BPB Training</title> 
    <link rel="shortcut icon" href="img/logo2.jpeg" /> 
    <link rel="stylesheet" href="/css/estilosCuponesUser.css">
    
</head>
<body>
    @extends('plantilla')
    
    @section('seccionHeader')
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

    

    <div class="container-fluid mt-5" id="divPc" style="display: none">
        <div class="d-flex justify-content-center">
            <div class="contenWidth">
                <div class="card mb-2" id="tituloArea">Coupons</div>
                <div id="CreadorCuponesDinamicos">
                    
                    
                </div>
                
                

            </div>
        </div>

    </div>

    <div class="container-fluid mt-5" id="divMovil" style="display: none">
        <div class="d-flex justify-content-center">
            <div class="contenWidthMovil">
                <div class="card mb-2" id="tituloArea">
                    Coupons
                </div>
                <div id="CreadorCuponesDinamicosMovil">
                    
                </div>

            </div>
        </div>
    </div>

<script src="/js/verificarConecxion/verificarToken.js"></script>
<script src="/js/usuario/CuponesUser.js"></script>

    @endsection
</body>
</html>