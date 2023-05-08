<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <link rel="stylesheet" href="css/reservarCoach.css">
    <title>BPB Training</title> 
    <link rel="shortcut icon" href="img/logo2.jpeg" />  
    <link rel="stylesheet" href="/css/inputFileUser.css">


    <link rel="stylesheet" href="/css/estilosModalPago.css">
</head>
<body style="position: relative">
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
{{-- no tocar este codigo --}}
<section class="bg-light py-10 pb-5" style="margin-bottom: " style="display: none">
    <div class=" px-5 mb-5" id="sectionDiv" style="display: none">
         
        <div class="card mt-5" >
            <div class="row gx-5 justify-content-center mt-2 ">
            <!-- aqui va ir el bucle foreach -->
                <div class=" col-xs-4 col-sm-4 col-md-4 col-lg-3 col-xl-3 mb-2 ms-2">
                    <div class="px-3">  
                        
                        
                            <h3 class="pt-2 text-start" id="nombreCoach" ></h3>   
                            <input type="hidden" id="id-coach" value="ID DEL COACH">                       
                            <div class="" id="imgCoach" style="padding:1px ;margin-top:8px;margin-bottom:8px">
                                
                            </div>
                        
                    </div>
                    
                    
                    <div style="margin-left:0px;font-size: 15px;">
                        <div class="p-2">
                            <form name="f1" id="f1">
                                <h5 style="font-size:17px">Select one lesson type</h5>
                                <li style="list-style:none" id="infoClas">
                              
                                    <label class="form-check-label" style="display:none">
                                        <input class="form-check-input" type="radio" name="clase" id="${el.id}" value="" onclick="checkMe()">
                                         ara q haya mas de 2 radios y no haya error   <label style="font-weight: bold">fg</label> 
                                    </label>
                                    
                                   
                                        


                                </li>
                               
                            <form>
                        </div>                    
                    </div>
                    <div id="texthiden" style="display:none;font-size:15px">

                    </div>
                </div>
                
                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-xl-3  p-3 " >
                    
                    <div class="" id="modalPago" class="contenedorModal" style="">
                        <div class="contenedor" id="contModal">
                            <div class="conten-heder">
                            <header>Details of your lesson</header>
                        </div>
                            <button id="btnCerrar" class="btnCerrar" onclick="return cerrarModal()" for="btn-modal">X</button>
                            <div class="contenido">
                                <h5 id="nombreCoach-modal"style="font-size: 25px"></h5>
                                <p id="clasePara-modal" class="infoLesson"> </p>
                                <p id="clase-modal" class="infoLesson"> </p>				
                                <p id="dia-modal" class="infoLesson"> </p>
                                <p id="hora-modal" class="infoLesson"></p>
                                <p id="precio-modal" class="infoLesson"> </p>
                            </div>
                            <div class="">
                                <div class="contBtn">
                                    
                                        <a href="/Stripe" id="submit" type="buton" class="btnPayNow">
                                            Pay now
                                        </a>
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id='calendarr' class="P-2 " style="background-color:white; font-size:15px">
                    </div>
                    
                </div>

                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 justify-content-center " id="horas" >
                    <h3 style="text-align: center;margin-bottom:-40px;margin-top:35px" id="LessonDay" ></h3>
                    <div id="ContenedorHoras" class="ms-3 mt-5 me-3"></div>
                </div>                                                              
            </div>
        </div>

        
            
    </div>
   
    
    
</section>  

{{-- modal si no tiene cupones--}}
<div class="ModalNoCupon" id="ModalNoCupon">
    <header class="headerModalCupon">
        <img class="imgModalCupon" src="/img/denegado.png" alt="">
    </header>
    <div class="tituloModalCupon">
        Oops!
    </div>
    <div class="mensajeModalCupon">
        Sorry at this time you do not have any coupons
    </div>
</div>

 {{-- modo responsive --}}
 <div class="container-fluid"  id="modotlf">
    <div class="d-flex justify-content-center">
        <div class="divWidthConten">
            <div class="card" id="titulo" >
                <div class="divAtrasWallet" onclick="backCoaches()"><img class="imgAtras" src="img/atras.png" alt=""><span class="Goback">Go back</span> </div>
                Schedule date
            </div>
            <div class="d-flex justify-content-center" id="ContenCoachCalenHora">
                
                <div id="contentCoach" >
                    
                </div>

                

                <div id="HorasagregarDflex">
                    <div class="card ClasesAtletasHoras mt-2">
                        <div id="LoQueSelecciono"></div>
                        <div class="d-flex justify-content-between" id="claseSeleccionada"></div>
                        <div id="precioClase"></div>
                        <div class="d-flex justify-content-between" id="diaSeleccionado"></div>
                        <div id="horaSeleccionada"></div>
                        <div class="d-flex justify-content-between" id="atletaSeleccionado"></div>
                        <div id="OpcionesSeleccionadas"></div>
                        <div class="" id="clasesHorasAtletas">
                            
                            
                        </div>
                    </div>
                </div>

                <div id="CalendarAgregarDflex">
                    <div class="card mt-2 ms-2 me-2" id='calendar' >
                        
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

{{-- nuevo codigo calendar modo pc--}}
<div class="container-fluid" id="modoPc">
    <div class="d-flex justify-content-center">
        <div class="divWidthConten">
            <div class="card" id="titulo">
                <div class="divAtrasWallet" onclick="backCoaches()"><img class="imgAtras" src="img/atras.png" alt=""><span class="Goback">Go back</span> </div>
                Select a new day for your classes
            </div>
            <div class="d-flex justify-content-center" id="ContenCoachCalenHora">
                
                <div id="contentCoach" >
                    
                </div>

                <div id="CalendarAgregarDflex">
                    <div class="card mt-2 ms-2 me-2" id='calendar'>
                        
                    </div>
                </div>

                <div id="HorasagregarDflex">
                    <div class="card ClasesAtletasHoras mt-2">
                        <div id="LoQueSelecciono"></div>
                        <div class="d-flex justify-content-between" id="claseSeleccionada"></div>
                        <div id="precioClase"></div>
                        <div class="d-flex justify-content-between" id="diaSeleccionado"></div>
                        <div id="horaSeleccionada"></div>
                        <div class="d-flex justify-content-between" id="atletaSeleccionado"></div>
                        <div id="OpcionesSeleccionadas"></div>
                        <div class="" id="clasesHorasAtletas">
                            
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

{{-- modal de pago --}}
<div class=" modalMetodosPago" id="modalMetodosPago">
    <header class="headerModalPago">Select a payment method</header>
    <div class="d-flex justify-content-start divMetodos" onclick="metodoStripe()" >
        <div class="imagenMetodoPago"><img width="40px" src="/img/tarjetaNew.png" alt=""></div>
        <div class="NombreMetodoPago mt-2">Debit/Credit Card & US Bank Account</div>
    </div>
    <div class="d-flex justify-content-start divMetodos" onclick="metodoWallet()">
        <div class="imagenMetodoPago"><img width="40px" src="/img/walletNew.png" alt=""></div>
        <div class="NombreMetodoPago mt-2">Wallet</div>
    </div>
    <div class="d-flex justify-content-start divMetodos" onclick="metodoCupon()">
        <div class="imagenMetodoPago"><img width="40px" src="/img/cuponNew.png" alt=""></div>
        <div class="NombreMetodoPago">Coupon</div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="cancelarComprabtn" >
            <button class="btnCancelar" onclick="return cerrarModalMetodos()">Cancel</button> 
        </div>
    </div>
</div>

{{-- efecto de pantalla opaca --}}
<div class="opcidadPantalla" id="opcidadPantalla">
    .
</div>
 


<script src="/js/calendarioCoach/configCalendarPlugin/main.js"></script>
<script src="/js/calendarioCoach/configCalendarPlugin/moment.js"></script>
<script src="/js/calendarioCoach/configCalendarPlugin/sweetalert2.all.min.js" ></script>
<script src="/js/calendarioCoach/infoCoach/calendar.js" ></script>    

<script src="/vendor/js/calendarjs/core.js"></script>
<script src="/js/calendarioCoach/infoCoach/calendar-v2.js"></script> 

<script src="/js/verificarConecxion/seguridadProvicional2.js"></script>
<script src="/js/clases/verificaCambioClase.js"></script>
<script src="/js/calendarioCoach/infoCoach/infoCoach.js"></script>
<script src="/js/calendarioCoach/cambiarResponsive.js"></script>

<script
  src="https://code.jquery.com/jquery-3.6.1.js"
  integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
  crossorigin="anonymous"></script>
@endsection
   

</body>
</html>