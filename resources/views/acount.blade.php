<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>BPB Training</title> 
    <link rel="stylesheet" href="/css/accountMovil.css">
    <link rel="shortcut icon" href="img/logo2.jpeg" />  
</head>
<body >
    @extends('plantilla')

@section('seccionHeader')
    <div class="container-fluid mt-5" id="Cliente">
        <div class="d-flex justify-content-center">
            <div style="width: 90vw">
                <div class="d-flex justify-content-center">
                    <div class="card" style="width: 75vw">
                        <a href="/Athletes">      
                            <div class="ms-4">
                                <div class="py-3 d-flex justify-content-start">
                                    <img width="30px" src="/img/iconAtletasNew.png" alt="">
                                    <div class="opciones">Athletes</div>
                                </div>
                            </div>
                        </a>  
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <div class="card" style="width: 75vw">
                        <a href="/UserLesson">      
                            <div class="ms-4">
                                <div class="py-3 d-flex justify-content-start">
                                    <img width="30px" src="/img/iconCalendarNew.png" alt="">
                                    <div class="opciones">Schedule</div>
                                </div>
                            </div>
                        </a>  
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <div class="card" style="width: 75vw">
                        <a href="/coupons">      
                            <div class="ms-4">
                                <div class="py-3 d-flex justify-content-start">
                                    <img width="30px" src="/img/iconCuponNew.png" alt="">
                                    <div class="opciones">Cuopons</div>
                                </div>
                            </div>
                        </a>  
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <div class="card" style="width: 75vw">
                        <a href="/Wallet">      
                            <div class="ms-4">
                                <div class="py-3 d-flex justify-content-start">
                                    <img width="30px" src="/img/iconWalletNew.png" alt="">
                                    <div class="opciones">Wallet</div>
                                </div>
                            </div>
                        </a>  
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <div class="card" style="width: 75vw">
                        <a href="/UserAdmin">      
                            <div class="ms-4">
                                <div class="py-3 d-flex justify-content-start">
                                    <img width="30px" src="/img/iconUsuNew.png" alt="">
                                    <div class="opciones">Edit Profile</div>
                                </div>
                            </div>
                        </a>  
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <div class="card" style="width: 75vw">
                        <a href="/logout">      
                            <div class="ms-4">
                                <div class="py-3 d-flex justify-content-start">
                                    <img width="30px" src="/img/iconSalirNew.png" alt="">
                                    <div class="opciones">Logout</div>
                                </div>
                            </div>
                        </a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid mt-5" id="Atleta">
        <div class="d-flex justify-content-center">
            <div style="width: 90vw">
                
                <div class="d-flex justify-content-center mt-2">
                    <div class="card" style="width: 75vw">
                        <a href="/UserLesson">      
                            <div class="ms-4">
                                <div class="py-3 d-flex justify-content-start">
                                    <img width="30px" src="/img/iconCalendarNew.png" alt="">
                                    <div class="opciones">Schedule</div>
                                </div>
                            </div>
                        </a>  
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <div class="card" style="width: 75vw">
                        <a href="/UserAdmin">      
                            <div class="ms-4">
                                <div class="py-3 d-flex justify-content-start">
                                    <img width="30px" src="/img/iconUsuNew.png" alt="">
                                    <div class="opciones">Edit Profile</div>
                                </div>
                            </div>
                        </a>  
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2">
                    <div class="card" style="width: 75vw">
                        <a href="/logout">      
                            <div class="ms-4">
                                <div class="py-3 d-flex justify-content-start">
                                    <img width="30px" src="/img/iconSalirNew.png" alt="">
                                    <div class="opciones">Logout</div>
                                </div>
                            </div>
                        </a>  
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection  
</body>
</html>