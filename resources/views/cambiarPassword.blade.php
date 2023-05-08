<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/cambioContraseña.css">
    <title>Document</title>
    <title>BPB Training</title> 
    <link rel="shortcut icon" href="img/logo2.jpeg" />
</head>
<body>
    @extends('plantilla')
    @section('seccionHeader')
    
    <div class="container-fluid mt-5">
        <div class="d-flex justify-content-center">
            <div class="containerWidth">
                <div class="card">
                    <header class="header">Change password</header>
                    {{-- <div class="mt-2 px-3" >
                        <label class="labelForm" for="">Enter your password</label>
                        <input class="form-control" id="passActual" type="password" value="" placeholder="password">
                    </div> --}}
                    {{-- <div class="px-3" id="DivPass" >

                    </div> --}}
                    <div class="mt-2 px-3">
                        <label class="labelForm" for="">New password</label>
                        <input class="form-control" id="newPass" type="password" placeholder="New password">
                    </div>
                    <div class="mt-2 px-3">
                        <label class="labelForm" for="">Comfirm password</label>
                        <input class="form-control" id="confPass" type="password" placeholder="Confirm password">
                    </div>
                    <div class="px-3" id="DivPassNew" >

                    </div>
                    <div class="d-flex justify-content-between mt-2 mb-2 px-3">
                        <button class="btn " id="btnCambio" onclick="cambiarPass()" >Change</button>
                        <button class="btn " id="btnCambio" onclick="back()" >Go back</button>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <script src="/js/verificarConecxion/verificarToken.js"></script>
    <script src="/js/usuario/cambiarContraseña.js"></script>
    @endsection
</body>
</html>