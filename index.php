<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v3.9.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<title>Brain.wav</title>
<body>


<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background" id="header1-0" style="background-image: url(assets/images/brain-2000x1125-95.jpg);">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 0, 0);"></div>

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">
                    <div id="start">
                    <h1 class="mbr-section-title display-1">Brain.wav</h1>
                    <p class="mbr-section-lead lead">Generate music based on your brainwaves</p>
                    <div class="mbr-section-btn"> <a class="btn btn-lg btn-white btn-white-outline" onClick="recordMenu()">Start now</a></div>
                </div>

                <div id="record">
                    <h1 class="mbr-section-title display-1">Start by connecting the Muse headband</h1>
                    <p class="mbr-section-lead lead">Once connected, click the button to record the data</p>
                    <div class="mbr-section-btn"> <a class="btn btn-lg btn-white btn-white-outline" onClick="playMusic()">Generate</a></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>






  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/viewportChecker/jquery.viewportchecker.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script type="text/javascript">
    $("#record").hide();

    function recordMenu(){
  
      $("#start").hide();
  
    $("#record").show();
    }


    function playMusic(){
      window.location.href = 'play.php';
    }

    </script>
  
  <input name="animation" type="hidden">
  
  </body>
</html>