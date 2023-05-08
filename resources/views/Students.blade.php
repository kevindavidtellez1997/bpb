<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BPB Training</title> 
    <link rel="shortcut icon" href="img/logo2.jpeg" />
    <link rel="stylesheet" href="/css/estudiantes.css">
    <link rel="stylesheet" href="/css/atletas.css">  
</head>
<body>
    @extends('plantilla')
    @section('seccionHeader')
        

        <div class="container-fluid mt-5">
            <div class="d-flex justify-content-center">
                <div class="contenedorPrincipal">
                    
                    <div class="card" >
                        <div class="d-flex justify-content-center">
                            <div id="tituloConten">
                                Athletes
                            </div>
                            <div id="btnAgregar" onClick="PgRegistro()">
                                Add   
                            </div>
                        </div>
                           
                        
                    </div>
                    
                    <div class="card" id="contenPropiedades">
                        <div class="d-flex justify-content-start" >
                            <div class="nombreAtleta">
                                Name
                            </div>
                            <div class="apellidoAtleta">
                                Last Name
                            </div>
                            <div class="userAtleta">
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="ContenAtletas" id="ContenAtletas">
                        
                    </div>

                </div>

            </div>

        </div>

    <script src="/js/verificarConecxion/verificarToken.js"></script>
    <script src="/js/estudiantes.js"></script>
    @endsection
    
</body>
</html>