<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--=== Meta Tags ===-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=== Essential CSS ===-->
    <?php include('header-link.php'); ?>


    <!--=== Title & Favicon ===-->
    <title>Contact Us | A.A Hospital </title>

</head>
<style>
    /*######Our Core value-css##   */

    .title-bg-one {
        background-image: url(assets/images/banner/about-us-banner-.jpg);
    }



    .cstm-grn {
        background: #f89f1d !important;
    }

    .cstm-red {
        background: #f89f1d !important;

    }

    .cstm-pdng7 {
        padding-top: 90px;
        padding-bottom: 50px;
    }









    @media only screen and (max-width: 767px) {


        .desk {
            display: none;
        }

        .mob-img {
            margin-top: 87px !important;
        }

        .pt-new-100 {
            padding-top: 0px;
        }
    }

    @media only screen and (min-width: 767px) {
        .mob {
            display: none;
        }

        .desk-img {
            margin-top: 84px;
        }


    }

    /*@only screen and (min-width: 768px) and (max-width: 991px)*/
    /*      {*/
    /*     .desk-img{*/
    /*                      margin-top:0px !important;    */
    /*                           }*/
    /*}*/
    .contact-area #contactForm .form-group .form-control {
        border-bottom: 2px solid;
    }
</style>

<body>
    <?php include('header.php'); ?>


    <!-- Page Title -->
    <div class="">
        <div class="">
            <div class="">
                <div class="desk">
                    <img class="desk-img" src="assets/images/banner/contact-us (1).jpg">
                </div>

                <div class="mob">

                    <img class="mob-img" src="assets/images/banner/contact-us-mobile.jpg">
                </div>

            </div>
        </div>
    </div>
    <!-- End Page Title -->





    <div class="contact-info-area pt-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-info-item">
                        <i class="bx bx-phone-call"></i>
                        <h3>Phone Number</h3>
                        <a href="tel:+919346736775" data-abc="true">+91-93467-36775</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-info-item">
                        <i class="bx bx-mail-send"></i>
                        <h3>Email Address</h3>
                        <a href="mailto:anila.amudalapalli@gmail.com" data-abc="true">anila.amudalapalli@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="contact-info-item">
                        <i class="bx bx-location-plus"></i>
                        <h3>Location</h3>
                        <a href="https://www.google.com/maps/place/Asia/@23.7282045,62.1750717,3z/data=!3m1!4b1!4m5!3m4!1s0x3663f18a24cbe857:0xa9416bfcd3a0f459!8m2!3d34.047863!4d100.6196553"
                            target="_blank" data-abc="true">Ramachandra Rao Pet, Eluru, Andhra Pradesh 534006</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-area pt-100 pb-70" style="background:#fdf9d2;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-item">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.3129039474743!2d81.09853981099171!3d16.711232121864477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3614c8e267be31%3A0xc8f43de10665d40c!2sA.A%20Hospitals%3A%20Best%20Eye%20Hospital%20in%20Eluru%20%7C%20General%20Medicine%2C%20Neurology%20%2C%20Diabetes%2C%20Stomach%20pain%2C%20Hypertension%2C%20Lung%20aliments!5e0!3m2!1sen!2sin!4v1718264984020!5m2!1sen!2sin"
                            width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!--<form id="contactForm" novalidate="true">-->
                    <form id="contactForm" accept-charset='UTF-8' action='https://app.formester.com/forms/91607b7b-3b91-464e-abaf-15bd13acc1a5/submissions' method='POST'>
                        <h3>Contact With Us!</h3>
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                        required="" data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                        required="" data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone_number" placeholder="Phone"
                                        required="" data-error="Please enter your number" class="form-control">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="subject" id="msg_subject" class="form-control"
                                        placeholder="Subject" required="" data-error="Please enter your subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8"
                                        placeholder="Write message" required=""
                                        data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <!--<div class="col-lg-12 col-md-12">-->
                            <!--    <div class="form-group">-->
                            <!--        <div class="form-check agree-label">-->
                            <!--            <input name="gridCheck" value="I agree to the terms and privacy policy."-->
                            <!--                class="form-check-input" type="checkbox" id="gridCheck" required="">-->
                            <!--            <label class="form-check-label" for="gridCheck">-->
                            <!--                Accept <a href="terms-conditions.html" data-abc="true">Terms &amp;-->
                            <!--                    Conditions</a> And <a href="privacy-policy.html" data-abc="true">Privacy-->
                            <!--                    Policy.</a>-->
                            <!--            </label>-->
                            <!--            <div class="help-block with-errors gridCheck-error"></div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->


                            <div class="col-lg-12">
                                <button type="submit" class="common-btn">
                                    Get An Appointment
                                    <span class="one"></span>
                                    <span class="two"></span>
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </style>
    <?php include('footer.php'); ?>

  
</body>

</html>