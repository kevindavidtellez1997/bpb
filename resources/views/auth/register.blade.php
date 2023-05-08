<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BPB Training</title> 
    <link rel="shortcut icon" href="img/logo2.jpeg" />  
    <link rel="stylesheet" href="/css/inputFileUser.css">
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-functions.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-storage.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body style="position: relative">
    @extends('plantilla')

@section('seccionHeader')

<div class="modalWalletCreada" id="modalWalletCreada">
    <header class="headerModalWalletCreada">
        <img class="imgModalWalletCreada" src="/img/iconsuccess.png" alt="">
    </header>
    <div class="tituloModalWalletCreada">
        Great!
    </div>
    <div class="mensajeModalWalletCreada">
        account created successfully
    </div>
</div>

<div id="layoutAuthentication" class="bg-light">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container-xl px-4">
                <div class="d-flex flex-row justify-content-center">
                    <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                        <!-- Basic registration form-->
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header justify-content-center"><h3 class="fw-light my-4">Create Account</h3></div>
                            <div class="card-body">
                                <!-- Registration form-->
                                <form  id="formulario">
                                   
                                    <!-- Form Row-->
                                    <div class="row gx-3">
                                        <div class="col-md-6">
                                            <!-- Form Group (first name)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputFirstName">First Name</label>
                                                <input class="form-control w-full" id="inputFirstName" name="name" type="text" placeholder="Enter first name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Form Group (last name)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputLastName">Last Name</label>
                                                <input class="form-control" id="inputLastName" name="lastName" type="text" placeholder="Enter last name" />
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                            <!-- Form Group (email address)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control" id="inputEmailAddress" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                            </div>
                                        </div> 
                                        <div class="col-md-6">
                                            <!-- Form Group (last name)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputTlf">Phone number</label>
                                                <input class="form-control" id="inputTlf" name="number" type="number" placeholder="Enter your " />
                                            </div>
                                        </div> 
                                    </div>
                                    
                                    
                                   
                                    <!-- Form Row    -->
                                    <div class="row gx-3">
                                        <div class="col-md-6">
                                            <!-- Form Group (password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Enter password" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Form Group (confirm password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                <input class="form-control" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                            </div>
                                        </div>


                                        <div class="col-md-7">
                                            <!-- Form Group (last name)-->
                                            <div class="mb-3">
                                                <form name="f1" >
                                                    <label class="small mb-1" for="inputTlf">Gender Athlete</label><br/>
                                                    <div id="genero">

                                                    </div>
                                                    
                                                    {{-- <label class="small mb-1" for="inputTlf">Male</label> --}}
                                                    {{-- <input type="radio" class="form-check-input" id="Female" name="clase"  value='6' >Female --}}
                                                    {{-- <label class="small mb-1" for="inputTlf">Female </label> --}}
                                                   
                                                </form>
                                                
                                            </div>
                                        </div> 
                                        <div class="" style="margin-bottom: 3px" class="img">
                                            <label class="labelRegister" for="file" class="labelInput" >
                                                <span class="material-icons">
                                                    add_photo_alternate
                                                </span>&nbsp;
                                                Choose a Photo
                                            </label>
                                            <input type="file" id="file"  accept=".jpg,.png"  >
                                            <input type="hidden" id="nameHidden" value="">
                                        </div>
                                        <div class="mb-3"  id="error" style="">
                                            <p id="errorForm" class="border border-red-500 rounded-md  w-full py-2"
                                            style="text-align: center; color: red;background-color:rgba(253, 23, 23, 0.247);border-radius:5px;"></p>
                                         
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" id="AcceptTerms" type="checkbox" value="" />
                                                <label class="form-check-label" for="AcceptTerms">Accept Terms of Service</label>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    <!-- Form Group (create account submit)-->
                                    <button class="btn btn-primary btn-block" style="background-color:#ec585e" onclick="verificarDatos(event)" type="button">Create Account</button>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="{{route('login.index')}}">Have an account? Go to login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer" class="pb-5">
        
    </div>
</div>


<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
<script src="/js/verificarConecxion/seguridadProvicional.js"></script>
<script src="/js/pages/register.js"></script>
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
    const analytics = getAnalytics(app);
</script>
@endsection
</body>
</html>