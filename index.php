<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Barbero</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="barber, barbershop">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" href="favicon.ico?v=2" />


    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.css'>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
   
    <!-- Modernizr -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

    <!-- Google reCAPTCHA>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
    function onSubmit(token) {
        document.getElementById("contact-form").submit();
    }
    </script --> 

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php include 'partials/navigation.php';?>

    <header>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <svg class="hero-logo">
                        <use xlink:href="assets/img/svg/symbols.svg#hero_logo"></use>
                    </svg>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img"></div>
                </div>
            </div>
        </div>

    </header>


    <!-- About Us -->
    <section id="about" class="about_us_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_content">
                        <h5>About Us</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="about_img"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <div class="services_container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h5>Services</h5>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-lg-4 services-content">
                        <h6>Haircut Styles</h6>
                        <img src="assets/img/haircut.jpg">
                </div>
                <div class="col-lg-4 services-content">
                        <h6>Beard Triming</h6>
                        <img src="assets/img/beard-trimming.jpg">
                </div>
                <div class="col-lg-4 services-content">
                    <h6>Hot Shave</h6>
                    <img class="services-img" src="assets/img/hot-shaving.jpg">
                </div>
            </div>
            
        </div>
    </div>

    <!-- Prices -->
    <div id="prices" class="prices_container">
        <div class="container">
            <h5 class="text-center">Our Prices<hr></h5>
            <div class="row justify-content-center">
              <div class="col-lg-6">
                  <table class="table table-hover borderless">
                      <tbody>
                          <tr>
                            <td  class="price_text">Lorem ipsum dolor sit amet</td>
                            <td class="price_number">$ 14.00</td>
                          </tr>
                          <tr>
                            <td  class="price_text">Lorem ipsum dolor sit amet</td>
                            <td class="price_number">$ 14.00</td>
                          </tr>
                          <tr>
                            <td  class="price_text">Lorem ipsum dolor sit amet</td>
                            <td class="price_number">$ 14.00</td>
                          </tr>
                          <tr>
                            <td  class="price_text">Lorem ipsum dolor sit amet</td>
                            <td class="price_number">$ 14.00</td>
                          </tr>
                          <tr>
                            <td  class="price_text">Lorem ipsum dolor sit amet</td>
                            <td class="price_number">$ 14.00</td>
                          </tr>
                    </tbody>
                  </table>
            </div>        
        </div>
    </div>

    <!-- CONTACT FORM -->
    <?php include 'partials/form.php';?>
    
    <!-- MAP -->
    <?php include 'partials/map.php';?>

    <!-- Social Icons -->
    <div class="soc_icons_container">
        <div class="container">
            <!-- Social -->
            <div class="row">
                <div class="col-lg-12">
                    <ul>
                        <li class="fa fa-facebook-official"></li>
                        <li class="fa fa-google-plus"></li>
                        <li class="fa fa-linkedin-square"></li>
                    </ul>

                </div>
            </div>
            <div class="line"></div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <span>Barbero © <?php echo date(" Y");?> All Rights Reserved by George Fodor</span>
    </footer>


<!-- Bootstrap 4 scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 <!-- HandlebarsJS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.11/handlebars.min.js"></script>

 <!-- Swiper JS -->
 <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js'></script>
 
 <!-- Change nav background on scroll -->
 <script src='assets/js/nav-bg.js'></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        mousewheelControl: true,
        coverflow: {
            rotate: 20,
            stretch: -20,
            depth: 250,
            modifier: 1,
            slideShadows: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>

<script>
    $(document).ready(function () {
        $(".carousel_modal").click(function () {
            $(this).fadeOut("slow");
        });
    });
</script>

<!-- Google Maps API -->
<script src='assets/js/map.js'></script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWzk0M2zSGISzTxuP0Wv6TQ99Ab_0PIBM&callback=initMap"
  type="text/javascript"></script>


<!-- Modal -->
<div id="general_care" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">General Care</h4>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
    </div>
</div>

<div id="cosmetic_dentistry" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cosmetic Dentistry</h4>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
    </div>
</div>

<div id="rest_dentistry" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Restorative Dentistry</h4>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
    </div>
</div>

</body>

</html>