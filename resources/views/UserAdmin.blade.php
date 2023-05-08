<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-functions.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-storage.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/css/inputFileUser.css">
    <title>BPB Training</title> 
    <link rel="shortcut icon" href="img/logo2.jpeg" />  

    <link rel="stylesheet" href="/css/inputFileUser.css">
    <link rel="stylesheet" href="/css/estilosModalPago.css">
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
                        <header>User Profile</header>
                        <div class="img" style="padding:10px ;margin-top:8px;margin-bottom:8px">
                            <img id="imagenUser" src="" class="" alt="" style="height:150px; width:150px;border-radius:50%;display: block;margin: 0px auto;border: 2px solid #42557d;" >
                            <label for="file" id="file2" class="labelInput">
                                <span class="material-icons">
                                    add_photo_alternate
                                </span>&nbsp;
                                Choose a Photo
                            </label>
                            <input type="file" id="file" onclick="actu()" accept="image/png,image/jpeg">
                        </div>
                        
                        
                    </div>
                    
                </div>                                                     
            </div>
        </div>

        
            
    </div>
  
   
   
    
    
</section>
<script src="/js/usuario/verificarFirmaAweiver.js"></script>
<script src="/js/verificarConecxion/verificarToken.js"></script>
{{-- <script src="/js/calendarioCoach/verificarConecxion/seguridadProvicional2.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="/js/verificarConecxion/seguridadProvicional2.js"></script>
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.10.0/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
  
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyAL81QAR_z-odJJ4cNgJuPozc2H0gWPa7w",
      authDomain: "bpb-training.firebaseapp.com",
      projectId: "bpb-training",
      storageBucket: "bpb-training.appspot.com",
      messagingSenderId: "532152662318",
      appId: "1:532152662318:web:d221b87617f96e2bc562bf",
      measurementId: "G-2QG6ZM2D3Z"
    };
  
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);  
    //const analytics = getAnalytics(app);
</script>
<script src="/js/usuario/buscarUsuario.js"></script>
<script src="/js/usuario/actualizarUser.js"></script>
  

@endsection
   
 
   
</body>
</html>