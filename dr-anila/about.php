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
    <title>About | A.A Hospital </title>

</head>

<style>
    /*######Our Core value-css##   */

    .title-bg-one {
        background-image: url(assets/images/banner/about-us-banner-.jpg);
    }

    .ol-cards,
    .ol-cards * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .ol-cards {
        --flapWidth: 32px;
        --flapHeigth: 16px;
        --iconSize: 21px;
        --numberSize: 48px;
        --colGapSize: 10px;

        width: min(100%, 36rem);
        margin-inline: auto;
        display: grid;
        gap: 2rem;
        padding-inline-start: var(--flapWidth);
        font-family: sans-serif;
        color: #222;
        counter-reset: ol-cards-count;
        list-style: none;
    }

    .ol-cards>li {
        display: grid;
        grid-template-areas:
            "icon title nr"
            "icon descr nr";
        gap: 0 var(--colGapSize);
        align-items: center;
        padding: var(--colGapSize) var(--flapWidth) var(--colGapSize) 0;
        border-radius: 1rem 5rem 5rem 1rem;
        background-image: linear-gradient(to bottom right, #e9eaec, #ffffff);
        counter-increment: ol-cards-count;
        filter: drop-shadow(10px 10px 10px rgba(0, 0, 0, 0.25));
        box-shadow: inset 2px 2px 2px white, inset -1px -1px 1px rgba(0, 0, 0, 0.25);
    }

    .ol-cards>li>.icon {
        width: 80px;
        grid-area: icon;
        background: #f89f1d !important;
        color: white;
        font-size: var(--iconSize);
        padding-block: 1rem;
        border-radius: 0 5rem 5rem 0;
        margin-inline-start: calc(-1 * var(--flapWidth));
        box-shadow: 2px 2px 4px rgb(0 0 0 / 25%);
        position: relative;
        display: grid;
        place-items: center;
    }

    .ol-cards>li>.icon::before,
    .ol-cards>li>.icon1::before,
    .ol-cards>li>.icon2::before,
    .ol-cards>li>.icon3::before,
    .ol-cards>li>.icon4::before {
        content: "";
        position: absolute;
        width: var(--flapWidth);
        height: calc(100% + calc(var(--flapHeigth) * 2));
        left: 0;
        top: calc(var(--flapHeigth) * -1);
        clip-path: polygon(0 var(--flapHeigth),
                100% 0,
                100% 100%,
                0 calc(100% - var(--flapHeigth)));
        background-color: black;
        background-image: linear-gradient(90deg,
                rgba(0, 0, 0, 0.5),
                rgba(0, 0, 0, 0.2));
        z-index: -1;
    }

    .ol-cards>li>.icon1 {
        width: 80px;
        grid-area: icon;
        background: red;
        color: white;
        font-size: var(--iconSize);
        padding-block: 1rem;
        border-radius: 0 5rem 5rem 0;
        margin-inline-start: calc(-1 * var(--flapWidth));
        box-shadow: 2px 2px 4px rgb(0 0 0 / 25%);
        position: relative;
        display: grid;
        place-items: center;
    }

    .ol-cards>li>.icon2 {
        width: 80px;
        grid-area: icon;
        background: #f89f1d;
        color: white;
        font-size: var(--iconSize);
        padding-block: 1rem;
        border-radius: 0 5rem 5rem 0;
        margin-inline-start: calc(-1 * var(--flapWidth));
        box-shadow: 2px 2px 4px rgb(0 0 0 / 25%);
        position: relative;
        display: grid;
        place-items: center;
    }

    .ol-cards>li>.icon3 {
        width: 80px;
        grid-area: icon;
        background: red;
        color: white;
        font-size: var(--iconSize);
        padding-block: 1rem;
        border-radius: 0 5rem 5rem 0;
        margin-inline-start: calc(-1 * var(--flapWidth));
        box-shadow: 2px 2px 4px rgb(0 0 0 / 25%);
        position: relative;
        display: grid;
        place-items: center;
    }

    .ol-cards>li>.icon4 {
        width: 80px;
        grid-area: icon;
        background: green;
        color: white;
        font-size: var(--iconSize);
        padding-block: 1rem;
        border-radius: 0 5rem 5rem 0;
        margin-inline-start: calc(-1 * var(--flapWidth));
        box-shadow: 2px 2px 4px rgb(0 0 0 / 25%);
        position: relative;
        display: grid;
        place-items: center;
    }

    .ol-cards>li>.title {
        grid-area: title;
        font-weight: 600;
        text-align: left !important;
        font-size: 1.25rem;
        place-items: flex-start;
        place-content: baseline;
        width: 100%;
    }

    .ol-cards>li>.descr {
        grid-area: descr;
        font-size: 0.875rem;
    }

    @media (max-width: 768px) {
        .ol-cards {
            --flapWidth: 16px;
            --flapHeigth: 8px;
            --iconSize: 18px;
            --numberSize: 36px;
            --colGapSize: 8px;
            padding-inline-start: var(--flapWidth);
        }

        .ol-cards>li {
            grid-template-areas:
                "icon title"
                "icon descr";
            padding: var(--colGapSize) var(--flapWidth) var(--colGapSize) 0;
        }

        .ol-cards>li>.title {
            font-size: 1rem;
        }

        .ol-cards>li>.descr {
            font-size: 0.75rem;
        }

        .ol-cards>li>.icon,
        .ol-cards>li>.icon1,
        .ol-cards>li>.icon2,
        .ol-cards>li>.icon3,
        .ol-cards>li>.icon4 {
            width: 60px;
        }
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

    .card-title {
        color: black;
        font-size: 1.5em;
        line-height: normal;
        font-weight: 700;
        margin-bottom: 0.5em;
    }

    .small-desc {
        font-size: 1em;
        font-weight: 400;
        line-height: 1.5em;
        color: #452c2c;
    }

    .go-corner {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        width: 2em;
        height: 2em;
        overflow: hidden;
        top: 0;
        right: 0;
        background: black;
        border-radius: 0 4px 0 32px;
    }

    .go-arrow {
        margin-top: -4px;
        margin-right: -4px;
        color: white;
        font-family: 'Poppins', sans-serif !important;
    }

    .card {
        display: block;
        position: relative;
        max-width: auto;
        max-height: auto;
        border-radius: 10px;
        padding: 2em 1.2em;
        margin: 12px;
        text-decoration: none;
        z-index: 0;
        overflow: hidden;
        font-family: 'Poppins', sans-serif !important;
    }

    .card:before {
        content: '';
        position: absolute;
        z-index: -1;
        top: -16px;
        right: -16px;
        background: #f89f1d;
        height: 32px;
        width: 32px;
        border-radius: 32px;
        transform: scale(1);
        transform-origin: 50% 50%;
        transition: transform 0.35s ease-out;
    }

    .card:hover:before {
        transform: scale(28);
    }

    .card:hover .small-desc {
        transition: all 0.5s ease-out;
        color: black;
    }

    .card:hover .card-title {
        transition: all 0.5s ease-out;
        color: #ef8223;
    }

    .top-title {
        opacity: 0.5 !important;
    }
    
    p{
        text-align:justify;
    }

    @media only screen and (max-width: 767px) {
        .desk {
            display: none;
        }

        .mob-img {
            margin-top: 87px !important;
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
</style>

<body>
    <?php include('header.php'); ?>



    <!-- Page Title -->
    <div class=" ">
        <div class="">
            <div class="">

                <div class="desk">

                    <img class="desk-img" src="assets/images/banner/About Us banner (1).jpg">

                </div>

                <div class="mob">

                    <img class="mob-img" src="assets/images/banner/about-mobile (1).jpg">
                </div>

            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- About -->
    <div class="about-area two three pt-100 pb-70">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="about-img-two">
                        <img src="assets/images/About-anila.jpg" alt="About">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <div class="top">
                                <span class="top-title">About Us</span>
                                <span class="sub-title">About Us</span>
                            </div>
                            <h2>Comprehensive Eye and <br><span style="color: #f89f1d;">Health Services</span></h2>
                            <p>At A.A hospital, we offer specialized eye care along with general medicine, neurology,
                                diabetes, stomach pain, hypertension, and lung ailment treatments.</p>
                        </div>
                        <p>Our dedicated team of ophthalmologists, led by renowned experts, ensures the best possible
                            outcomes for every patient. We utilize state-of-the-art technology to diagnose and treat
                            various eye conditions, ensuring precision and care in every procedure.</p>
                        <p>In addition to eye care, A.A Hospital provides comprehensive medical services in general
                            medicine, neurology, diabetes management, and treatment for stomach pain, hypertension, and
                            lung ailments. Our multidisciplinary approach ensures holistic healthcare under one roof.
                        </p>
                        <p>Patient satisfaction and safety are our top priorities. We are committed to offering
                            personalized care, focusing on each patient’s unique needs and concerns. Our compassionate
                            staff and advanced facilities make A.A Hospital the preferred choice for health services in
                            Eluru.</p>
                        <ul>
                            <!--<li>-->
                            <!--    <a href="https://www.youtube.com/watch?v=tkhd-JTMwEM&amp;ab" class="popup-youtube"-->
                            <!--        data-abc="true">-->
                            <!--        <i class="bx bx-play"></i>-->
                            <!--    </a>-->
                            <!--    <span>Watch Video</span>-->
                            <!--</li>-->
                            <li>
                                <a class="common-btn" href="contact" data-abc="true">
                                    Get An Appointment
                                    <span class="one"></span>
                                    <span class="two"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->





    <section class="features-area two pt-100 pb-70" style="background:#f0f7ff !important">
        <div class="container">

            <div class="home6-service-bottom">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="card">
                            <p class="card-title">Mission</p>
                            <p class="small-desc">
                                At A.A Hospital, our mission is to deliver exceptional and comprehensive healthcare
                                services that cater to the unique needs of each patient. We are dedicated to providing
                                state-of-the-art eye care and a wide range of medical treatments in general medicine,
                                neurology, diabetes management, stomach pain, hypertension, and lung ailments. Our
                                commitment to patient satisfaction, safety, and personalized care is at the core of
                                everything we do, ensuring holistic and compassionate healthcare for the community of
                                Eluru.
                            </p>
                            <div class="go-corner">
                                <div class="go-arrow">→</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">


                        <div class="card" style="padding-top: 50px;">
                            <p class="card-title">Vision</p>
                            <p class="small-desc">
                                To be the leading healthcare provider in Eluru, known for our excellence in medical
                                care, innovative treatments, and patient-centered approach. We aim to continually
                                advance our services and facilities, fostering a healing environment where every patient
                                receives the best possible outcomes. Through our dedicated team of experts and
                                cutting-edge technology, we strive to set new standards in healthcare and contribute to
                                the overall well-being of our community.
                            </p>
                            <div class="go-corner">
                                <div class="go-arrow">→</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <section id="corevalues  features-area two pt-100 pb-70" class="cstm-pdng7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title" style="margin-bottom:15px;text-align:center !important;">
                        <h3 class="fnt-size"
                            style="border-bottom: 2px solid #EE3C43; display: inline-block;text-align:center !important; color:black; font-size:35px">
                            Our Core Values
                            </span>
                        </h3>
                    </div>

                    <ol class="ol-cards">
                        <li style="--accent-color: #136da0">
                            <div class="icon cstm-grn"><b class="">C</b></div>
                            <div class="title">Compassion</div>
                            <div class="descr">Empathy at heart, we provide care that nurtures the soul, creating an
                                environment where kindness reigns supreme.</div>
                        </li>
                        <li style="--accent-color: #7fc343">
                            <div class="icon1 cstm-red"><b class="">A</b></div>
                            <div class="title">Adaptability</div>
                            <div class="descr">Fluid in our approach, we tailor our services to meet the ever-changing
                                needs of those we serve, ensuring flexibility in every action.</div>
                        </li>
                        <li style="--accent-color: #136da0">
                            <div class="icon2 cstm-grn"><b class="">R</b></div>
                            <div class="title">Reliability</div>
                            <div class="descr"> Trust as our foundation, we offer consistent, dependable care, becoming
                                the steadfast support our clients and their families rely on.</div>
                        </li>
                        <li style="--accent-color: #7fc343">
                            <div class="icon3 cstm-red"><b class="">E</b></div>
                            <div class="title">Empowerment</div>
                            <div class="descr">Empowering individuals and families through education and supportive
                                care, enabling them to lead fuller, more independent lives.</div>
                        </li>
                        <li style="--accent-color: #136da0">
                            <div class="icon4 cstm-grn"><b class="">S</b></div>
                            <div class="title">Service</div>
                            <div class="descr">Dedicated to service beyond expectations, we strive to make a
                                significant, positive impact in every life we touch, every day.</div>
                        </li>

                    </ol>

                </div>
            </div>
        </div>
    </section>





    <!-- End Features -->

    <!-- Services -->
    <section class="doctors-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <div class="top">
                    <span class="top-title">Doctors</span>
                    <span class="sub-title">Doctors</span>
                </div>
                <h2>AA Hospital Eye Care <span style="color: #f89f1d;">Specialist</span> </h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="doctors-item">
                        <div class="top">
                            <img src="assets/images/doctors/male-dr-profile.jpg" alt="Doctor">
                            <ul class="social">
                            </ul>
                        </div>
                        <div class="bottom">
                            <div class="right">
                                <h3>
                                    <a href="#" data-abc="true"> Dr. Anila Sarvani
                                    </a>
                                </h3>
                                <span>Surgery Specialist</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="doctors-item">
                        <div class="top">
                            <img src="assets/images/doctors/female-dr-new.jpg" alt="Doctor">
                        </div>
                        <div class="bottom">
                            <div class="right">
                                <h3>
                                    <a href="#" data-abc="true">Dr Aparna Devi</a>
                                </h3>
                                <span>Surgery Specialist</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="doctors-item">
                        <div class="top">
                            <img src="assets/images/doctors/male-dr-profile.jpg" alt="Doctor">
                        </div>
                        <div class="bottom">
                            <div class="right">
                                <h3>
                                    <a href="#" data-abc="true"> Dr. A S Ram </a>
                                </h3>
                                <span>Lasik Specialist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services -->

    <?php include('footer.php'); ?>

   
</body>

</html>