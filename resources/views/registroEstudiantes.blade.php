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
    <link rel="stylesheet" href="/css/modalRegisterAtletes.css">
    
</head>
<body>
    @extends('plantilla')
    @section('seccionHeader')
   

    <div id="layoutAuthentication" class="bg-light" style="position: relative">

        <div class="modalRegister">
            <header class="headerModalWalletCreada">
                <img class="imgModalWalletCreada" src="/img/iconsuccess.png" alt="">
            </header>
            <p class="Default">Su</p>
            <h5>12345678</h5>
            <button class="btnModal" onclick="confirPass()">Ok</button> 
        </div>

        <div class="modalWalletCreada" id="modalRegister">
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

        <div id="layoutAuthentication_content" >
            <main>
                <div class="container-xl px-4">
                    <div class="d-flex flex-row justify-content-center">
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                            <!-- Basic registration form-->
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center"><h3 class="fw-light my-4"> Add an Athlete</h3></div>
                                <div class="card-body">
                                    <!-- Registration form-->
                                    <form method="">
                                       
                                        <!-- Form Row-->
                                        <div class="row gx-3">

                                            <div class="col-md-6">
                                                <!-- Form Group (first name)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="guardianName">Guardian's Name</label>
                                                    <input class="form-control w-full" id="guardianName" name="name" type="text" placeholder="Enter first name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Form Group (last name)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="guardianLasName">Guardian's Last Name</label>
                                                    <input class="form-control" id="guardianLasName" name="lastName" type="text" placeholder="Enter last name" />
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <!-- Form Group (last name)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="Emergencynumber">Emergency number</label>
                                                    <input class="form-control" id="Emergencynumber" name="number" type="number" placeholder="Enter your " />
                                                </div>
                                            </div> 
                                            <div class="col-md-6">
                                                <!-- Form Group (last name)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="guardiannumber">Guardian's number</label>
                                                    <input class="form-control" id="guardiannumber" name="number" type="number" placeholder="Enter your " />
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <!-- Form Group (first name)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputFirstName">Athlete Name</label>
                                                    <input class="form-control w-full" id="inputFirstName" name="name" type="text" placeholder="Enter first name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Form Group (last name)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputLastName">Athlete Last Name</label>
                                                    <input class="form-control" id="inputLastName" name="lastName" type="text" placeholder="Enter last name" />
                                                </div>
                                            </div> 
                                            
                                            {{-- <div class="mb-3">
                                                <label class="small mb-1" for="inputEmailAddress">Athlete E-Mail</label>
                                                <input class="form-control" id="inputEmailAddress" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                            </div> --}}
                                                
                                            
                                            
                                            <div class="col-md-6">
                                                <!-- Form Group (last name)-->
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="FechaNacimiento">Athlete Date of Birth</label>
                                                    <input class="form-control" id="FechaNacimiento" name="lastName" type="date"  />
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputTlf">Athlete Phone Number</label>
                                                    <input class="form-control" id="inputTlf" name="number" type="number" placeholder="Enter your " />
                                                </div>
                                            </div> --}}
                                           <div class="col-md-7"> 
                                                <!-- Form Group (last name)-->
                                                <div class="mb-3">
                                                    <form name="f1">
                                                        <label class="small mb-1" for="inputTlf">Gender Athlete</label><br/>
                                                        <input type="radio" class="form-check-input" id="male" name="clase"  value="M" checked >Male
                                                        
                                                        <input type="radio" class="form-check-input" id="Female" name="clase"  value='F' >Female
                                                        
                                                       
                                                    </form>
                                                    
                                                </div> 
                                            {{-- </div>  --}}
                                        </div>
                                        
                                        <!-- Form Group (email address)-->
                                       
                                       
                                        <!-- Form Row    -->
                                        <div class="row gx-3">
                                            
                                            
                                            {{-- <div class="" style="margin-bottom: 3px" class="img">
                                                <label class="labelRegister" for="file" class="labelInput" >
                                                    <span class="material-icons">
                                                        add_photo_alternate
                                                    </span>&nbsp;
                                                    Choose a Photo
                                                </label>
                                                <input type="file" id="file"  accept=".jpg,.png"  >
                                                <input type="hidden" id="nameHidden" value="">
                                            </div> --}}
                                            <div class="mb-3"  id="error">
                                                <p id="errorForm" class="border border-red-500 rounded-md  w-full py-2"
                                                style="text-align: center; color: red;background-color:rgba(253, 23, 23, 0.247);border-radius:5px;"></p>
                                                
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        
                                        <!-- Form Group (create account submit)-->
                                        <button class="btn btn-primary btn-block" style="background-color:#ec585e" onclick="verificarDatos(event)" type="button">Create Athlete</button>
                                    </form>
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
          
    <script src="/js/verificarConecxion/verificarToken.js"></script>  
    <script src="/js/registrarEstudiante.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    @endsection
    
</body>
</html>