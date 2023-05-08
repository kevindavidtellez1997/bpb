<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, maximum-scale=5 "/>
<!-- Enlaza la librería Swiper.js desde el CDN -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">




<link rel="stylesheet" href="css/sliderDePersonasamanualResponsive.css">
<link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/clasePromocionadasHome.css">
    <link rel="stylesheet" href="css/menuUser.css">
    <link rel="stylesheet" href="{{ asset('css/newstyle.css') }}">
    <link rel="stylesheet" href="css/navarNavegacion.css">

 <!-- Librerias Sobre Sliders -->
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/nabvar/navbarMovil.js"></script>
<script src="/js/nabvar/infoLog.js"></script>
<script src="/js/nabvar/footerRespon.js"></script> 

<script src="/js/home/moverDivClasesUsuario.js"></script>
<script src="/js/home/vistasMovil.js"></script>
<script src="/js/home/cambiarImagenPortada.js"></script>
<script src="/js/sliderHomeCoach/swiper-bundle.min.js"></script>
<script src="/js/sliderHomeCoach/swiper-app.js"></script>
<script src="/js/verCoaches/mostrarCoachHome.js"></script>
<script src="/js/home/verPromosActuales.js"></script>

    <!-- slider Script -->
<script>
    $(document).ready(function(){
        $('.slider').slick({
            autoplay: true, 
            autoplaySpeed: 7000, 
            dots: true,
            arrows: false, 
        });
    });
</script>

<!-- Modulo de Tab Script -->
<script>
  function openTab(evt, selectorName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(selectorName).style.display = "flex";
    evt.currentTarget.className += " active";
  }
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    <title>BPB Training</title> 
    <link rel="shortcut icon" href="img/logo2.jpeg" /> 


</head>
<body class="bg-light">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    @extends('plantilla')

    @section('seccionHeader')

    <div class="slider">
    <div><img style="width: 100%!important;max-width: 100%!important;" src="img/2slider2.jpeg"></div>
    <div><img style="width: 100%!important;max-width: 100%!important; "src="img/sliderback.jpeg"></div>
    <div><img style="width: 100%!important;max-width: 100%!important; "src="img/2slider1.jpeg"></div>
</div>

<div style="background-image: url(img/background-upcoming-lesson.webp)!important;">
<div class="seccionbackbaseball">
<div  class="text-center heading presentacionTitulo">Upcoming<span style="color:#ec585e;">Lessons</span></div>
  
      <div class="sectionblurdesktop sectionblurtabletnone">
      <div id="idblur" class="blur-container" >

             <div class="blur-item ">
             <p class="menublur" >Pitching/hitting essentials</p>
             <p class="textblur1" ><p><spam style="font-weight: 600;color:black;">Coach:</spam><br>Brad Pennington S.</p>
             <p class="textblur1" >15/11/2022 - 11:00 AM</p>
             <button class="Butonblur">Make changes</button>
       </div>

       <div class="blur-item">
             <p class="menublur" >Hitting Master class</p>
             <p class="textblur1" ><p><spam style="font-weight: 600;color:black;">Coach:</spam><br>Brad Pennington S.</p>
             <p class="textblur1" >15/11/2022 - 11:00 AM</p>
             <button class="Butonblur">Make changes</button>
       </div>

       <div class="blur-item">
             <p class="menublur" >Hitting Master class</p>
             <p class="textblur1" ><p><spam style="font-weight: 600;color:black;">Coach:</spam><br>Brad Pennington S.</p>
             <p class="textblur1" >15/11/2022 - 11:00 AM</p>
             <button class="Butonblur">Make changes</button>
       </div>

       <div class="blur-item">
            <p class="menublur" >Hitting Master class</p>
            <p class="textblur1" ><p><spam style="font-weight: 600;color:black;">Coach:</spam><br>Brad Pennington S.</p>
            <p class="textblur1" >15/11/2022 - 11:00 AM</p>
            <button class="Butonblur">Make changes</button>
       </div> 

      </div> 
      </div>
</div>
</div>
   <!--final de  Modulo de Blur -->

    
    <!--Inicio de  Modulo de Blur movil -->
    <div style="background-image: url(img/background-upcoming-lesson.webp)!important;">
    <div class="sectionblurmovil sectionblurtablet1 ">
   <div id="idblur" class="blur-container slider">

       <div class="blur-item">
       <p class="menublur" >Pitching/hitting essentials</p>
       <p class="textblur1" ><p><spam style="font-weight: 600;color:black;">Coach:</spam><br>Brad Pennington S.</p>
       <p class="textblur1" >15/11/2022 - 11:00 AM</p>
       <button class="Butonblur">Make changes</button>
   </div>

    <div class="blur-item">
    <p class="menublur" >Hitting Master class</p>
    <p class="textblur1" ><p><spam style="font-weight: 600;color:black;">Coach:</spam><br>Brad Pennington S.</p>
    <p class="textblur1" >15/11/2022 - 11:00 AM</p>
    <button class="Butonblur">Make changes</button>
    </div>

    <div class="blur-item">
    <p class="menublur" >Hitting Master class</p>
    <p class="textblur1" ><p><spam style="font-weight: 600;color:black;">Coach:</spam><br>Brad Pennington S.</p>
    <p class="textblur1" >15/11/2022 - 11:00 AM</p>
    <button class="Butonblur">Make changes</button>
    </div>

    <div class="blur-item">
    <p class="menublur" >Hitting Master class</p>
    <p class="textblur1" ><p><spam style="font-weight: 600;color:black;">Coach:</spam><br>Brad Pennington S.</p>
    <p class="textblur1" >15/11/2022 - 11:00 AM</p>
    <button class="Butonblur">Make changes</button>
    </div> 

    </div> 
    </div>
 </div>
 <!--fin de  Modulo de Blur movil -->

     <!--seccion numero# 3  -->

<div class="section3" style="background-image: url(img/gruposection.png)!important;">
    <h2 class="textsec3">
    What's on Your Mind Today?    
    <h2>
    <p class="textsec3p">Select your booking option</p>
</div>
      
 <!-- Fin de seccion numero# 3  -->

 <!-- inicio de seccion numero# 4  -->

<!-- seccion desptop blur  -->
 <div class="sectionblur sectionblurdesktop">
       <div class="blur-item4 mdl4blur hoverclass">
        <div class="blurimage">
       <img  class="imagesec41" src="img/baseball-player.png" width="53px" height="85.83" alt="Girl in a jacket">
       </div>
       <p class="textsec4">Coach</p>
   </div>

    <div class="blur-item4 mdl4blur hoverclass">
    <div class="blurimage">
    <img class="imagesec41" src="img/lesson.svg"  width="53px" height="85.83" alt="lesson">
    </div> 
    <p class="textsec4">Lesson</p>
    </div>   
</div>

<!-- seccion movil blur  -->
<div class="twoblursec sectionblurmovil">
       <div class="blur-item4 hoverclass">
       <div class="blurimage">
       <img  class="imagesec41" src="img/baseball-player.png" width="53px" height="85.83" alt="Girl in a jacket">
       </div>
       <p class="textsec4">Coach</p>
       </div>

      <div class="blur-item4 hoverclass">
      <div class="blurimage">
      <img class="imagesec41" src="img/lesson.svg"  width="27%" height="27%" alt="lesson">
      </div> 
      <p class="textsec4">Lesson</p>
      </div>
      </div>
</div>
<!-- Fin de seccion numero# 4  -->

<!--seccion numero# 5  -->

<!-- selectores para tap  -->
<div class="Seccion5 sectionblurdesktop sectionblurtabletnone" style="background-image: url(img/backgroundsec5.svg)!important;">    
<div class="tab">
<div class="tapdiv">
<button class="tablinks" onclick="openTab(event, 'selector1')">Promotions</button>
</div>
<div class="tapdiv" >
<button class="tablinks" onclick="openTab(event, 'selector2')">Memberships</button>
</div>
<div class="tapdiv">
<button class="tablinks" onclick="openTab(event, 'selector3')">Virtual Lessons</button>
</div>
<div class="tapdiv">
<button class="tablinks" onclick="openTab(event, 'selector4')">Workshops</button>
</div>
</div>
</div>

<div class="Seccion5 sectionblurtablet"  style="background-image: url(img/backgroundtablet.webp)!important;">    
<div class="tab">
<div class="tapdiv">
<button class="tablinks" onclick="openTab(event, 'selector1')">Promotions</button>
</div>
<div class="tapdiv" >
<button class="tablinks" onclick="openTab(event, 'selector2')">Memberships</button>
</div>
<div class="tapdiv">
<button class="tablinks" onclick="openTab(event, 'selector3')">Virtual Lessons</button>
</div>
<div class="tapdiv">
<button class="tablinks" onclick="openTab(event, 'selector4')">Workshops</button>
</div>
</div>
</div>
<!-- selectores para tap  -->

<!-- selectores para Desktop -->

<div class="sectionblurdesktop"  >
  <div id="selector1" class="tabcontent" style="background-image: url(img/backsec.png)!important;"   >
    <div class="Seccion5" >
      <div class="blur-item5">
        <img class="imagesec51" src="img/tarjetas-example.webp"  width="531px" height="276px" alt="lesson">
          </div>
            <div class="blur-item5">
              <img class="imagesec51" src="img/tarjetas-example.webp"  width="531px" height="276px" alt="lesson">
            </div>
            <div class="blur-item5" >
            <img class="imagesec51" src="img/tarjetas-example.webp"  width="531px" height="276px" alt="lesson">
            </div>
      </div>
   </div>
</div>

<div id="selector2" class="tabcontent" style="display:none; background-image: url(img/backsec.png)!important;" >
<div class="Seccion5" >
    <div  class="blur-item5">
    <img class="imagesec51" src="img/tarjetas-example.webp"  width="531px" height="276px" alt="lesson">
    </div> 
    <div class="blur-item5">
    <img class="imagesec51" src="img/tarjetas-example.webp"  width="531px" height="276px" alt="lesson">
    </div>
    <div class="blur-item5">
    <img class="imagesec51" src="img/tarjetas-example.webp"  width="531px" height="276px" alt="lesson">
    </div>
</div>
</div>

<div id="selector3" class="tabcontent" style="display:none; background-image: url(img/backsec.png)!important;">
<div class="Seccion5">
    <div class="blur-item5" >
    <img class="imagesec51" src="img/tarjetas-example.webp"  width="531px" height="276px" alt="lesson">
    </div>
    <div class="blur-item5" >
    <img class="imagesec51" src="img/tarjetas-example.webp"  width="531px" height="276px" alt="lesson">
    </div>
    <div class="blur-item5">
    <img class="imagesec51" src="img/tarjetas-example.webp"  width="531px" height="276px" alt="lesson">
    </div>
  </div>
</div>

<div id="selector4" class="tabcontent" style="display:none; background-image: url(img/backsec.png)!important;">
<div class="Seccion5">
    <div class="textpworkshop" >
    <p>Camps</p>
    </div>
    <div class="textpworkshop" >
    <p>Clinics</p>
    </div>
    <div class="textpworkshop" >
    <p>Workshop name 3</p>
    </div>
    <div class="textpworkshop" >
    <p>Workshop name 4</p>
    </div>
    <div class="textpworkshop" >
    <p>Workshop name 5</p>
    </div>
  </div>
</div>
<!-- selectores para Desktop -->

<!-- selectores para movil -->
<div class="contenedortapm sectionblurmovil" style="background-image: url(img/backgrountapmovil.svg)!important;">
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item cbuttontap1" role="presentation">
  <div class="cbuttontap">
    <button class="nav-link active tapmovil" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Promotions</button>
</div>
    <div class="cbuttontap">
    <p class="nav-link tapmovil" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"  role="tab" aria-controls="pills-profile" aria-selected="false">Memberships</p>
</div>
    <div class="cbuttontap">
    <p class="nav-link tapmovil" id="pills-workshop-tab" data-bs-toggle="pill" data-bs-target="#pills-workshop" role="tab" aria-controls="pills-contact" aria-selected="false">Workshops</p>
</div>
    <div class="cbuttontap">
    <p class="nav-link tapmovil" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Virtual Lessons</p>
</div>
  </li>
</ul>
</div>

<div class="sectionblurmovil ">
<div class="tab-content" id="pills-tabContent">

  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <div class="blur-item5" >
    <img class="imagesec51" src="img/cupon-mobile.webp"  width="531px" height="276px" alt="lesson">
    </div>
    <div class="blur-item5" >
    <img class="imagesec51" src="img/cupon-mobile.webp"   width="531px" height="276px" alt="lesson">
    </div>
    <div class="blur-item5" >
    <img class="imagesec51" src="img/cupon-mobile.webp"   width="531px" height="276px" alt="lesson">
    </div>
    </div>

  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  <div class="blur-item5" >
    <img class="imagesec51" src="img/cupon-mobile.webp"   width="531px" height="276px" alt="lesson">
    </div>
    <div class="blur-item5" >
    <img class="imagesec51" src="img/cupon-mobile.webp"   width="531px" height="276px" alt="lesson">
    </div>
    <div class="blur-item5" >
    <img class="imagesec51" src="img/cupon-mobile.webp"   width="531px" height="276px" alt="lesson">
    </div>
    </div>
  
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <div class="blur-item5" >
    <img class="imagesec51" src="img/cupon-mobile.webp"   width="531px" height="276px" alt="lesson">
    </div>
    <div class="blur-item5" >
    <img class="imagesec51" src="img/cupon-mobile.webp"  width="531px" height="276px" alt="lesson">
    </div>
    <div class="blur-item5" >
    <img class="imagesec51" src="img/cupon-mobile.webp"  width="531px" height="276px" alt="lesson">
    </div>
    </div>

    <div class="tab-pane fade" id="pills-workshop" role="tabpanel" aria-labelledby="pills-contact-tab">
  <div class="textpworkshop" >
    <p>Camps</p>
    </div>
    <div class="textpworkshop" >
    <p>Clinics</p>
    </div>
    <div class="textpworkshop" >
    <p>Workshop name 3</p>
    </div>
    <div class="textpworkshop" >
    <p>Workshop name 4</p>
    </div>
    <div class="textpworkshop" >
    <p>Workshop name 5</p>
    </div>
    </div>
  
</div>
</div>
                          
<!-- fin selectores para movil -->

<!-- Fin de seccion numero# 5  -->

<!-- seccion numero# 6  -->
<div class="sectionblurdesktop">
<div class="slider">
    <div><img style="width: 100%!important;max-width: 100%!important;" src="img/sliderNew.png"></div>
    <div><img style="width: 100%!important;max-width: 100%!important; "src="img/benner-baseball.webp"></div>
</div>
</div>

<div class="sectionblurmovil">
<div class="slider">
    <div><img style="width: 100%!important;max-width: 100%!important;" src="img/elite-training-programs.webp"></div>
    <div><img style="width: 100%!important;max-width: 100%!important; "src="img/college-showcases.webp"></div>
</div>
</div>

<!-- Fin de seccion numero# 6  -->

<!-- seccion numero# 7  -->
<div class="section7">
<div class="fondoAzul mt-3 secctionlesson">
            <div class="d-flex justify-content-center" >
                <div  class="text-center heading presentacionTitulo">About our<span style="color:#ec585e;">Facility</span></div>
         </div> 
    <h2 class="textsec31">
         
    <h2>
    <div class="infoSubTitulo">
    <span class="ColorSubTitulo">BPB Training</span> was started by former <br><span class="ColorSubTitulo">MLB players</span>
    </div>
</div>
<!-- Fin de seccion numero# 7  -->

<!-- seccion numero# 8  -->
<div class="section7" >
    <div>
    <p class="textsec8">whose idea was the bring high level indoor training to all levels of players. Whether you’re a player, a parent or a coach, we all know that the key to growing as a player is consistency. Being trained properly allows that growth to continue in the best direction. That training can help you get you were you want to go. It may also help you get thru a slump and overcome any obstacle. The confidence that a player gains from training on a regular basis can extend beyond baseball to all aspects of life. Trust the process to get you to your goal.</p>
    </div>
       <div class="container-fluid mt-3">
            <div class="d-flex justify-content-center">
                <video class="videoBpb" controls autoplay muted playsinline>
                    <source src="img/video.mp4" type="video/mp4" >
                </video>
            </div>
        </div>
        <div class="container-fluid tabletnone slidercont">
            <div class="d-flex justify-content-center">
                <div class="divWidthInfoImg">
                    {{-- slider de imagenes --}}
                    <div class="d-flex justify-content-start my-2  slider sectionblurdesktop" id="divSliderInfoIng">

                        <div class="divImagenesSecundarias d-flex ">
                            <img class="altoDeterminadoImg" src="img/w6.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w5.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w7.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w3.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w6.png" alt="">
                            </div>

                            <div class="divImagenesSecundarias d-flex ">
                            <img class="altoDeterminadoImg" src="img/w6.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w2.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w2.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w3.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w4.png" alt="">
                            </div>

                            <div class="divImagenesSecundarias d-flex ">
                            <img class="altoDeterminadoImg" src="img/w3.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w2.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w4.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w6.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w5.png" alt="">
                            </div>

                            <div class="divImagenesSecundarias d-flex ">
                            <img class="altoDeterminadoImg" src="img/w7.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w3.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w6.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w2.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w3.png" alt="">
                            </div>

                            <div class="divImagenesSecundarias d-flex ">
                            <img class="altoDeterminadoImg" src="img/w4.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w6.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w5.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w7.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w3.png" alt="">
                            </div>

                            <div class="divImagenesSecundarias d-flex ">
                            <img class="altoDeterminadoImg" src="img/w6.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w2.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w3.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w4.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w6.png" alt="">
                            </div>

                            <div class="divImagenesSecundarias d-flex ">
                            <img class="altoDeterminadoImg" src="img/w5.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w7.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w3.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w6.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w2.png" alt="">
                            </div>

                            <div class="divImagenesSecundarias d-flex ">
                            <img class="altoDeterminadoImg" src="img/w3.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w4.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w6.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w5.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w7.png" alt="">
                            <img class="altoDeterminadoImg" src="img/w3.png" alt="">
                            </div>

                        </div>
                        </div>
                        </div>
                        </div>

                       
<!-- Fin de seccion numero# 8  -->

<!-- seccion numero# 9  -->
<div class="section3" style="background-image: url(img/bannercouch.png)!important;">
    <h2 class="textsec3">
    Meet our Coaches   
    <h2>
</div>
<!-- couches Desktop -->

<div class="sectionblurdesktop">
    <div class="blur-container4">
       <div class="blur-item4">
       <img  class="imagesec9" src="img/couch-numero1.webp" width="246px" height="196px" alt="coach numero 1">
       <p class="textsec9">Brad Pennington</p>
       <button class="Butonblur9-1">View more</button>
       <button class="Butonblur9">Book now</button>
       </div>

       <div class="blur-item4">
       <img  class="imagesec9" src="img/coach2.webp" width="246px" height="196px" alt="coach numero 1">
       <p class="textsec9">Brian Mayer</p>
       <button class="Butonblur9-1">View more</button>
       <button class="Butonblur9">Book now</button>
       </div>

       <div class="blur-item4">
       <img  class="imagesec9" src="img/coach3.webp" width="246px" height="196px" alt="coach numero 1">
       <p class="textsec9">Chris Farrell</p>
       <button class="Butonblur9-1">View more</button>
       <button class="Butonblur9">Book now</button>
       </div>

       <div class="blur-item4">
       <img  class="imagesec9" src="img/coach4.webp" width="246px" height="196px" alt="coach numero 1">
       <p class="textsec9">Ed Yacopino</p>
       <button class="Butonblur9-1">View more</button>
       <button class="Butonblur9">Book now</button>
       </div>  

       <div class="blur-item4">
       <img  class="imagesec9" src="img/coach5.webp" width="246px" height="196px" alt="coach numero 1">
       <p class="textsec9">Tao Erel</p>
       <button class="Butonblur9-1">View more</button>
       <button class="Butonblur9">Book now</button>
       </div>  
   </div>
</div>
<!-- couches Desktop -->

<!-- couches Movil -->
<div class="sectionblurmovil resptablet">
<div class="nblurmov">
  <div class="imageblurn" style="background-image: url(img/Shape.png)!important; background-repeat: no-repeat;background-position: center;">
    <div class="imageblurn2" ></div>
  </div>
  <div class="contentblurn">
    <div class="textblurn">
      <h2>Brad Pennington</h2>
      <p>Brad Pennington is a former Major League Pitcher. He was the 12th pick by the Baltimore Orioles in the June 1989 draft. Brad made his MLB debut in 1993 and...</p>
    </div>
      <button class="buttonsnew1" >View more</button>
      <button class="buttonsnew2">Select coach</button>
    </div>
  </div>
 </div>
</div>

<div class="sectionblurmovil resptablet">
<div class="nblurmov">
  <div class="imageblurn" style="background-image: url(img/brianmayers.webp)!important; background-repeat: no-repeat;background-position: center;">
    <div class="imageblurn2" ></div>
  </div>
  <div class="contentblurn">
    <div class="textblurn">
      <h2>Brian Mayer</h2>
      <p>Brian Mayer is a catching and hitting coach who has years of experience with players at all levels. Brian played for the Lancaster Barnstormers and New ...</p>
    </div>
      <button class="buttonsnew1" >View more</button>
      <button class="buttonsnew2">Select coach</button>
    </div>
  </div>
 </div>
</div>

<div class="sectionblurmovil resptablet">
<div class="nblurmov">
  <div class="imageblurn" style="background-image: url(img/chrisfarrell.webp)!important; background-repeat: no-repeat;background-position: center;">
    <div class="imageblurn2" ></div>
  </div>
  <div class="contentblurn">
    <div class="textblurn">
      <h2>Chris Farrell</h2>
      <p>Chris Farrell is a catching and hitting coach who has years of experience with players at all levels. Brian played for the Lancaster Barnstormers and New ...</p>
    </div>
      <button class="buttonsnew1" >View more</button>
      <button class="buttonsnew2">Select coach</button>
    </div>
  </div>
 </div>
</div>
<div class="sectionblurmovil resptablet">
<div class="nblurmov">
  <div class="imageblurn" style="background-image: url(img/ed-yacopino.webp)!important; background-repeat: no-repeat;background-position: center;">
    <div class="imageblurn2" ></div>
  </div>
  <div class="contentblurn">
    <div class="textblurn">
      <h2>Ed Yacopino</h2>
      <p>Ed Yacopino is a catching and hitting coach who has years of experience with players at all levels. Brian played for the Lancaster Barnstormers and New ...</p>
    </div>
      <button class="buttonsnew1" >View more</button>
      <button class="buttonsnew2">Select coach</button>
    </div>
  </div>
 </div>
</div>
<div class="sectionblurmovil resptablet">
<div class="nblurmov">
  <div class="imageblurn" style="background-image: url(img/tao-erel.webp)!important; background-repeat: no-repeat;background-position: center;">
    <div class="imageblurn2" ></div>
  </div>
  <div class="contentblurn">
    <div class="textblurn">
      <h2>Tao Erel</h2>
      <p>Tao Erel is a catching and hitting coach who has years of experience with players at all levels. Brian played for the Lancaster Barnstormers and New ...</p>
    </div>
      <button class="buttonsnew1" >View more</button>
      <button class="buttonsnew2">Select coach</button>
    </div>
  </div>
 </div>
</div>

<!-- couches Movil -->

<div class="section3" style="background-image: url(img/bannerourlessons.png)!important;">
    <h2 class="textsec3">
    Our Lessons   
    <h2>
</div>

<!-- seccion numero# 10  -->

<!-- our lessons Desktop -->
    <div class="sectionblurdesktop marmodule" style="background-image: url(img/enmascarar-grupo-9.svg)!important;"   >
       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-training.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Private Pitching<br></p>
       <p class="textsec10">Cost:$100</p>
       <button class="Butonblur9">Book Now! </button>
       </div>

       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-drills.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Private Pitching Elite</p>
       <p class="textsec10">Cost: $125</p>
       <button class="Butonblur9">Book Now! </button>
       </div>

       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-coaching.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Bigger Faster Stronger</p>
       <p class="textsec10">Cost: $80</p>
       <button class="Butonblur9">Book Now! </button>
       </div>

       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-lessons.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Private Softball Hitting</p>
       <p class="textsec10">Cost: $65</p>
       <button class="Butonblur9">Book Now! </button>
       </div> 

       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-camps.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Pitching/Hitting Essentials</p>
       <p class="textsec10">Cost: $125</p>
       <button class="Butonblur9">Book Now! </button>
       </div> 

       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-clinics.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Private Fielding</p>
       <p class="textsec10">Cost: $100</p>
       <button class="Butonblur9">Book Now! </button>
       </div> 
</div>
<!-- our lessons Desktop -->

<!-- our lessons Movil -->
<div class="sectionblurmovil" style="background-image: url(img/enmascarar-grupo-9.svg)!important;"   >
       <div class="blur-container4 slider">
       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-training.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Private Pitching<br></p>
       <p class="textsec10">Cost:$100</p>
       <button class="Butonblur9">Book Now! </button>
       </div>

       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-drills.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Private Pitching Elite</p>
       <p class="textsec10">Cost: $125</p>
       <button class="Butonblur9">Book Now! </button>
       </div>

       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-coaching.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Bigger Faster Stronger</p>
       <p class="textsec10">Cost: $80</p>
       <button class="Butonblur9">Book Now! </button>
       </div>

       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-lessons.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Private Softball Hitting</p>
       <p class="textsec10">Cost: $65</p>
       <button class="Butonblur9">Book Now! </button>
       </div> 

       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-camps.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Pitching/Hitting Essentials</p>
       <p class="textsec10">Cost: $125</p>
       <button class="Butonblur9">Book Now! </button>
       </div> 

       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-clinics.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Private Fielding</p>
       <p class="textsec10">Cost: $100</p>
       <button class="Butonblur9">Book Now! </button>
       </div> 
</div>
</div>

<!-- our lessons Movil -->

<!-- our lessons talblet -->
<div class="sectionblurtablet slider" style="background-image: url(img/enmascarar-grupo-9.svg)!important;">
<div class="containertablet d-flex">
       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-training.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Private Pitching<br></p>
       <p class="textsec10">Cost:$100</p>
       <button class="Butonblur9">Book Now! </button>
       </div>

       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-drills.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Private Pitching Elite</p>
       <p class="textsec10">Cost: $125</p>
       <button class="Butonblur9">Book Now! </button>
       </div>

       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-coaching.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Bigger Faster Stronger</p>
       <p class="textsec10">Cost: $80</p>
       <button class="Butonblur9">Book Now! </button>
       </div>
</div>

<div class="containertablet d-flex">

      <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-lessons.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Private Softball Hitting</p>
       <p class="textsec10">Cost: $65</p>
       <button class="Butonblur9">Book Now! </button>
       </div> 

       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-camps.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Pitching/Hitting Essentials</p>
       <p class="textsec10">Cost: $125</p>
       <button class="Butonblur9">Book Now! </button>
       </div> 

       <div class="blur-item4">
       <img  class="imagesec9" src="img/baseball-clinics.webp" width="211px" height="235px" alt="coach numero 1">
       <p class="textsec9">Private Fielding</p>
       <p class="textsec10">Cost: $100</p>
       <button class="Butonblur9">Book Now! </button>
       </div>

</div>
</div>


<!-- Fin de seccion numero# 10  -->

<!-- Foother in desktop  -->
<div class="container-fluid" style="background-color: #42557c">
<div class="ms-5 me-5 sectionfooterdesktop">
<div class="d-flex justify-content-start" id="fooRow1">
<div id="fooImg">
<a href="/home"><img src="img/logo2-removebg-preview.png" height="100%" alt=""></a>
</div>
<div class="d-flex justify-content-start fs-6 fs-5" id="fooMenu">
<div id="fooMenu1">
<a href="/boockCoach" style="color: white">Book a Coach</a>
</div>
<div id="fooMenu1">
<a href="" style="color: white">Book a Camp</a>
</div>
<div id="fooMenu1">
<a href="/Lesson" style="color: white">Book a Lesson</a>
</div>
<div id="fooMenu2">
<a href="#" style="color: white">Camps &amp; Clinics</a>
</div>
</div>
<div id="fooBtnLogin">
<div class="d-flex justify-content-end">
<div class="btnRgisterDiv">
<a href="/register" class="btnRegisterA"> Get Started</a>
</div>
</div>
<div class="d-flex justify-content-end">
<div class="btnLoginDiv">
<a href="/login" class="btnLogin">Log in</a>
</div>
</div>
</div>
<div id="fooPlaystore">
<div class="btnPlayDiv">
<a href=""><img src="img/btnplayStoreNew.png" width="100%" alt=""></a>
</div>
<div class="btnAppDiv">
<a href=""><img src="img/btnAppStoreNew.png" width="100%" alt=""></a>
</div>
</div>
<div id="fooRedes">
<div class="follow">
Follow us on Socials
</div>
<div class="d-flex justify-content-center">
<div class="divContentInst">
<a href="https://www.instagram.com/bpb_training/" target="_blank"><img src="img/iconInst.png" width="100%" alt=""></a>
</div>
<div class="divContentInst">
<a href="https://www.facebook.com/profile.php?id=100081820278462" target="_blank"><img src="img/iconFac.png" width="100%" alt=""></a>
</div>
<div class="divContentInst">
<a href="https://www.youtube.com/channel/UCddgOzbIYcSmtJcYXp9n9Hw/featured" target="_blank"><img src="img/iconYou.png" width="100%" alt=""></a>
</div>
 <div class="divContentInst">
<a href="https://twitter.com/BPB_Training" target="_blank"><img src="img/IconTwi.png" width="100%" alt=""></a>
</div>
</div>
</div>
</div>
<div class="d-flex justify-content-center">
<div class="d-flex justify-content-center DivContenTlf">
<div class="contImgTelf">
<img src="img/icontlf.png" height="100%" alt="">
</div>
<div>
<a href="tel:+1 561 849 2600">+1 (561) 849-2600</a>
</div>
</div>
<div class="d-flex justify-content-center DivContenTlf">
<div class="contImgTelf">
<img src="img/iconGmail.png" height="100%" alt="">
</div>
<div>
<a href="mailto:info@bpbtraining.com">info@bpbtraining.com</a>
</div>
</div>
<div class="d-flex justify-content-center DivContenTlf">
<div class="contImgTelf">
<img src="img/iconMaps.png" height="100%" alt="">
</div>
<div>
<a href="https://www.google.com/maps/place/6970+N+State+Rd+7+%23107,+Coconut+Creek,+FL+33073,+EE.+UU./@26.3165795,-80.2032913,17z/data=!3m1!4b1!4m5!3m4!1s0x88d91b77a95f9cc5:0xd45cc2ae64413e0f!8m2!3d26.3165747!4d-80.2011026?hl=es" target="_blank">6970 N State Road 7, Unit 107, Coconut Creek, 33073</a>
</div>
</div>
</div>
<div class="d-flex justify-content-between contentCopyright">
<div class="Copyright">
Copyright BPB Training LLC All Rights Reserved
</div>
<div class="d-flex justify-content-center Copyright">
<div class="Terms"><a href="/home">Home</a></div>
<div>|</div>
<div class="Terms"><a href="/TermsofService"> Terms of Service</a></div>
<div>|</div>
<div class="Terms"><a href="">Cancelation Policy</a></div>
<div>|</div>
<div class="Terms"><a href="">Privacy Policy</a></div>
<div>|</div>
<div class="Terms"><a href="">About our Facility</a></div>
</div>
<div class="AppCord">
<img src="img/Appcords.png" width="100%" alt="">
</div>
</div>
</div>
<!-- Foother in Mobile  -->
<div class="sectionfootermovil container">
    <div class="row">
      <div class="col-12 col-md-4 mb-3 mb-md-0 socialiconm">
        <div class="d-flex justify-content-center justify-content-md-start">
         <img class="moduloicon" src="img/instagram.png" alt="twitter">
         <img class="moduloicon"src="img/facebook.svg" alt="facebook">
         <img class="moduloicon"src="img/youtube.svg" alt="youtube">
         <img class="moduloicon"src="img/whatssap.png" alt="whatssapp">
        </div>
      </div>
      <div class="col-12 col-md-4 mb-3 mb-md-0">
        <div class="d-flex justify-content-center">
          <img class="moduloicon" src="img/btnplaystore.png" alt="Logo">
        </div>
        <div class="d-flex justify-content-center ">
          <img  class="moduloicon" src="img/btnAppStore.png" alt="Logo">
        </div>
      </div>
      <div class="col-12 col-md-4 mb-3 mb-md-0">
        <div class="footermovil ">
          <div class="moduloicon"><img  src="img/icontlf.png" alt="twitter"></div>
          <div class="textfooter"> <span>(561) 849 - 2600</span></div>
          <div class="moduloicon"><img  src="img/iconGmail.png" alt="twitter"></div>
          <div class="textfooter"><span >info@bpbtraining.com</span></div>
          <div class="moduloicon"><img  src="img/iconMaps.png" alt="twitter"></div>
          <div class="textfooter"> <span >6970 N State Road 7, Unit 107, Coconut Creek, 33073</span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-12 col-md-6 mb-3 mb-md-0">
        <div class="d-flex justify-content-center">
          <img src="img/logofooter.png" alt="Imagen">
        </div>
      </div>
      <div class="col-12 col-md-6 mb-3 mb-md-0">
        <div class="d-flex justify-content-center justify-content-md-end">
          <p style="font: size 14px;" class="text-white">Copyright BPB Training LLC All Rights Reserved</p>
        </div>
      </div>

      <div class="row mt-3">
      <div class="col-12 col-md-6 mb-3 mb-md-0">
        <div class="d-flex justify-content-center">
          <img src="img/logoappcoder.png" alt="Imagen">
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Foother in desktop  -->
@endsection     
</body>

</html>