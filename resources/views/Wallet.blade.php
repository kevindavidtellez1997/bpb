<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BPB Training</title> 
    <link rel="shortcut icon" href="img/logo2.jpeg" />
    <link rel="stylesheet" href="/css/wallet.css">
</head>
<body style="position: relative">
    @extends('plantilla')
    @section('seccionHeader')
    
    <div class="divOpacidadOscura" id="divOpacidadOscura">
        .
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

    <div class="container-fluid mt-5">
        <div class="d-flex justify-content-center">
            <div class="contenWidth">
                <div class="card tituloWallet">
                    Wallet
                </div>
                <div class="card mt-1">
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="d-flex justify-content-start">
                                {{-- <div class="divImgWallet">
                                    <img class="img" src="/img/iconBilletera.png" alt="">
                                </div> --}}
                                <div >
                                    <div class="divNombreUser" id="divNombreUser"></div>
                                    <div class="divTienesTanto" id="">You have</div>
                                    <div class="divSaldoWallet" id="divSaldoWallet">$0</div>
                                    
                                </div>
                            </div>
                            
                        </div>
                        <div class="divBtnCrear" id="divBtnCrear" style="display: none">
                            <button class="btnCrear" onclick="crearWallet()">Activate</button>
                        </div>
                        <div class="divBtnRecargar" id="divBtnRecargar" style="display: none">
                            <button class="btnRecargar" onclick="abrirModalRecargarWallet()"><span style="font-size:11px">(+)</span> Top-up</button>
                        </div>
                    </div>
                </div>
                <div class="card mt-1">
                    <div class="d-flex justify-content-center">
                        <div class="divTitulomovimiento">
                            Transactions
                        </div>
                    </div>
                </div>
                {{-- <div class="card mt-1">
                    <div class="d-flex justify-content-start">
                        <div class="divFechaTitulo">Day</div>
                        
                        <div class="divFechaTitulo"></div>
                        <div class="divFechaTitulo">promotion</div>
                        <div class="divFechaTitulo">Expenses</div>
                    </div>
                </div> --}}
                <div id="divContenMovimientos">
                   
                </div>
            </div>
        </div>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
    <script src="/js/verificarConecxion/verificarToken.js"></script>
    <script src="/js/wallet/crearWallet.js"></script>
    
    @endsection
    
</body>
</html>