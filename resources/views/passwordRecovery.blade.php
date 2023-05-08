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
        <div class="container-fluid" id="contenedorGmail" style="margin-bottom: 220px;">
            <div class="d-flex justify-content-center" >
                <div class="card mt-5 contendorFormulario">
                    <header style="border-bottom: 1px solid rgb(172, 172, 172);text-align:center;padding:5px 0;font-size:22px;background-color:rgb(243, 241, 240)">Password recovery</header>
                    <form action="" id="form" name="formulario">
                        <div class="mt-2 ms-2 me-2" style="text-align: center">
                            Enter your phone number
                        </div>
                        <div class="mt-2 ms-2 me-2" style="display: none">
                            <input id="name" class="form-control" name="name" type="text" placeholder="name">
                        </div>
                        <div class="mt-2 ms-3 me-3">
                            <input id="email" class="form-control" name="email" type="text" placeholder="number">
                        </div>
                        <div class="mt-2 ms-3 me-3">
                            <input id="password" class="form-control" name="password" type="hidden" value="">
                        </div>
                        <div class="ms-3 me-3" id="error" style="font-size:13px;color:red">

                        </div>
                        
                        <div class="mt-2 mb-3 ms-3">
                            <input type="submit" class="btn" style="background-color: #ec585e;color:white" id="button" value="Send " >

                        </div>
                    </form>
                    
                </div>
            </div>

        </div>

        

         <script src="/js/pages/passworRecover.js"></script> 



         {{-- <script type="text/javascript"
         src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
       
       <script type="text/javascript">
         emailjs.init('u7X_Z8_BOolwrzoKo')
       </script> --}}


    @endsection
</body>
</html>