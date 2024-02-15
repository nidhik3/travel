<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIG</title>




    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <style>
    body {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        /* font-family: 'sf_ui_displayregular'; */
    }

    .container,
    .container-lg,
    .container-md,
    .container-sm,
    .container-xl {
        max-width: 80% !important;
    }

    a,
    a:hover {
        text-decoration: none;
        color: black;

    }

    .tag:hover {
        text-decoration: none;
        color:#1A7645;
    }

    .tag {
        text-decoration: none;
        color: white;
        padding: 0px 20px;
    }

    /* .tags:hover {
        text-decoration: none;
        color: white;
    }

    .tags {
        text-decoration: none;
        color: white;
       
    } */
    .head1 {
        background-color: rgb(39, 115, 30);
    }

    .head3 {
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 20vh;
        width: 100%;
        z-index: 1;

    }

    .head2 {
        background-color: #ffffff;
        padding: 20px 0;
    }

    .box {
        background-color: #1A7645;
        border: 1px solid #F3C58A;
        border-radius: 10px;
        font-size: 15px;
        color: #ffffff;
        padding: 3px;
    }
    section{
        padding: 30px 0;
    }
    .box2 {
        color: #e50000;
        font-size: 18px;
    }

    .box3 {
        font-size: 18px;
        color: #10a02e;
    }

    @keyframes blinking {
        0% {
            color: #e50000;
        }

        49% {
            color: #e50000;
        }

        60% {
            color: transparent;
        }

        99% {
            color: transparent;
        }

        100% {
            color: #e50000;
        }
    }

    .blink {
        color: #e50000;
        animation: blinking 1.2s infinite;
    }
    .nave .iteam a{
        justify-content: center;
    display: flex;
        width: 100%;
        border-right: 1px solid #fff !important;
    }
    </style>

</head>

<header id="header">
    <!-- <div class="head1">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-8  pt-3 pb-3">
                    <a class="tag" href="<?php echo base_url('#');?>">ENQUIRY&nbsp;&nbsp;|&nbsp;</a>
                    <a class="tag" href="<?php echo base_url('#');?>">CARRER&nbsp;&nbsp;|&nbsp;</a>
                    <a class="tag" href="<?php echo base_url('#');?>">BLOOD BANK&nbsp;&nbsp;|&nbsp;</a>
                    <a class="tag" href="<?php echo base_url('#');?>">HEALTH CHECK UP PLANS&nbsp;&nbsp;|&nbsp;</a>
                    <a class="tag" href="<?php echo base_url('#');?>">FEEDBACK&nbsp;&nbsp;|&nbsp;</a>
                    <a class="tag" href="<?php echo base_url('#');?>">DOWNLOADS&nbsp;&nbsp;|&nbsp;</a>

                </div>
            </div>
        </div>
    </div> -->
    <div class="head2 ">
        <div class="container">
            <div class="row pt-3 pb-3 d-flex justify-content-around">
                <div class="logo">
                    <img src="<?php echo base_url('assets/images/logo.png');?> " alt="">
                </div>
                <div class="box" style="font-weight: 600;">
                    Years served - 50 + <br>
                    Patients served - 5 Million + <br>
                    Served today - 534 <br>
                </div>
                <div class="box1">
                    <a class="blink" href="<?php echo base_url('#');?>" style="font-weight: 600;">
                        BOOK APPOINTMENT <br>
                        FOR TELECONSULTATION <br>
                        OR CALL ON - 91160-50108
                    </a>
                </div>
                <div class="box2" style="font-weight: 600;">
                    <span class="s1">Emergency Number:</span> <br>
                    <a href="<?php echo base_url('#');?>">0141 352 4444</a>
                </div>
                <div class="box3" style="font-weight: 600;">
                    <span class="s2">Email Us:</span> <br>
                    <a href="<?php echo base_url('#');?>">info@sdmh.in</a>
                </div>

            </div>
        </div>
    </div>
    </div>
    <div class="head3" style="font-weight: 600;">
        <div class="container">
            <div class="row nave " style="margin: 13px 0;">
                <div class="col-md-12 d-flex  justify-content-around iteam">
                    <a class="tag" href="<?php echo base_url('Intro');?>">INTRODUCTION</a>
                    <a class="tag" href="<?php echo base_url('#');?>">APPOINTMENTS</a>
                    <a class="tag" href="<?php echo base_url('#');?>">CONSULTATION</a>
                    <a class="tag" href="<?php echo base_url('#');?>">FACILITIES</a>
                    <a class="tag" href="<?php echo base_url('#');?>">ABOUT US</a>
                </div>
            </div>
        </div>
    </div>
</header>