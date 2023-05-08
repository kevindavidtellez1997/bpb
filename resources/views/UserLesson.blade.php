<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>BPB Training</title> 
    <link rel="shortcut icon" href="img/logo2.jpeg" />  
    <link rel="stylesheet" href="/css/btnLesson.css">
    <link rel="stylesheet" href="/css/inputFileUser.css">
    <link rel="stylesheet" href="/css/estilosModalPago.css">
    <link rel="stylesheet" href="/css/lessonTable.css">
    <link rel="stylesheet" href="/css/btnsLessonWorkshops.css">
    <link rel="stylesheet" href="/css/workshopsView.css">
    {{-- <link rel="stylesheet" href="/css/lessonTableResponsive.css"> --}}
</head>
<body style="background-color: rgb(238, 238, 238)">
    @extends('plantilla')

@section('seccionHeader')

<div class="container-fluid">
    <div class="d-flex justify-content-center pt-4 pb-4">
        <div class="d-flex justify-content-center contendorBtns">
            <div class="BtnLesson" id="BtnLesson" onclick="btnLessonPresep()">
                Lessons
            </div>
            <div class="BtnWorkshop" id="BtnWorkshop" onclick="btnWorkshopPresep()">
                Workshops
            </div>
        </div>
    </div>

</div>

<div id="ContainerLesson">
    {{-- clases actuales responsive --}}
    

    {{-- clases completadas response --}}
   

    {{-- clases actuales pc --}}
    

    {{-- clases completadas pc--}}
    
</div>

<div id="ContainerWorkshops">
    
</div>

<script src="/js/usuario/renderWorkshop.js"></script>
<script src="/js/usuario/renderLesson.js"></script>
<script src="/js/usuario/btnsLessonWorkshop.js"></script>
<script src="/js/verificarConecxion/verificarToken.js"></script>
<script src="/js/verificarConecxion/seguridadProvicional2.js"></script>
<script src="/js/usuario/lessonUser.js"></script>
@endsection
   
 
   
</body>
</html>