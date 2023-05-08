<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BPB Training</title> 
    <link rel="shortcut icon" href="img/logo2.jpeg" /> 
    <link rel="stylesheet" href="/css/recuperacionContraseña.css">
</head>
<body style="position: relative">
    @extends('plantilla')
    @section('seccionHeader')
        <div class="container-fluid FormularioCodigo mt-5" id="contenedorCodigo" style="margin-bottom: 220px;">
            <div class="d-flex justify-content-center">
                <div class="card divWidRecuperacionContraseña">
                    <div class="d-flex justify-content-center mt-5">
                        <h3>Check your phone</h3>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <div style="font-weight: 500">Enter the 5-digit code we just sent to</div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div id="contenedorEmailOcultado"></div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="useDif">Use different phone number</div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="donClose">(Don't close this tab)</div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <img src="/img/EmailRecuperar.png" width="65px" alt="">
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <label for="">Verification code</label><br/>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div class="col-7">
                            <input type="text" class="form-control" id="codigoRec">
                            <label id="errorCodigo" for="" style="color: red;font-size:13px;opacity:0">Enter a 5 digit code</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4 mb-5">
                        <button class="btnContinue" onclick="verificar()">Continue</button>
                    </div>
                        
                    
                </div>
            </div>
        </div>

         <script src="/js/pages/enviarCodeComprarWallet.js"></script> 



         

    @endsection
</body>
</html>