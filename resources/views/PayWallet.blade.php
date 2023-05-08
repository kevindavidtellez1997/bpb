<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BPB Training</title> 
    <link rel="shortcut icon" href="img/logo2.jpeg" />
    <link rel="stylesheet" href="css/walletPagar.css"> 
</head>
<body style="position: relative">
    @extends('plantilla')
    @section('seccionHeader')

    <div class="divOpacidadOscura" id="divOpacidadOscura">
        .
    </div>

    <div class="modalPagoCompletado" id="modalPagoCompletado">
        <header class="headerModal">
            <img class="imgSuccess" src="/img/iconsuccess.png" alt="">
        </header>
        <div class="great">
            Great!
        </div>
        <div class="mensajeModal">
            Your payment has been made successfully
        </div>
    </div>

    <div class="ModalSaldoInsuficien" id="ModalSaldoInsuficien">
        <header class="headerModalSaldo">
            <img class="imgModalSaldo" src="/img/denegado.png" alt="">
        </header>
        <div class="tituloModalSaldo">
            Oops!
        </div>
        <div class="mensajeModalSaldo">
            You don't have sufficient funds for this purchase, please top up your Wallet and try again
        </div>
    </div>

    <div class="modalGanoCupones" id="modalGanoCupones">
        <header class="headerGanoCupones">
            <img class="imgGanoCupones" src="/img/cuponblanco.png" alt="">
        </header>
        <div class="titulosGanoCupones">
            Great!
        </div>
        <div class="mensajeGanoCupones">
            You deserve it, find out what coupons you have won
        </div>
        <div class="d-flex justify-content-center">
            <button class="btnOkCupons" onclick="redirigir()">ok</button>
        </div>
    </div>
    <div>
    
    <div class="modalWalletCreada" id="modalWalletCreada">
        <header class="headerModalWalletCreada">
            <img class="imgModalWalletCreada" src="/img/iconsuccess.png" alt="">
        </header>
        <div class="tituloModalWalletCreada">
            Great!
        </div>
        <div class="mensajeModalWalletCreada">
            Your Wallet was succesfully Activated
        </div>
    </div>

    <div class="modalConfiramrPago" id="modalConfiramrPago">
        <header class="headerConfiramrPago">
            <img class="imgConfiramrPago" src="/img/iconConfirmar.png" alt="">
        </header>
        <div class="mensajeConfiramrPago">
            Are you sure you want to procede with this payment?
        </div>
        <div class="d-flex justify-content-center">   
            <button class="btnConfiramrPago" onclick="verificar()">Proceed</button>
            <button class="btnConfiramrPago" onclick="Cerrar()">Cancel</button>           
        </div>
    </div>

    </div>

    <div class="modalRecargarWallet" id="modalRecargarWallet">
        <header class="headreRecargar">Wallet Top-up</header>
        <div class="d-flex justify-content-center">
            <label for="" class="labelIntroduceSaldo">Top-up Amount:</label>
        </div>
        <div class="d-flex justify-content-center">
            <div class="divInputRecargar">
                <input class="form-control" type="number" id="saldoARecargar" value="" placeholder="$">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div>
                <button class="btnRecargarModal" onclick="recargarWallet()">Checkout</button>
            </div>
            <div>
                <button class="btnRecargarModal ms-1" onclick="cerrarModalRecargarWallet()">Cancel</button>
            </div>
        </div>  
    </div>


    <div class="container-fluid mt-5">
        <div class="d-flex justify-content-center">
            <div class="divWidth">
                <div class="card titulowallet">
                   <div class="divAtrasWallet" onclick="back()"><img class="imgAtras" src="img/atras.png" alt=""><span class="Goback">Go back</span> </div>
                    Wallet
                </div>
                <div class="d-flex justify-content-start mt-2">
                    <div class="card divWalletInfo">
                       <div class="nombreUsuario" id="divNombreUser">
                            
                       </div>
                       <div class="d-flex justify-content-start">
                            <div class="ImgWallet">
                                <img class="img" src="/img/iconBilletera.png" alt="">
                            </div>
                            <div class="SaldoActual" id="SaldoActual">
                                
                            </div>
                       </div>
                       <div id="crearBtnSegunLoQtenga">
                        
                       </div>
                    </div>
                    <div class="card divFactura" id="divFactura">
                        
                    </div>
                </div>
                <div class="card mt-2 btnPagar" id="btnPagarWallet" onclick="mostrarModalConfir()">
                    Pay now
                </div>
            </div>
        </div>

    </div>
    

<script src="/js/verificarConecxion/verificarToken.js"></script>
<script src="/js/wallet/pagarClase.js"></script>
<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
    @endsection
</body>
</html>