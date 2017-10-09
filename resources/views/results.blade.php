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
                <h5>Looks Like you are {{session()->get('value')}}
                    <?php

                    switch(session()->get('value')) {
                        case 'Normal':
                            echo "<i class='ion-happy'></i>";
                            break;
                        case 'Kinda Normal':
                            echo "<i class='ion-sad'></i>";
                            break;
                        case 'Crazy':
                            echo "<i class='ion-alert'></i>";
                            break;
                        case 'Batshit Crazy':
                            echo "<i class='ion-alert-circled'></i>";
                            break;
                        default:
                            echo "<i class='ion-happy'></i>";
                    }
                    ?>
                </h5>
                <?php

                switch(session()->get('value')) {
                    case 'Normal':
                        echo "<img style='width:30%' src=".asset('assets/img/normal.png')." />";
                        break;
                    case 'Kinda Normal':
                        echo "<img style='width:30%' src=".asset('assets/img/kinda-normal.png')." />";
                        break;
                    case 'Crazy':
                        echo "<img style='width:30%' src=".asset('assets/img/crazy.png')." />";
                        break;
                    case 'Batshit Crazy':
                        echo "<img style='width:30%' src=".asset('assets/img/batshit-crazy.png')." />";
                        break;
                    default:
                        echo "<img style='width:30%' src=".asset('assets/img/batshit-crazy.png')." />";
                }
                ?>
                <h5>Now that we know you, we can give you an idea that is just right for you.</h5>
                <h1> - IDEA_GOES_HERE - </h1>
            </div>
        </div>
    </header>

    <section class="dark1">

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
