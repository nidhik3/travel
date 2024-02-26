<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SDMH</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>/assets/css/main.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/debug.addIndicators.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- =======================================================
  * Template Name: Impact - v1.2.0
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style1.css">
    <style>
        .mob1 {
            display: none;
        }

        a:hover {
            text-decoration: none !important;
        }

        @media (max-width: 680px) {
            .desk {
                display: none;
            }

            .mob1 {
                display: block;
            }





        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <!-- End Top Bar -->

    <header id="header" class="header d-flex align-items-center addclass nav-down" style="   width:100%;">

        <div class="container-fluid container-xl d-flex align-items-center justify-content-around row p-0 m-0"
            style="max-width: 100%;margin: auto;">
            <div class="row col-md-12 desk">
                <a href="<?php echo base_url(); ?>"
                    class="logo d-flex align-items-center col-md-3 col-6 justify-content-center"
                    style="padding: 10px 0;">
                    <!-- 
        <img src="assets/img/logo2.png" style="max-width:250px;" alt=""> -->
                    <img src="<?php echo base_url('assets/nimages/logo.png');?> " alt="">
                </a>
                <div class="col-md-9 col-6 row d-flex justify-content-around align-items-center"
                    style="padding: 10px 0;">

                    <div class="col-md-3 col-6 box" style="font-weight: 600;">
                        Years served - 50 + <br>
                        Patients served - 5 Million + <br>
                        Served today - 534 <br>
                    </div>
                    <div class="col-md-3 col-6">
                        <a class="blink" href="<?php echo base_url('#');?>" style="font-weight: 600;">
                            BOOK APPOINTMENT <br>
                            FOR TELECONSULTATION <br>
                            OR CALL ON - 91160-50108
                        </a>
                    </div>
                    <div class="col-md-3 col-6" style="font-weight: 600; color: #e50000;">
                        <span class="s1">Emergency Number:</span> <br>
                        <a href="<?php echo base_url('#');?>">0141 352 4444</a>
                    </div>
                    <div class="col-md-3 col-6" style="font-weight: 600; color:#10a02e;">
                        <span class="s2">Email Us:</span> <br>
                        <a href="<?php echo base_url('#');?>">info@sdmh.in</a>
                    </div>

                </div>
            </div>
            <div class="mob1">
                <div class="row col-md-12" style="justify-content: space-around;">
                    <a href="<?php echo base_url(); ?>"
                        class="logo d-flex align-items-center col-4 justify-content-center" style="padding: 10px 0;">
                        <!-- 
        <img src="assets/img/logo2.png" style="max-width:250px;" alt=""> -->
                        <img src="<?php echo base_url('assets/nimages/logo.png');?> " alt="">
                    </a>
                    <div class="col-7 row d-flex justify-content-around align-items-center" style="padding: 10px 0;">

                        <div class=" box p-1" style="font-weight: 600;">
                            Years served - 50 + <br>
                            Patients served - 5 Million + <br>
                            Served today - 534 <br>
                        </div>



                    </div>
                    <div class="col-12 row d-flex justify-content-around align-items-center" style="padding: 10px 0;">
                        <div class="col-4">
                            <a class="blink" href="<?php echo base_url('#');?>" style="font-weight: 600;">
                                BOOK APPOINTMENT <br>
                                FOR TELECONSULTATION <br>
                                OR CALL ON - 91160-50108
                            </a>
                        </div>

                        <div class="col-4" style="font-weight: 600; color: #e50000;">
                            <span class="s1">Emergency Number:</span> <br>
                            <a href="<?php echo base_url('#');?>">0141 352 4444</a>
                        </div>
                        <div class="col-4" style="font-weight: 600; color:#10a02e;">
                            <span class="s2">Email Us:</span> <br>
                            <a href="<?php echo base_url('#');?>">info@sdmh.in</a>
                        </div>

                    </div>
                </div>
            </div>



            <nav id="navbar" class="navbar col-md-12" style="background-color: rgba(0, 0, 0, 0.5);">


                <ul class="item" style="width: 100%; justify-content: center;">
                    <li><a class="tag " href="<?php echo base_url('intro');?>">INTRODUCTION</a></li>
                    <li class="dropdown "><a class="tag " href="#">PROFILE<i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <li><a href="<?php echo base_url('profile'); ?>">Dr Anurag Govil</a></li>
                            <li><a href="<?php echo base_url('profile'); ?>">Dr Dinesh Agrawal
                                </a></li>
                            <li><a href="<?php echo base_url('profile'); ?>">Dr Nikhil Atolia</a></li>
                            <li><a href="<?php echo base_url('profile'); ?>">Dr Sandeep Vaishnav</a></li>
                        </ul>
                    </li>
                    <!-- <li><a class="tag" href="<?php echo base_url('');?>">PROFILE</a></li> -->
                    <li><a class="tag" href="<?php echo base_url('appointment');?>">APPOINTMENTS</a></li>
                    <li> <a class="tag" href="<?php echo base_url('gallery');?>">GALLERY</a></li>
                    <li><a class="tag" href="<?php echo base_url('feedback');?>">FEEDBACK</a></li>
                    <li><a class="tag" href="<?php echo base_url('#');?>">PROCEDURE</a></li>
                    <li><a class="tag" href="<?php echo base_url('consultation');?>">CONSULTATION</a></li>

                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list col-2" style="color: red;"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x" style="color: red;"></i>



        </div>

    </header>
    </section><!-- End Header -->
    <!-- End Header -->