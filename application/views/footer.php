<style>
    @media (max-width: 767px) {
        .mt-2 {
            text-align: center;
        }

        .tc {
            text-align: center;
        }
    }

    .social_icon {
        font-size: 25px;
        color: #f26522 !important;
        display: none;
    }

    hr {
        border-top: 2px solid;
        opacity: 1;
    }

    .formPopup {
        background: rgba(0, 0, 0, 0.7);

        width: 100%;
        height: 100vh;
        display: none;
        position: fixed;
        left: 50%;
        top: 0%;
        transform: translate(-50%, 5%);
        border: 3px solid #999999;
        z-index: 4;

    }

    .formContainer {
        max-width: 700px;
        padding: 20px;
        background-color: #f26522;
    }



    .formContainer input[type=text]:focus,
    .formContainer input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    .formContainer .btn {
        padding: 12px 20px;
        border: none;

        color: #fff;
        cursor: pointer;
        width: 100%;
        margin-bottom: 15px;
        opacity: 0.8;
    }

    .formContainer .cancel {

        width: 50px;
    }

    .formContainer .btn:hover,
    .openButton:hover {
        opacity: 1;
    }
</style>

<div class="loginPopup">
    <div class="formPopup" id="popupForm1">
        <div class=" d-flex justify-content-center" style="height:100vh;align-items:center;">
            <div class="formContainer text-center">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn cancel" onclick="closeForm1()"><i class="bi bi-x-lg"></i></button>
                </div>

                <img src="assets/img/logo2.png" width="250" alt="">
                <h3 class="mt-5" style="color:#fff;font-weight: 800;">YOUR TRUSTED ADVISOR FOR NAVIGATING THE EV
                    ECOSYSTEM</h3>
                <h5 class="mt-3 pb-5"> Please reach out to us at <a href="mailto: team@ChargeSol.in"><span
                            style="color:#fff;">team@ChargeSol.in</span></a></h5>

                <form action="Consultation_mail" method="post">
                    <div class="form-group row">
                        <div class="col-md-4 text-end">
                            <label for="name">Name:</label>
                        </div>

                        <div class="col-md-4">
                            <input type="text" required name="name" style="width:100%;margin-bottom: 10px;">
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-end">
                            <label for="email">Email:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="email" id="email" required name="email"
                                style="width:100%;margin-bottom: 10px;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-end">
                            <label for="email">Subject:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" id="subject" required name="Subject"
                                style="width:100%;margin-bottom: 10px;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-end">
                            <label for="email">Message:</label>
                        </div>
                        <div class="col-md-4">
                            <textarea type="text" rows="2" id="subject" required name="Subject"
                                style="width:100%;margin-bottom: 10px;"></textarea>
                        </div>
                    </div>
                    <button type="submit" value="Submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="formPopup" id="popupForm">
        <div class=" d-flex justify-content-center" style="height:100vh;align-items:center;">
            <div class="formContainer text-center">
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn cancel" onclick="closeForm()"><i class="bi bi-x-lg"></i></button>
                </div>
                <img src="assets/img/logo2.png" width="250" alt="">
                <h3 class="mt-5" style="color:#fff;font-weight: 800;">LOOKING TO INVEST IN THE EV MARKET?</h3>
                <h5 class="mt-3 pb-5"> Awesome! Please reach out to us at <a href="mailto: team@ChargeSol.in"><span
                            style="color:#fff;">team@ChargeSol.in</span></a></h5>
                <form action="Invest_mail" method="post" style="z-index: 9999;position: relative;">
                    <div class=" form-group row">
                        <div class="col-md-4 text-end">
                            <label for="name">Name:</label>
                        </div>

                        <div class="col-md-4">
                            <input type="text" required name="name" style="width:100%;margin-bottom: 10px;">
                        </div>

                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-end">
                            <label for="email">Email:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="email" id="email" required name="email"
                                style="width:100%;margin-bottom: 10px;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-end">
                            <label for="email">Subject:</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" id="subject" required name="Subject"
                                style="width:100%;margin-bottom: 10px;">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4 text-end">
                            <label for="email">Message:</label>
                        </div>
                        <div class="col-md-4">
                            <textarea type="text" rows="2" required name="message"
                                style="width:100%;margin-bottom: 10px;"></textarea>
                        </div>
                    </div>
                    <button type="submit" value="Submit">Submit</button>
                </form>


            </div>
        </div>
    </div>
</div>
<!-- <footer class="footer-no-negative wf-section">
    <div>
        <div class="container">
            <div class=" row ">
                <div class="tc  col-md-6 col-sm-12 mt-3 mb-3">
                    <div class="footer-title" style="font-size: 22px;">Subscribe to our newsletter</div>
                    <div class="subs-subtitle">Stay up to date with the latest ChargeSol news</div>
                </div>
                <div class="tc  col-md-6 col-sm-12 mt-3 mb-3">
                    <div class="form-block w-form" style="width:100%;">
                        <form action="Sub_mail" method="post" class="footer-form d-flex" style="align-items: center;">

                            <input type="email" style="width:60%;" class="text-field w-input" maxlength="256"
                                name="email" placeholder="Enter your email address" required="">

                            <input type="submit" value="Subscribe" class="sub-send sub-send-btn-trigger"
                                style="width:30%">
                        </form>



                        <div class="success-message-2 w-form-done" tabindex="-1" role="region"
                            aria-label="Newsletter-footer success">
                            <div>Thank you!</div>
                        </div>

                        <div class="w-form-fail" tabindex="-1" role="region" aria-label="Newsletter-footer failure">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="  footer-row-1 row tc" style="    justify-content: space-around;">
                <div class="col-lg-3 col-md-12 col-sm-12  mb-3"><a href="/" aria-current="page"
                        class="w-inline-block w--current">
                        <h3 style="color:#fff;">AjayDiam</h3>
                    </a>
                </div>
                <div class="div-block-24 row col-lg-9 col-md-12 col-sm-12 mt-3 mb-3">
                    <div class="col-lg-4 col-md-6 col-sm-6  mt-2  tc">
                        <div class="div-block-1463">
                            <div class="footer-title">Solutions</div>
                        </div>
                        <div class="col-footer">
                            <a href="<?php echo base_url('Cpo'); ?>" class="footer-links mt-25">ChargeSol for CPOs</a>
                            <a href="<?php echo base_url('OEMs'); ?>" class="footer-links mt-16">ChargeSol for
                                OEMs</a>

                            <a href="<?php echo base_url('Fleet_Operators'); ?>"
                                class="footer-links mt-16 hide">ChargeSol for Fleet Operators</a>
                            <a href="<?php echo base_url('Other'); ?>" class="footer-links mt-16 hide">Other
                                Businesses</a>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-6  mt-2  tc">
                        <div class="div-block-1463">
                            <div class="footer-title">Company</div>
                        </div>
                        <div class="col-footer">
                            <a href="<?php echo base_url('About_Us'); ?>" class="footer-links mt-25">About Us</a>
                            <a href="<?php echo base_url('Career'); ?>" class="footer-links mt-16">Career</a>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-6 mt-2  tc">
                        <div class="div-block-1463">
                            <div class="footer-title">Other</div>
                        </div>
                        <div class="col-footer">
                            <a href="<?php echo base_url('News'); ?>" class="footer-links mt-25">News & Articles</a>
                            <a onclick="openForm()" style="cursor:pointer" class="footer-links mt-16">Invest with Us</a>
                            <a onclick="openForm1()" style="cursor:pointer" class="footer-links mt-16">Consultation</a>
                            <a href="<?php echo base_url('Contact1'); ?>" class="footer-links mt-16">Contact</a>


                        </div>
                    </div>
                </div>
            </div>


            <hr>
            <div class="footer-row-3 tc" style="    text-align: center;">
                <div class="footer-copyw tc">
                    © <span class="current-year">2024</span>. All Rights Reserved &nbsp; &nbsp;・ &nbsp; &nbsp;
                    <span class="_445254">AjayDiam</span>
                    &nbsp; | &nbsp; <a href="/" class="_445254">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
</footer> -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script>
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll <= 500) {
            $(".addclass").removeClass("addclass").addClass("stick");
        }
    })
</script>

<script>
    function openForm() {
        document.getElementById("popupForm").style.display = "block";
    }

    function closeForm() {
        document.getElementById("popupForm").style.display = "none";
    }

    function openForm1() {
        document.getElementById("popupForm1").style.display = "block";
    }

    function closeForm1() {
        document.getElementById("popupForm1").style.display = "none";
    }
</script>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


<style>
    #footer {
        background: rgba(1, 100, 152, 0.5);
        padding: 15px 0;
    }
    .social{
        height:5vh;
        border-radius:10px
    }
    
    </style>
    
    
    <footer id=footer>
        <div class="icon d-flex flex-column" style="position: fixed;bottom:10px; right:15px;">
            <a href="https://www.instagram.com/sdmhjaipur/?hl=en" class="mt-2">
                <img src="assets/nlogo/insta.png" alt="" class="social" >
            </a>
            <a href="https://www.facebook.com/sdmhjaipur/" class="mt-2">
                <img src="assets/nlogo/fb.png" alt="" class="social" >
            </a>
            <a href="#" class="w social mt-2">
                <img src="assets/nlogo/wa.png" alt="" class="social">
    
            </a>
        </div>
        <div class="container text-center">
           
                <span> ©Copyright 2024. All right reserved by:</span>
                 &nbsp;<a href="#"> SDMH</a>
           
    
            
        </div>
    </footer>

</body>

</html>