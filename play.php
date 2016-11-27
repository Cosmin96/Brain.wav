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
                    <img id="img1" src="http://i.imgur.com/jtkTPvb.gif">
                    <img id="img2" src="http://bestanimations.com/Science/Gears/loadinggears/loading-gears-animation-3.gif">
                    <div class="mbr-section-btn"> <a class="btn btn-lg btn-white btn-white-outline" onClick="go_back()">Go back</a></div>
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

      $( document ).ready(function() {
        $('#img2').hide();
        var sec = Math.floor((Math.random() * 4) + 7);
        setTimeout(function(){
            
      var type = Math.floor((Math.random() * 2) + 1);
      var str = 'music/brain/';

      if(type == 1)
        str += '100_';

      var instrument1, instrument2, instrument3, instrument4, instrument5;
      var number;

      //Bass picker
      number = Math.floor((Math.random() * 4) + 1);
      instrument1 = str + 'bass_' + number + '.wav';

      //Drum picker
      number = Math.floor((Math.random() * 4) + 1);
      instrument2 = str + 'drum_' + number + '.wav';
      
      //Piano picker
      number = Math.floor((Math.random() * 4) + 1);
      instrument3 = str + 'piano_' + number + '.wav';

      //Strings picker
      number = Math.floor((Math.random() * 4) + 1);
      instrument4 = str + 'strings_' + number + '.wav';

      //Synth picker
      number = Math.floor((Math.random() * 4) + 1);
      instrument5 = str + 'synth_' + number + '.wav';

      console.log(instrument1);
      console.log(instrument2);
      console.log(instrument3);
      console.log(instrument4);
      console.log(instrument5);

      var sound1 = new Audio(instrument1);
      var sound2 = new Audio(instrument2);
      var sound3 = new Audio(instrument3);
      var sound4 = new Audio(instrument4);
      var sound5 = new Audio(instrument5);

      //Change to playing gif
      $('#img1').hide();
      $('#img2').fadeIn();
      sound1.play();
      sound2.play();
      sound3.play();
      sound4.play();
      sound5.play();


        }, sec * 1000);
      });

      function go_back(){
        window.location.href = 'index.php';
      }

</script>