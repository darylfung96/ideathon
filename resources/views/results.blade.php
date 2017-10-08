<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grayscale - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href={{asset("results/vendor/bootstrap/css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href={{asset("results/vendor/font-awesome/css/font-awesome.min.css")}} rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i|Poppins:300,400,500,600" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href={{asset("results/css/grayscale.min.css")}} rel="stylesheet">

  </head>

  <body id="page-top">


    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading" style="font-size: 60px">{{$value}}</h1>
              <p class="intro-text">That's what you are termed as.</br>Check below to see what app is recommended for you.</p>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section text-center" style="background-color: #FFFFFF">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 style="color: #111">{{$value}}</h1>
            <p style="color: #555">dferj asdfje afjowi nerlj wenvox wetnawl sdfiw nwelkn weroaijdfj welnf. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
          </div>
        </div>
      </div>
    </section>



    <!-- Bootstrap core JavaScript -->
    <script src={{asset("results/vendor/jquery/jquery.min.js")}}></script>
    <script src={{asset("results/vendor/popper/popper.min.js")}}></script>
    <script src={{asset("results/vendor/bootstrap/js/bootstrap.min.js")}}></script>

    <!-- Plugin JavaScript -->
    <script src={{asset("results/vendor/jquery-easing/jquery.easing.min.js")}} ></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src={{asset("results/js/grayscale.min.js")}}></script>

  </body>

</html>
