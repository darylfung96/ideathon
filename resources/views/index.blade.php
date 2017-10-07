<!doctype html>
<html lang="en-US">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ideathon | Hackathon Idae Generator </title>
    <meta name="description" content="Arisn - Multi Purpose HTML5 Template">
    <meta name="author" content="premonday.com">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i|Poppins:300,400,500,600" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href={{asset("assets/favicon.ico")}} type="image/x-icon" />
    <link rel="shortcut icon" href={{asset("assets/favicon.ico")}} type="image/x-icon" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href={{asset("assets/vendor/reset.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/bootstrap/bootstrap.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/ion-icons/ionicons.min.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/owl-slider/owl.carousel.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/slideshow/slideshow.css")}}>
    <link rel="stylesheet" href={{asset("assets/vendor/lightbox/lity.min.css")}}>
    <!-- Theme CSS -->
    <link id="theme" rel="stylesheet" href={{asset("assets/css/theme.css")}}>
    <script src={{asset("assets/vendor/modernizr.js")}}></script>

    <script>
        function checkInp()
        {
            var x=document.forms["my-form"]["age"].value;
            if (isNaN(x))
            {
                alert("Your age must be a number buddy >:(");
                return false;
            }
        }
    </script>
</head>

<body class="indexing">

<!-- Scroll up -->
<div class="scrollup">
    <i class="ion-ios-arrow-up"></i>
</div>

<!-- Main Container -->
<div class="web-in">

    <!-- Start Project Modal -->
    <div id="modal-bg">
        <img src={{asset("assets/img/exit.svg")}} class="exit" alt="">
        <div class="holder">
            <div class="placer">
                <div id="modal" class="center">
                    <div class="title">
                        <h5>Download Arisn</h5>
                        <span class="promo-heading">You've made the right choice</span>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 w-section"><i class="ion-ios-star-outline"></i>
                            <h3>A download link will appear here soon.</h3>
                            <p>Thank you for your patience.
                            </p>
                        </div>
                    </div>
                    <hr>
                    <a href="#" class="btn"><span>Place for link</span></a>
                </div>
            </div>
        </div>
    </div>




    <!-- Header -->
    <header id="sp1" class="center dark1" style="height:570px; background-image:url(img/fp-img.png)">
        <div class="header-in">
            <div class="caption">
                <h5>Welcome to Ideathon</h5>
                <h1>Hackathon Idea Generator</h1>
                <h6></h6>
                <p>Try it out <i class="ion-happy-outline"></i></p>
            </div>
            <img class="arrow" src={{asset("assets/img/arrow.svg")}} alt="">
        </div>
    </header>

    <section class="dark1">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-md-6 col-md-offset-3 title">
                    <h2>Idea Categories</h2>
                    <h4>Ideas generated will fall into one of these 4 categories.</h4>
                </div>
            </div>

            <div class="row m-space">
                <div class="col-sm-3 col-xs-6 right mh">
                    <div class="aligner">
                        <div class="holder">
<<<<<<< HEAD
<<<<<<< HEAD
                            <i class="ion-happy"></i>
=======
                            <i class="ion-android-happy"></i>
>>>>>>> master
=======
                            <i class="ion-happy"></i>
>>>>>>> daryl
                            <h5>Normal</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p>
                            <hr>
<<<<<<< HEAD
<<<<<<< HEAD
                            <i class="ion-sad"></i>
=======
                            <i class="ion-android-sad"></i>
>>>>>>> master
=======
                            <i class="ion-sad"></i>

>>>>>>> daryl
                            <h5>Kinda Normal</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 center phones mh hidden-xs">
                    <img class="behind" style="width: 80%" src={{asset("assets/img/trump.png")}} alt="">
                </div>
                <div class="col-sm-3 col-xs-6 mh">
                    <div class="aligner">
                        <div class="holder">
                            <i class="ion-alert"></i>
                            <h5>Crazy</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p>
                            <hr>
                            <i class="ion-alert-circled"></i>
                            <h5>Batshit Crazy</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="c_contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 title">
                    <h2>Tell us a little bit about yourself</h2>
                    <h4>We want to get to know you in order to give you the best possible idea <i class="ion-happy-outline"></i></h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form class="my-form" name= "my-form" action="/submit" onsubmit="checkInp()" method="post">
                        {{ csrf_field() }}
                        <div class="input-field col-sm-12">
                            <div class="form-group">
                                <input id="form-name" name="name" type="text" placeholder="Your Name *" required="required"
                                       data-error="Name is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="input-field col-sm-6">
                            <h4>What's your Gender?</h4>
                            <div class="form-group">
                                <input name="gender" type="radio" value="0" required><span class="radio-buttons">Male</span>
                                <input name="gender" type="radio" value="1"><span class="radio-buttons">Female</span>
                                <input name="gender" type="radio" value="2"><span class="radio-buttons">Other</span>
                            </div>
                        </div>

                        <div class="input-field col-sm-6">
                            <h4>Are you hungry?</h4>
                            <div class="form-group">
                                <input name="hungry" type="radio" value="0" required><span class="radio-buttons">Hell Yeah</span>
                                <input name="hungry" type="radio" value="1"><span class="radio-buttons">Not Really</span>
                            </div>
                        </div>

                        <div class="input-field col-sm-6">
                            <h4>Got any kids?</h4>
                            <div class="form-group">
                                <input name="kids" type="radio" value="0" required><span class="radio-buttons">Yeah <i class="ion-sad-outline"></i></span>
                                <input name="kids" type="radio" value="1" ><span class="radio-buttons">Nope <i class="ion-happy-outline"></i></span>
<<<<<<< HEAD
=======
                            </div>
                        </div>

                        <div class="input-field col-sm-6">
                            <h4>Be Honest, Are you stupid?</h4>
                            <div class="form-group">
                                <input name="stupid" type="radio" value="0" required><span class="radio-buttons">Yeah <i class="ion-sad-outline"></i></span>
                                <input name="stupid" type="radio" value="1" ><span class="radio-buttons">Nope <i class="ion-happy-outline"></i></span>
                            </div>

                        </div>


                        <div class="input-field col-sm-6">
                            <h4>How weird are you?</h4>
                            <div class="form-group">
                                <input name="weird" type="radio" value="0" required><span class="radio-buttons">Not</span>
                                <input name="weird" type="radio" value="1" ><span class="radio-buttons">Kinda</span>
                                <input name="weird" type="radio" value="2" ><span class="radio-buttons">Weird Af</span>
>>>>>>> daryl
                            </div>
                        </div>

                        <div class="input-field col-sm-6">
<<<<<<< HEAD
                            <h4>Be Honest, Are you stupid?</h4>
                            <div class="form-group">
                                <input name="stupid" type="radio" value="0" required><span class="radio-buttons">Yeah <i class="ion-sad-outline"></i></span>
                                <input name="stupid" type="radio" value="1" ><span class="radio-buttons">Nope <i class="ion-happy-outline"></i></span>
                            </div>

                        </div>


                        <div class="input-field col-sm-6">
                            <h4>How weird are you?</h4>
                            <div class="form-group">
                                <input name="weird" type="radio" value="0" required><span class="radio-buttons">Not</span>
                                <input name="weird" type="radio" value="1" ><span class="radio-buttons">Kinda</span>
                                <input name="weird" type="radio" value="2" ><span class="radio-buttons">Weird Af</span>
                            </div>
                        </div>

                        <div class="input-field col-sm-6">
=======
>>>>>>> daryl
                            <h4>How old are you?</h4>
                            <div class="form-group">
                                <input name="age" type="text" placeholder="Bet you're old af" required="required">
                            </div>
                        </div>


                        <div class="col-sm-12 center">
                            <input type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


</div>
<!-- end of web-in -->

<script src={{asset("assets/vendor/jquery-2.2.1.min.js")}}></script>
<script src={{asset("assets/vendor/matchHeight-min.js")}}></script>
<script src={{asset("assets/vendor/contact/validator.js")}}></script>
<script src={{asset("assets/vendor/contact/contact.js")}}></script>
<script src={{asset("assets/vendor/pace.min.js")}}></script>
<script src={{asset("assets/vendor/headroom/headroom.min.js")}}></script>
<script src={{asset("assets/vendor/owl-slider/owl.carousel.min.js")}}></script>
<script src={{asset("assets/vendor/slideshow/anime.min.js")}}></script>
<script src={{asset("assets/vendor/slideshow/imagesloaded.pkgd.min.js")}}></script>
<script src={{asset("assets/vendor/slideshow/main.js")}}></script>
<script src={{asset("assets/vendor/parallax/materialize.min.js")}}></script>
<script src={{asset("assets/vendor/lightbox/lity.min.js")}}></script>
<script src={{asset("assets/vendor/tabs/jquery.tabslet.min.js")}}></script>
<script src={{asset("assets/vendor/masonry.pkgd.min.js")}}></script>
<script src={{asset("assets/js/main.min.js")}}></script>
</body>

</html>
