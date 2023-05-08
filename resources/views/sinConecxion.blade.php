<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BPB Training</title> 
    <link rel="shortcut icon" href="img/logo2.jpeg" /> 
    <link rel="stylesheet" href="/css/estilosCuponesUser.css">
    
</head>
<body>
    @extends('plantilla')
    
    @section('seccionHeader')
    <div class="container-fluid">
        
        <div class="d-flex justify-content-center">
            <p style="background-color: #42557C;font-weight: 800;font-size:50px;padding:5px 30px;margin-top:70px;text-align:center"> <span style="color: white"> We're</span> <span style="color: #E55B64">offline</span> </p>
        </div>
        
        <div class="d-flex justify-content-center">
            <div style="width: 50vw">
               <p  style="text-align: center;font-size:20px;font-weight:300"> Unfortunately the website is down for a bit of Maintenance right now. We Will be online
                as soon as posible. Please Check again in the Little while. Thank you!</p>
            </div>
        </div>
        
        <div class="d-flex justify-content-center">
            <div style="width: 40vw">
                <p style="font-size: 25px;font-weight:900;color:#42557C;text-align:center">To book a lesson, please call.</p>
            </div>
        </div>
        
        <div class="d-flex justify-content-center">
            <div>
                
            </div>
            <div style="width: 30vw">
                <p style="text-align: center;font-weight:900;color:#E55B64;font-size:24px"><img src="/img/conecTlf.png" width="30px" style="margin-right: 10px" alt="">919 819 5518</p>
            </div>
        </div>
        
        <div class="d-flex justify-content-center">
            <img src="/img/conecxionFail2.png" width="100%" alt="">
        </div>
    </div>



    @endsection
</body>
</html>