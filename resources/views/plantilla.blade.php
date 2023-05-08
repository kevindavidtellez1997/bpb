<!DOCTYPE html>
<html lang="en">

<head>      
      <meta charset="utf-8">
        <title>BPB Training</title> 
        <link rel="shortcut icon" href="img/logo2.jpeg" />     
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">    
        <link rel="stylesheet" href="css/footer3.css">
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/menuUser.css">
        <link rel="stylesheet" href="css/navarNavegacion.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        
       
        
                   
</head>
{{-- style="background-color: #e7e3e3;" --}}
<body  >

  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #42557d;height:78px; position: sticky;top: 0;z-index:3">
  <div class=" px-5">
      <img src="img/logoPrincipal2.png" width="95px">                             
  </div>
  <button style="margin-right: 30px;background-color: rgb(202, 202, 202)" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ></span>
  </button>
  <div class="collapse navbar-collapse collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav ms-auto me-lg-5" style="background-color: #42557d;z-index:1;position:relative">

          <li  style="margin-right:10px;margin-top:7px">
              <a class="nav-link ms-2 " style="color:white" href="/home">
                    Home 
              </a>
              
          </li>
          <li  style="margin-right:10px;margin-top:7px;">
              <a class="nav-link ms-2" style="color:white" href="/boockCoach">
                  Book a Coach 
              </a>
              
          </li>
          <li  style="margin-right:10px;line-height: 10px;margin-top:14px">
              <a class="nav-link ms-2" style="color:white" href="/Lesson">
                  Book a Lesson<br/> 
                  {{-- <label style="font-size:10px; font-weight:bold;color:#ec585e;margin-top:-0px">Coming Soon</label> --}}
              
              </a>
              
          </li>
          <li  style="margin-right:10px;line-height:10px;margin-top:14px">
              <a class="nav-link ms-2" style="color:white" href="/campsClinics">
                Camps & Clinics <br/>
                {{-- <label style="font-size:10px; font-weight:bold;color:#ec585e;margin-bottom:0px;">ComingSoon</label> --}}
              </a>
          </li>
          
          <li id="nameUser">
           
          
          </li> 
         
       
          <li  style="margin-right:10px;margin-top: 7px" id="btn-login">
                          
            </li>
            <li  style="margin-right:10px;" id="btn-Register">
                                                    
          </li> 
        
        
        
          
      </ul>  
  </div>
</nav>




                     
<div>
    @yield('seccionHeader')
</div>

{{-- footer Responsive  asta 960px --}}

<footer id="footerDef" style="margin-top: 180px;display:none">
  <div class="container-fluid" style="background-color: #42557c">
      <div class="ms-5 me-5" >
        <div class="d-flex justify-content-start" id="fooRow1">
          <div id="fooImg">
            <a href="/home"><img src="/img/logo4.png" height="100%" alt="" ></a>
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
              <a href="#" style="color: white">Camps & Clinics</a> 
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
              <a href=""><img src="/img/btnplayStoreNew.png" width="100%" alt=""></a>              
            </div>
            <div class="btnAppDiv">
              <a href=""><img src="/img/btnAppStoreNew.png" width="100%" alt=""></a>
            </div>
          </div>
          <div id="fooRedes">
            <div class="follow" >
              Follow us on Socials
            </div>
            <div class="d-flex justify-content-center">
              <div class="divContentInst">
                <a href="https://www.instagram.com/bpb_training/" target="_blank"><img src="/img/iconInst.png" width="100%" alt=""></a>
              </div>
              <div class="divContentInst">
                <a href="https://www.facebook.com/profile.php?id=100081820278462" target="_blank"><img src="/img/iconFac.png" width="100%" alt=""></a>
              </div>
              <div class="divContentInst">
                <a href="https://www.youtube.com/channel/UCddgOzbIYcSmtJcYXp9n9Hw/featured" target="_blank"><img src="/img/iconYou.png" width="100%" alt=""></a>
              </div>
              <div class="divContentInst">
                <a href="https://twitter.com/BPB_Training" target="_blank"><img src="/img/IconTwi.png" width="100%" alt=""></a>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <div class="d-flex justify-content-center DivContenTlf">              
            <div class="contImgTelf">
              <img src="/img/icontlf.png" height="100%" alt="">
            </div>
            <div>
              <a href="tel:+1 561 849 2600">+1 (561) 849-2600</a>
            </div>
          </div>
          <div class="d-flex justify-content-center DivContenTlf">              
            <div class="contImgTelf">
              <img src="/img/iconGmail.png" height="100%" alt="">
            </div>
            <div>
              <a href="mailto:info@bpbtraining.com">info@bpbtraining.com</a>
            </div>
          </div> 
          <div class="d-flex justify-content-center DivContenTlf">              
            <div class="contImgTelf">
              <img src="/img/iconMaps.png" height="100%" alt="">
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
            <img src="/img/Appcords.png" width="100%" alt="">
          </div>
        </div>
      </div> 
  </div>
</footer>
 
{{-- footer responsive asta 300px --}}
<footer id="footerDefRes" style="margin-top: 180px;display:none">
  <div class="ContenedorPrincipal">
    <div class="container-fluid">
      <div class="d-flex justify-content-center">
        <div class="ContmedidorDeAncho">
          <div class="d-flex justify-content-center" >
            <div class="ContentBtnRegistroRegis" id="btnGetStarteFot"> 
              <a href="/register"><button class="btnRegisterRes">Get Started</button></a>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="ContenBtnLoginRegis" id="btnLoginFot">
              <a href="/login"><button class="btnLoginRes">login</button></a> 
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="tituloFollowRes">
              Follow us on Socials
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="ContenImg ms-1">
              <a href="https://www.instagram.com/bpb_training/" target="_blank"><img src="/img/iconInst.png" width="100%" alt=""></a>
            </div>
            <div class="ContenImg">
              <a href="https://www.facebook.com/profile.php?id=100081820278462" target="_blank"><img src="/img/iconFac.png" width="100%" alt=""></a>
            </div>
            <div class="ContenImg">
              <a href="https://www.youtube.com/channel/UCddgOzbIYcSmtJcYXp9n9Hw/featured" target="_blank"><img src="/img/iconYou.png" width="100%" alt=""></a>
            </div>
            <div class="ContenImg">
              <a href="https://twitter.com/BPB_Training" target="_blank"><img src="/img/IconTwi.png" width="100%" alt=""></a>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="conterImgPlaystore">
              <a href=""><img src="/img/btnPlayStoreNewRes.png" width="100%" alt=""></a>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="conterImgAppStore">
              <a href=""><img src="/img/btnAppStoreNewRes.png" width="100%" alt=""></a>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="lineaBlancaSeparacion">
              
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="contenImginfoUbicar">
              <img src="/img/icontlf.png" width="100%" alt="">
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="contenTlfGmailUbica">
              <a href="tel:+1 561 849 2600">+1 (561) 849-2600</a>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="contenImginfoUbicar">
              <img src="/img/iconGmail.png" width="100%" alt="">
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="contenTlfGmailUbica">
              <a href="mailto:info@bpbtraining.com">info@bpbtraining.com</a>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="contenImginfoUbicar">
              <img src="/img/iconMaps.png" width="100%" alt="">
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="contenTlfGmailUbica">
              <a  href="https://www.google.com/maps/place/6970+N+State+Rd+7+%23107,+Coconut+Creek,+FL+33073,+EE.+UU./@26.3165795,-80.2032913,17z/data=!3m1!4b1!4m5!3m4!1s0x88d91b77a95f9cc5:0xd45cc2ae64413e0f!8m2!3d26.3165747!4d-80.2011026?hl=es" target="_blank">6970 N State Road 7, Unit 107, Coconut Creek, 33073</a>        
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="contenImgLogo">
              <a href="/home"><img src="/img/logo4.png" width="100%" alt="" ></a>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="Terms"><a href="/TermsofService" style="font-size: 13px"> Terms of Service</a></div>
          </div>
          <div class="d-flex justify-content-center">
            <div class="contenImgAppCoders">
              <img src="/img/Appcords.png" width="100%" alt="">
            </div>
          </div>
        </div>      
      </div>
    </div>
  </div>
</footer> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/js/verificarConecxion/seguridadId.js"></script>
<script src="/js/nabvar/navbarMovil.js"></script>
<script src="/js/nabvar/infoLog.js"></script>
<script src="/js/nabvar/footerRespon.js"></script>
</body>


</html>