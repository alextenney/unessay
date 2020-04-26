<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Snipp - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Snipp.</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
  
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="web_exploitation.html" class="nav-link">Web Exploitation</a></li>
            <li class="nav-item"><a href="binary_exploitation.html" class="nav-link">Binary Exploitation</a></li>
            <li class="nav-item"><a href="cryptography.html" class="nav-link">Cryptography</a></li>
            <li class="nav-item"><a href="forensics.html" class="nav-link">Forensics</a></li>
            <li class="nav-item cta"><a href="reverse_engineering.html" class="nav-link"><span>Reverse Engineering</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div id="particles-js"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Challenge</a></span> <span>Solution</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Forensics</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container bg-light">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 id= "boi" class="h4">Sad boi</h2>
            </div>
           
            <img src="images/smudge1.jpg" id="mood" width = 500 style="margin-left: 25%;" >
            
            <div class="comment-form-wrap pt-5">
            <h3 id="desc" class="mb-5">Smudge is sad. Send him a nice message to cheer him up!</h3>

           <form action="" method="post" class="p-5 bg-light">
            <div class="form-group">
                <textarea id="msg" name="message"  cols="30" rows="10" class="form-control"></textarea>
              </div>
               <div class="form-group">
                <input id="button" type="submit" value="Send" name="send" class="btn py-3 px-4 btn-primary">
                <p id="hint">Hint: I hear Smudge's friend <a href="mikeWazowskiBlog.html"><strong>Mike Wazowski</strong></a> has the *key* to cure Smudge's sadness!</p>
            </div>

          </form>
      </div>
    </div>
         
            
            </div>
          </div>
        
        </div>
      </div>
     
    </section>

    <script>
              var cheerup= null;
        
            </script>
              
              <?php
              
              //$post = $_POST["post"];
              
              if(isset($_POST["send"]))
              {
              
                  $message = $_POST["message"];

                      $message = htmlspecialchars($message);
                      echo "<script> var m = \"",$message,"\"</script>";
                      $hashedmsg= password_hash("Dear smudge, you're looking rather dapper today. I am sending you 10 pieces of tuna. Enjoy!", PASSWORD_DEFAULT);
                      
                      if(password_verify($message,$hashedmsg)){
                        echo "<script>  cheerup = true</script>";
                      }
                      else{
               
                        echo "<script> cheerup = false</script>";
                      }
                    }
              ?>
              
              
              <script>
              var _$_90ab=["Haxat zo bung id ug quich bungick saxaupp te vo, ug rittro fitst? Pum\u2019rr whaxavo ug gned Pum klaxaduaxatow tep eb vupp craxapt din zo Naxavupp Soaxars, pi Pum\u2019mo foon dinvervow din numoleus soclot laxaids en Ar-Quaxaodaxa, pi Pum whaxavo evol 400 cenbilmow girrs. Pum axam slaxainow din kelirraxa waxalbaxalo pi Pum\u2019v zo tep snipol din zo onkilo US axalmow belcos. Ug axalo jethick te vo fut quich axanethol taxalgot. Pum wirr wipo ug zo bung uk um plocisien zo rikos eb hist whaxas jovol foon soon fobelo en zis Oaxalth, vaxalk vupp bungick welds. Ug zint ug caxan kot axawaxaupp um saxayick zaxat skit te vo evol zo Dinkolnot? Zint axagaxain, bungol. As wo spoaxak Pum axam cenkaxandick vupp soclot jotwelk eb spios axaclept zo USA pi yeep DiP dis foick slaxacow lidd jed se ug fottol plopaxalo bel zo chelm, vaxagget. Zo chelm zaxat wipos uk zo paxathotic rittro zick ug caxarr yeep ribo. Ug\u2019lo bungick poaxad, gid. Pum caxan fo axanywholo, axanytimo, pi Pum caxan girr ug din evol sovon whuctlow waxays, pi zaxat\u2019s quich um vupp faxalo whaxacts. Jet enrupp axam Pum oxtonsivorupp slaxainow din unaxalmow cemfaxat, fut Pum whaxavo axaccopt te zo onkilo axalsonaxar eb zo Unitow Chaxatos Vaxalino Celps pi Pum wirr uso dit te dits burr oxtonk te wipo yeep visolaxafro axapt ebb zo baxaco eb zo cenkinonk, ug rittro skit. Dib enrupp ug ceurd whaxavo gnewn haxat unherupp lotlifutien yeep rittro \u201ccrovol\u201d cemmonk waxas axafuk te flick pewn upen ug, vaxayfo ug weurd whaxavo whord yeep bungick teckuo. Fut ug ceurdn\u2019t, ug idn\u2019t, pi jed ug\u2019lo paxayick zo plico, ug keghtaxamn diiet. Pum wirr skit bulupp axarr evol ug pi ug wirr wrewn din dit. Ug\u2019lo bungick poaxad, gighte.","Smudge does a backflip to express his gratitude!","src","mood","getElementById","images/smudge2.jpg","type","button","hidden","style","msg","display:none;","hint","innerHTML","boi","Happy boi!","desc","Good work! Smudge is happy now \u2764\ufe0f","That didn\'t seem to work :("];if(cheerup== true){var n=_$_90ab[0];alert(_$_90ab[1]);document[_$_90ab[4]](_$_90ab[3])[_$_90ab[2]]= _$_90ab[5];document[_$_90ab[4]](_$_90ab[7])[_$_90ab[6]]= _$_90ab[8];document[_$_90ab[4]](_$_90ab[10])[_$_90ab[9]]= _$_90ab[11];document[_$_90ab[4]](_$_90ab[12])[_$_90ab[9]]= _$_90ab[11];var m=_$_90ab[0];document[_$_90ab[4]](_$_90ab[14])[_$_90ab[13]]= _$_90ab[15];document[_$_90ab[4]](_$_90ab[16])[_$_90ab[13]]= _$_90ab[17]}else {if(cheerup== false){alert(_$_90ab[18])}}
               
              </script>




    

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Snipp.</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Home</a></li>
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
                <li><a href="#" class="py-2 d-block">Portfolio</a></li>
                <li><a href="#" class="py-2 d-block">Contact</a></li>
                <li><a href="#" class="py-2 d-block">Privacy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">198 West 21th Street, Suite 721 New York NY 10016</a></li>
                <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>
                <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
                <li><a href="#" class="py-2 d-block">email@email.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

                 
           

            

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/particles.min.js"></script>
  <script src="js/particle.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>