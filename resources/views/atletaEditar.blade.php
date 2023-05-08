<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <title>BPB Training</title> 
    <link rel="shortcut icon" href="img/logo2.jpeg" />
    <link rel="stylesheet" href="/css/inputFileUser.css">
</head>
<body >
    @extends('plantilla')

@section('seccionHeader')
<div class="modalWalletCreada" id="modalWalletCreada">
    <header class="headerModalWalletCreada">
        <img class="imgModalWalletCreada" src="/img/iconsuccess.png" alt="">
    </header>
    <div class="tituloModalWalletCreada" style="color: grey;margin-top:20px;margin-bottom:20px">
        Successful change!
    </div>
    {{-- <div class="mensajeModalWalletCreada">
        account created successfully
    </div> --}}
</div>
<section class="bg-light py-10" >
    <div class=" px-5">
         
        <div class=" mt-5" >
            <div class="">
                <div class=" row gx-5 justify-content-center mt-2 ">
                <!-- aqui va ir el bucle foreach -->
                    
                    
                    
                    <div class="card col-xs-5 col-sm-5 col-md-4 col-lg-4 col-xl-4  p-3  fs-6" id="contenUser">
                        <header>Edit Athlete</header>
                        
                        
                        
                    </div>
                    
                </div>                                                     
            </div>
        </div>

        
            
    </div>
  
   
   
    
    
</section>
<script src="/js/verificarConecxion/verificarToken.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="/js/verificarConecxion/seguridadProvicional2.js"></script>
<script src="/js/usuario/infoAtleta.js"></script>
  

@endsection
   
 
   
</body>
</html>