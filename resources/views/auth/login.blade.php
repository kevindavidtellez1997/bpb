<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>BPB Training</title> 
        <link rel="shortcut icon" href="img/logo2.jpeg" />  
</head>
<body>
    @extends('plantilla')

@section('seccionHeader')
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container-xl px-4">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <!-- Basic login form-->
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header justify-content-center"><h3 class="fw-light my-4">Login</h3></div>
                            <div class="card-body">
                                <!-- Login form-->
                                <form method="">
                                    
                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Email</label>
                                        <input class="form-control" id="inputEmailAddress" type="email" name="email" placeholder="Email" />
                                    </div>
                                    <!-- Form Group (password)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputPassword">Password</label>
                                        <input class="form-control"  id="inputPassword" type="password" name="password" placeholder="Enter password" />
                                    </div>
                                    {{-- Error de login --}}
                                    
                                    <div class="mb-3" style="display:none;text-align: center" id="error" >
                                        <p class="border border-red-500 rounded-md  w-full py-2"
                                        style="color: red;background-color:rgba(253, 23, 23, 0.247);border-radius:5px;"> Invalid email or password</p>
                                     
                                    </div>
                                    
                                    <!-- Form Group (remember password checkbox)-->
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" id="rememberPasswordCheck" type="checkbox" value="" />
                                            <label class="form-check-label" for="rememberPasswordCheck">Remember password</label>
                                        </div>
                                    </div>

                                    
                                    
                                    <!-- Form Group (login box)-->
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        {{-- <a class="small" href="auth-password-basic.html">Forgot Password?</a> --}}
                                        <button class="btn btn-primary" style="background-color:#ec585e" onclick="onSendData(event)" id="btn-login" type="button">Login</button>
                                        <div>
                                            <a href="/recovery" style="color: blue;font-size:13px;cursor:pointer">Forgot password ?</a><br>
                                            {{-- <a href="/recovery" style="color: blue;font-size:13px;cursor:pointer">Create password ?</a> --}}
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <div class="small"><a href="{{route('register.index')}}">Need an account? Sign up!</a></div>
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
<script src="/js/pages/login.js"></script>
@endsection




</body>
</html>
