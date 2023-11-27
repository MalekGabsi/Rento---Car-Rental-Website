<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>rento</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <style>
      .carousel-item {
         height: 700px;
         /* Ajustez la hauteur selon vos besoins */
      }

      .carousel-image {
         width: 100%;
         height: 100%;
         object-fit: cover;
      }

      .carousel-control-prev,
      .carousel-control-next {
         width: 5%;
         opacity: 1;
         z-index: 5;
      }

      .carousel-control-prev-icon,
      .carousel-control-next-icon {
         background-color: rgb(255, 255, 255);
         border-radius: 50%;
      }
   </style>

   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   <style>
      .carousel-item {
         height: 700px;
         /* Adjust the height as per your requirement */

      }

      .carousel-image {
         height: 700px;
         width: 2000px;
         /* Adjust the height as per your requirement */

      }

      .carousel-control-prev,
      .carousel-control-next {
         width: 40px;
         /* Largeur des flèches */
         height: 40px;
         /* Hauteur des flèches */
         background-color: transparent;
         /* Fond transparent */
         border: none;
         /* Supprimer les bordures */
         font-size: 30px;
         /* Taille de police des flèches */
         color: black;
         /* Couleur des flèches */
         position: absolute;
         /* Position absolue */
         top: 50%;
         /* Déplacer vers le haut de 50% */
         transform: translateY(-50%);
         /* Déplacer vers le haut de 50% par rapport à sa propre hauteur */

      }
   </style>

</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04"
                        aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto">
                           <li class="nav-item">
                              <a class="nav-link" href="index.html">Home </a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#caro">Discover</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#about">About Us</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#footer">Contact Us</a>
                           </li>

                        </ul>
                        <div class="sign_btn"><a href="loginRegister.php">Sign In</a></div>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header inner -->
   <!-- end header -->
   <!-- banner -->
   <section class="banner_main">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="images\banner.jpg" alt="First Slide Image" class="carousel-image">
               <div class="carousel-caption">
                  <div class="container">
                     <div class="row d_flex">
                        <div class="col-md-12">
                           <div class="text-bg">
                              <h1>Find the best car here for rent</h1>
                              <strong>Free Multipurpose Responsive</strong>
                              <span>Landing Page 2019</span>
                              <p>
                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                 has been the industry's standard dummy text ever since theLorem Ipsum is simply dummy
                                 text of the printing

                                 <head></head>
                              </p>
                              <a href="#choose">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img src="images/dRWnYS.jpg" alt="Second Slide Image" class="carousel-image">
               <div class="carousel-caption">
                  <div class="container">
                     <div class="row d_flex">
                        <div class="col-md-12">
                           <div class="text-bg">
                              <h1>Find the best car here for rent</h1>
                              <strong>Free Multipurpose Responsive</strong>
                              <span>Landing Page 2019</span>
                              <p>
                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                 has been the industry's standard dummy text ever since theLorem Ipsum is simply dummy
                                 text of the printing

                                 <head></head>
                              </p>
                              <a href="#choose">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <img src="images/car.jpg" alt="Third Slide Image" class="carousel-image">

               <div class="carousel-caption">
                  <div class="container">
                     <div class="row d_flex">
                        <div class="col-md-12">
                           <div class="text-bg">
                              <h1>Find the best car here for rent</h1>
                              <strong>Free Multipurpose Responsive</strong>
                              <span>Landing Page 2019</span>
                              <p>
                                 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                 has been the industry's standard dummy text ever since theLorem Ipsum is simply dummy
                                 text of the printing

                                 <head></head>
                              </p>
                              <a href="#choose">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span></a>


   </section>



   <!-- end banner -->
   <!-- car -->
   <section id="caro">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>VARIETY OF CARS </h2>
                  <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                     labore et dolore magna</span>
               </div>
            </div>
         </div>

   </section>

   <div class="cars">

      <div class="images">
         <ul>
            <li class="car">
               <div>
                  <img src="images/car1.jpg" alt="">
               </div>
               <span>LAMBORGHINI</span>
               <span class="prix">300.000$</span>
               <a href="#">RENT NOW</a>
            </li>
            <li class="car">
               <div>
                  <img src="images/car2.jpg" alt="">
               </div>
               <span>LAMBORGHINI</span>
               <span class="prix">300.000$</span>
               <a href="#">RENT NOW</a>
            </li>
            <li class="car">
               <div>
                  <img src="images/car3.jpg" alt="">
               </div>
               <span>LAMBORGHINI</span>
               <span class="prix">300.000$</span>
               <a href="#">RENT NOW</a>
            </li>
            <li class="car">
               <div>
                  <img src="images/car4.jpg" alt="">
               </div>
               <span>LAMBORGHINI</span>
               <span class="prix">300.000$</span>
               <a href="#">RENT NOW</a>
            </li>
            <li class="car">
               <div>
                  <img src="images/car5.jpg" alt="">
               </div>
               <span>LAMBORGHINI</span>
               <span class="prix">300.000$</span>
               <a href="#">RENT NOW</a>
            </li>
            <li class="car">
               <div>
                  <img src="images/car6.jpg" alt="">
               </div>
               <span>LAMBORGHINI</span>
               <span class="prix">300.000$</span>
               <a href="#">RENT NOW</a>
            </li>
         </ul>
      </div>
   </div>
   <!-- end car -->
   <!-- bestCar -->
   <section id="contact">
      <div class="titlepage">
         <h2>About Us</h2>
      </div>
      <div class="localisation_contact_div">
         <div class="localisation">
            <h3>Our Address</h3>
            <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3235.411748966671!2d10.62600091137297!3d35.814372172430105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130275eaa17ec599%3A0xa38f664c208695da!2sLab-IT!5e0!3m2!1sfr!2stn!4v1686681074163!5m2!1sfr!2stn"
               width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>

         <div class="form_contact">
            <h3>Send Us A Message</h3>
            <form action="#">
               <input type="text" placeholder="Name">
               <input type="email" placeholder="Mail Adress ">
               <input type="text" placeholder="Object">
               <textarea name="" id="" cols="10" rows="10" placeholder="Message"></textarea>
               <br>
               <div class="text-bg">
                  <a href="">Send</a>
               </div>
            </form>
         </div>
      </div>
   </section>
   <!-- end bestCar -->
   <!-- choose  section -->

   <section id="choose">
      <div class="choose ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Why Choose Us</h2>
                     <span>It is a long established fact that a reader will be distracted by the readable content of a
                        page when<br> looking at its layout. The point of using </span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>01</span>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making </p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>02</span>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making </p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="choose_box">
                     <span>03</span>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page
                        when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, content here', making </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end choose  section -->
   <!-- cutomer -->
   <div class="cutomer">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>What says our cutomer</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div id="myCarousel" class="carousel slide cutomer_Carousel " data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption ">
                              <div class="cross_img">
                                 <figure><img src="images/cross_img.png" alt="#" /></figure>
                              </div>
                              <div class="our cross_layout">
                                 <div class="test_box">
                                    <h4>Due markes</h4>
                                    <span>Rental</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                       incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                       nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                       Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                    <i><img src="images/te1.png" alt="#" /></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="cross_img">
                                 <figure><img src="images/cross_img.png" alt="#" /></figure>
                              </div>
                              <div class="our cross_layout">
                                 <div class="test_box">
                                    <h4>Due markes</h4>
                                    <span>Rental</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                       incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                       nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                       Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                    <i><img src="images/te1.png" alt="#" /></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="container">
                           <div class="carousel-caption">
                              <div class="cross_img">
                                 <figure><img src="images/cross_img.png" alt="#" /></figure>
                              </div>
                              <div class="our cross_layout">
                                 <div class="test_box">
                                    <h4>Due markes</h4>
                                    <span>Rental</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                       incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                       nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                       Duis aute irure dolor in reprehenderit in voluptate velit ess</p>
                                    <i><img src="images/te1.png" alt="#" /></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end cutomer -->
   <!--  footer -->



   <!-- Footer Start -->
   <section id="footer">
      <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
         <div class="container py-5">
            <div class="abc">
               <div class="row g-5">
                  <div class="col-lg-4 col-md-6">
                     <h4 class="text-light mb-4">Address</h4>
                     <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                     <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                     <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                     <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <h4 class="text-light mb-4">Opening Hours</h4>
                     <h6 class="text-light">Monday - Friday:</h6>
                     <p class="mb-4">09.00 AM - 09.00 PM</p>
                     <h6 class="text-light">Saturday - Sunday:</h6>
                     <p class="mb-0">09.00 AM - 12.00 PM</p>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <h4 class="text-light mb-4">Services</h4>
                     <a class="btn btn-link" href="">Diagnostic Test</a>
                     <a class="btn btn-link" href="">Engine Servicing</a>
                     <a class="btn btn-link" href="">Tires Replacement</a>
                     <a class="btn btn-link" href="">Oil Changing</a>
                     <a class="btn btn-link" href="">Vacuam Cleaning</a>
                  </div>

               </div>
            </div>
         </div>
         <div class="container">
            <div class="copyright">
               <div class="row">
                  <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                     &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                     <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                     Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                  </div>
                  <div class="col-md-6 text-center text-md-end">
                     <div class="footer-menu">
                        <a href="">Home</a>
                        <a href="">Cookies</a>
                        <a href="">Help</a>
                        <a href="">FQAs</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>