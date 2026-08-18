<!DOCTYPE html>
<html lang="zxx">

<head>
  <!--=== Meta Tags ===-->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>A.A Hospital | Eye Care & Optometrist</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



  <?php include('header-link.php'); ?>

</head>
<style>

  @media only screen and (max-width: 767px) {
      
 body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    overflow-x: hidden !important;
 }

    .header-area .right {

      display: none;
    }

    .side-nav {
      display: none;
    }
   .cstm-title
    {
        top:-18px !important;
    }
  }

  .banner-bg-two {
    background-image: url("assets/images/banner/eyecare-banner.jpg") !important;
  }

  .banner-bg-three {
    background-image: url("assets/images/banner/Eye Care and General Medicine.jpg") !important;

  }

  .banner-bg-four {
    background-image: url("assets/images/banner/General Medicine.jpg") !important;

  }

  .counter-area.two {
    background: #fdf9d2 !important;
  }

  .features-item {
    margin-bottom: 0px !important;
    padding: 15px 30px 25px !important;
  }

  .faq-head {
    background: #f0f7ff;

    padding-top: 7px;
    padding-bottom: 7px;
  }


    .coutnt-1 {
      padding: 40px 30px 40px !important;
    }

    .mb {

      margin-bottom: 10px;
    }

    .counter-item {
      margin-bottom: 0px !important;

    }

    .ptb {
      padding-top: 50px;
      padding-bottom: 50px;
    }
    
    .top-title{
        opacity:0.4 !important;
    }
    .sub-title{
        font-size:20px !important;
    }
    
    .banner-content .heading{
        font-size:64px !important;
        line-height:78px !important;
        color: #000 !important;
    }
    
    .book-heading{
        font-size: 40px !important; 
        font-weight: 800 !important; 
        color:black !important; 
        display: inline-flex !important;
    }
    
    .book-heading > span{
        color: #f89f1d;
    }
    
    
    @media only screen and (max-width: 767px) {
        
        .banner-bg-four-mob{
            /*background-image: url("assets/images/banner/Eye-Specialists-in-Eluru.jpg") !important;*/
        }
        
        .banner-bg-three-mob{
            /*background-image: url("assets/images/banner/general-medicine-eye-care-mobile-banner.jpg") !important;*/
        }
        
        .banner-bg-two-mob{
            /*background-image: url("assets/images/banner/general-medicine-mobile-baner.jpg") !important;*/
        }
        
        .banner-content .heading{
            font-size:44px !important;
            line-height:58px !important;
            margin-top:50px;
        }
        
        .banner-content{
            margin-top:50px !important;
            display:none;
        }
        
        .banner-area.two .banner-item:before {
            background: none !important;
            opacity: 0 !important; 
        }
        
      .book-heading{
        font-size: 28px !important; 
      }
    }
    
    @media only screen and (min-width: 767px) {
        /*.banner-bg-four-mob{*/
        /*    display:none;*/
        /*}*/
    }
        
        

    @media (max-width:992px) and (min-width:200px){
              .banner-area{
               padding-top:70px !important;
               padding-bottom:0px  !important;
           }
        }

/* Hide the desktop banner area on mobile screens */
.banner-area.two {
  display: block;
}

@media (max-width: 767px) {
  .banner-area.two {
    display: none;
  }

  #mobile-carousel {
    display: block;
  }
}

@media (min-width: 768px) {
  #mobile-carousel {
    display: none;
  }
}


</style>
 
<body>
<?php include('header.php'); ?>
 

  <!-- Sidebar Modal -->
  <!--<div id="myModalRight" class="modal fade modal-right" tabindex="-1" role="dialog">-->
  <!--  <div class="modal-dialog" role="document">-->
  <!--    <div class="modal-content">-->
  <!--      <div class="modal-header">-->
  <!--        <img src="assets/images/WhatsApp Image 2024-06-04 at 12.21.45_6bd905e4.jpg" class="left-logo1" alt="Logo"-->
  <!--          style="height: 79px;">-->
  <!--         <img src="assets/images/WhatsApp Image 2024-06-04 at 12.21.45_6bd905e4.jpg" class="left-logo1" alt="Logo" style="height: 79px;"> -->
  <!--        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>-->

  <!--      </div>-->
  <!--      <div class="modal-body">-->
  <!--        <h2>About Us</h2>-->
  <!--        <p>At A.A hospital, we offer specialized eye care along with general medicine, neurology, diabetes,-->
  <!--          stomach pain, hypertension, and lung ailment treatments.</p>-->

  <!--        <div class="social-area">-->
  <!--          <h2>Our Social Contact</h2>-->
  <!--          <ul>-->
  <!--            <li>-->
  <!--              <a href="https://www.facebook.com/" target="_blank">-->
  <!--                <i class='bx bxl-facebook'></i>-->
  <!--              </a>-->
  <!--            </li>-->
  <!--            <li>-->
  <!--              <a href="https://www.twitter.com/" target="_blank">-->
  <!--                <i class='bx bxl-twitter'></i>-->
  <!--              </a>-->
  <!--            </li>-->
  <!--            <li>-->
  <!--              <a href="https://www.linkedin.com/" target="_blank">-->
  <!--                <i class='bx bxl-linkedin'></i>-->
  <!--              </a>-->
  <!--            </li>-->
  <!--            <li>-->
  <!--              <a href="https://www.instagram.com/" target="_blank">-->
  <!--                <i class='bx bxl-instagram'></i>-->
  <!--              </a>-->
  <!--            </li>-->
  <!--          </ul>-->
  <!--        </div>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
  <!-- End Sidebar Modal -->

  <!-- Banner -->
  <div class="banner-area two">
    <div class="banner-slider owl-theme owl-carousel">

      <div class="banner-item banner-bg-two banner-bg-two-mob">
        <div class="d-table">
          <div class="d-table-cell">
            <div class="container">

              <div class="banner-content">
                <span class="title">AA Hospital</span>
                <p class="heading">Top Eye Specialists in <span style="color: #f89f1d;">Eluru</span></p>
                <p>A.A Hospital for advanced eye treatments and personalized care, tailored to your specific needs.</p>
                <a class="common-btn" href="ophthalmology">
                  <span class="one"></span>
                  <span class="two"></span>
                  More About Us
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="banner-item banner-bg-three banner-bg-three-mob">
        <div class="d-table">
          <div class="d-table-cell">
            <div class="container">

              <div class="banner-content">
                <span class="title">AA Hospitals</span>
                <p class="heading">General Medicine and <span style="color: #f89f1d;">Eye Care</span></p>
                <p>Experience personalized care in general medicine and advanced eye care at AA Hospital.</p>
                <a class="common-btn" href="about">
                  <span class="one"></span>
                  <span class="two"></span>
                  More About Us
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="banner-item banner-bg-four banner-bg-four-mob">
        <div class="d-table">
          <div class="d-table-cell">
            <div class="container">

              <div class="banner-content">
                <span class="title">AA Hospitals</span>
                <p class="heading">General Medicine Specialists in <span style="color: #f89f1d;">Eluru </span></p>
                <p>Expert medical care and customized treatment plans designed for your individual health needs.</p>
                <a class="common-btn" href="general-medicine">
                  <span class="one"></span>
                  <span class="two"></span>
                  More About Us
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End Banner -->
  
  
  <div id="mobile-carousel" class="carousel slide" data-bs-ride="carousel" style="margin-top:80px">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="ophthalmology.php"><img src="assets/images/banner/eye specialists-mobile-banner.jpg" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href="about"><img src="assets/images/banner/general-medicine-eye-care-mobile-banner.jpg" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href="general-medicine.php"><img src="assets/images/banner/general-medicine-mobile-baner.jpg" class="d-block w-100" alt="..."></a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

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
              <div class="top d-flex justify-center align-center">
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
              <!--  <a href="http://www.youtube.com/watch?v=tkhd-JTMwEM&amp;ab" class="popup-youtube" data-abc="true">-->
              <!--    <i class="bx bx-play"></i>-->
              <!--  </a>-->
              <!--  <span>Watch Video</span>-->
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

  <!-- Services -->
  <section class="services-area two pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <div class="top">
          <span class="top-title">Services</span>
          <!--<span class="sub-title cstm-title">AA Hospital Eye Care</span>-->
          <span class="sub-title">Services</span>
        </div>
        <h2>Our Comprehensives Services & <span style="color: #f89f1d;"> Treatments</span> </h2>
      </div>
      <div class="row">
          
         <div class="col-sm-6 col-lg-6">
          <div class="services-item">
            <div class="bottom">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <!--<i class="flaticon-eye icon"></i>-->
              <img class="flaticon-lasik icon" src="assets/images/first-aid-kit.png">
              <h3>
                <a href="general-medicine">General Medicine</a>
              </h3>
              <p>Our General Medicine department provides comprehensive healthcare services for the diagnosis and treatment for various medical conditions and promote overall wellness.</p>
              <a class="services-btn" href="general-medicine">
                More Details
                <i class='bx bx-plus'></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-6">
          <div class="services-item">
            <div class="bottom">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <!--<i class="flaticon-eye-1 icon"></i>-->
              <img class="flaticon-lasik icon" src="assets/images/treatment.png">
              <h3>
                <a href="ophthalmology">Opthalmology</a>
              </h3>
              <p>Our Ophthalmology department offers expert care for all eye-related conditions, providing comprehensive & advanced treatments to ensure optimal vision.</p>
              <a class="services-btn" href="ophthalmology">
                More Details
                <i class='bx bx-plus'></i>
              </a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-6">
          <div class="services-item">
            <div class="bottom">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <!--<i class="flaticon-eye icon"></i>-->
              <img class="flaticon-lasik icon" src="assets/images/Neurology-1.png">
              <h3>
                <a href="neurology">Neurology</a>
              </h3>
              <p>Our Neurology department provides expert care for the diagnosis and treatment of neurological disorders. We offer advanced therapies for conditions such as stroke, epilepsy to improve quality of life.</p>
              <a class="services-btn" href="neurology">
                More Details
                <i class='bx bx-plus'></i>
              </a>
            </div>
          </div>
        </div>
        
        <div class="col-sm-6 col-lg-6">
          <div class="services-item">
            <div class="bottom">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <!--<i class="flaticon-botox icon"></i>-->
              <img class="flaticon-lasik icon" src="assets/images/Rheumatology-1.png">
              <h3>
                <a href="rhemuatology">Rheumatology</a>
              </h3>
              <p>Our Rheumatology department specializes in the diagnosis and treatment of rheumatic diseases. We provide comprehensive care for arthritis, lupus, and other using advanced therapies to improve overall tissue health.</p>
              <a class="services-btn" href="rhemuatology">
                More Details
                <i class='bx bx-plus'></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Services -->




 <!-- Features -->
  <section class="features-area pt-100 pb-70">
    <div class="container">
      <div class="section-title">
        <div class="top">
          <span class="top-title">Choose Us</span>
          <span class="sub-title">Why Choose Us</span>
        </div>
        <h2>Providing Care For The Sickest</h2>
      </div>
      <div class="row">

        <div class="col-sm-6 col-lg-3 mb">
          <div class="features-item">
            <span>01</span>

            <!--<i class="flaticon-doctor"></i>-->
            <img class="features-item i" src="assets/images/nurse.png">

            <h3>
              <a href="#">Expert Specialists</a>
            </h3>
            <p> Our team includes highly qualified specialists with extensive experience in eye care.</p>

          </div>
        </div>

        <div class="col-sm-6 col-lg-3 mb">
          <div class="features-item">
            <span>02</span>
            <!--<i class="flaticon-view"></i>-->
            <img class="features-item i" src="assets/images/eye-tracking.png">

            <h3>
              <a href="#">Advanced Technology</a>
            </h3>
            <p> We utilize cutting-edge technology for accurate diagnosis and effective treatment.</p>

          </div>
        </div>

        <div class="col-sm-6 col-lg-3 mb">
          <div class="features-item">
            <span>03</span>
            <!--<i class="flaticon-eye-1"></i>-->
            <img class="features-item i" src="assets/images/healthcare.png
">

            <h3>
              <a href="#">Comprehensive Services </a>
            </h3>
            <p>Offering a wide range of eye care and general health services under one roof.</p>

          </div>
        </div>

        <div class="col-sm-6 col-lg-3 mb">
          <div class="features-item">
            <span>04</span>
            <!--<i class="flaticon-laser"></i>-->
            <img class="features-item i" src="assets/images/patient.png">

            <h3>
              <a href="#">Patient-Centered Care</a>
            </h3>
            <p> Personalized care focused on each patient's unique needs and overall well-being.</p>

          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End Features -->



  <!-- Counter -->
  <div class="counter-area two ptb">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3 mb">

          <div class="counter-item coutnt-1">

            <!--<i class="fa-solid fa-user-doctor"></i>               -->
            <!--<img src="assets/images/doctors/nurse.png" alt="Doctor">-->
            <h3 style="color:#152536;">
              <img class="flaticon-doctor" src="assets/images/nurse.png">
              <span class="odometer odometer-auto-theme" data-count="12">
                <div class="odometer-inside"><span class="odometer-digit"><span
                      class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                        class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                            class="odometer-value">1</span></span></span></span></span><span
                    class="odometer-digit"><span class="odometer-digit-spacer"></span><span
                      class="odometer-digit-inner"><span class="odometer-ribbon"><span
                          class="odometer-ribbon-inner"><span
                            class="odometer-value">2</span></span></span></span></span><span
                    class="odometer-digit"><span class="odometer-digit-spacer"></span><span
                      class="odometer-digit-inner"><span class="odometer-ribbon"><span
                          class="odometer-ribbon-inner"><span
                            class="odometer-value"></span></span></span></span></span><span class="odometer-digit"><span
                      class="odometer-digit-spacer"></span><span class="odometer-digit-inner"><span
                        class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                            class="odometer-value"></span></span></span></span></span>
                </div>
              </span>
              <span class="target">+</span>
            </h3>
            <p style="text-align: center;">Specialized Doctors</p>
          </div>
        </div>


        <div class="col-sm-6 col-lg-3 mb">
          <div class="counter-item coutnt-1">

            <!--<i class="fa-solid fa-user-doctor"></i>               -->
            <!--<img src="assets/images/doctors/nurse.png" alt="Doctor">-->
            <h3 style="color:#152536;">
              <img class="flaticon-doctor" src="assets/images/winner.png">
              <span class="odometer odometer-auto-theme" data-count="80">
                <div class="odometer-inside"><span class="odometer-digit"><span
                      class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                        class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                            class="odometer-value">1</span></span></span></span></span><span
                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                      class="odometer-digit-inner"><span class="odometer-ribbon"><span
                          class="odometer-ribbon-inner"><span
                            class="odometer-value">2</span></span></span></span></span><span
                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                      class="odometer-digit-inner"><span class="odometer-ribbon"><span
                          class="odometer-ribbon-inner"><span
                            class="odometer-value">8</span></span></span></span></span><span
                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                      class="odometer-digit-inner"><span class="odometer-ribbon"><span
                          class="odometer-ribbon-inner"><span
                            class="odometer-value">0</span></span></span></span></span>
                </div>
              </span>
              <span class="target">+</span>
            </h3>
            <p style="text-align: center;">Winning Awards</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb">
          <div class="counter-item coutnt-1">

            <!--<i class="fa-solid fa-user-doctor"></i>               -->
            <!--<img src="assets/images/doctors/nurse.png" alt="Doctor">-->
            <h3 style="color:#152536;">
              <img class="flaticon-doctor" src="assets/images/rating.png">
              <span class="odometer odometer-auto-theme" data-count="1280">
                <div class="odometer-inside"><span class="odometer-digit"><span
                      class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                        class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                            class="odometer-value">1</span></span></span></span></span><span
                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                      class="odometer-digit-inner"><span class="odometer-ribbon"><span
                          class="odometer-ribbon-inner"><span
                            class="odometer-value">2</span></span></span></span></span><span
                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                      class="odometer-digit-inner"><span class="odometer-ribbon"><span
                          class="odometer-ribbon-inner"><span
                            class="odometer-value">8</span></span></span></span></span><span
                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                      class="odometer-digit-inner"><span class="odometer-ribbon"><span
                          class="odometer-ribbon-inner"><span
                            class="odometer-value">0</span></span></span></span></span>
                </div>
              </span>
              <span class="target">+</span>
            </h3>
            <p style="text-align: center;">Satisfied Patientss</p>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb">
          <div class="counter-item coutnt-1">

            <!--<i class="fa-solid fa-user-doctor"></i>               -->
            <!--<img src="assets/images/doctors/nurse.png" alt="Doctor">-->
            <h3 style="color:#152536;">
              <img class="flaticon-doctor" src="assets/images/bed.png">
              <span class="odometer odometer-auto-theme" data-count="128">
                <div class="odometer-inside"><span class="odometer-digit"><span
                      class="odometer-digit-spacer">8</span><span class="odometer-digit-inner"><span
                        class="odometer-ribbon"><span class="odometer-ribbon-inner"><span
                            class="odometer-value">1</span></span></span></span></span><span
                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                      class="odometer-digit-inner"><span class="odometer-ribbon"><span
                          class="odometer-ribbon-inner"><span
                            class="odometer-value">2</span></span></span></span></span><span
                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                      class="odometer-digit-inner"><span class="odometer-ribbon"><span
                          class="odometer-ribbon-inner"><span
                            class="odometer-value">8</span></span></span></span></span><span
                    class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                      class="odometer-digit-inner"><span class="odometer-ribbon"><span
                          class="odometer-ribbon-inner"><span
                            class="odometer-value">0</span></span></span></span></span>
                </div>
              </span>
              <span class="target">+</span>
            </h3>
            <p style="text-align:center;">Health Sections</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Counter -->

  <!-- Doctors -->
<section class="doctors-area pt-100 pb-70">
  <div class="container">
    <div class="section-title">
      <div class="top">
        <span class="top-title">Doctors</span>
        <span class="sub-title">Doctors</span>
      </div>
      <h2>AA Hospital Eye Care <span style="color: #f89f1d;">Specialist</span></h2>
    </div>
    <div class="row justify-content-center">

      <div class="col-sm-6 col-lg-4">
        <div class="doctors-item">
          <div class="top">
            <img src="assets/images/doctors/male-dr-profile.jpg" alt="Doctor">
            <ul class="social">
              <!-- Missing list items for social links -->
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul> <!-- Close the ul tag properly -->
          </div>
          <div class="bottom">
            <div class="right">
              <h3>
                <a href="#"> Dr. Anila Sarvani </a> <!-- Removed extra space -->
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
            <ul class="social">
              <!-- Add social links if needed -->
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul> <!-- Added ul for social links -->
          </div>
          <div class="bottom">
            <div class="right">
              <h3>
                <a href="#">Dr. Aparna Devi</a> <!-- Fixed spacing -->
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
            <ul class="social">
              <!-- Add social links if needed -->
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul> <!-- Added ul for social links -->
          </div>
          <div class="bottom">
            <div class="right">
              <h3>
                <a href="#"> Dr. A S Ram </a> <!-- Fixed spacing -->
              </h3>
              <span>Lasik Specialist</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- End Doctors -->







  <!-- Appointment -->
  <div class="appointment-area faq-area pt-100 pb-70" style=" background: #fdf9d2">
    <div class="appointment-shape">
      <img src="assets/images/appointment-shape1.png" alt="Shape">
      <img src="assets/images/appointment-shape2.png" alt="Shape">
    </div>
    <div class="container-fluid p-0">
      <div class="row m-0">

        <div class="col-lg-6 p-0">

          <div class="faq-item">
            <div class="section-title">
              <div class="top">
                <span class="top-title">Questions</span>
                <span class="sub-title">FAQ</span>
              </div>
              <h2 style="color:black;">Frequently Asked <span style="color: #f89f1d;">Questions</span>
              </h2>
            </div>
            <ul class="accordion">
              <li>
                <h3 class="faq-head"><span>01</span> What eye care services do you offer? </h3>
                <div class="faq-content">
                  <p>We offer cataract surgery, glaucoma management, diabetic retinopathy treatment,
                    oculoplasty, pediatric ophthalmology, and laser vision correction.</p>
                </div>
              </li>
              <li>
                <h3 class="faq-head"><span>02</span> How can I book an appointment?</h3>
                <div class="faq-content">
                  <p> You can book an appointment online through our website or by calling our
                    hospital directly.</p>
                </div>
              </li>
              <li>
                <h3 class="faq-head"><span>03</span> Do you accept insurance?</h3>
                <div class="faq-content">
                  <p>Yes, we accept most major insurance plans. Please contact our billing department
                    for specific details.</p>
                </div>
              </li>
              <li>
                <h3 class="faq-head"><span>04</span> What should I bring to my appointment?</h3>
                <div class="faq-content">
                  <p> Please bring your ID, insurance information, any relevant medical records, and a
                    list of current medications.</p>
                </div>
              </li>
              <li>
                <h3 class="faq-head"><span>05</span> Are your treatments covered by insurance?</h3>
                <div class="faq-content">
                  <p>Many of our treatments are covered by insurance. It's best to check with your
                    provider for specific coverage details.</p>
                </div>
              </li>
              <li>
                <h3 class="faq-head"><span>06</span> How do I prepare for eye surgery? </h3>
                <div class="faq-content">
                  <p>Our team will provide detailed pre-surgery instructions, including fasting
                    requirements and medication guidelines.</p>
                </div>
              </li>
              <!--<li>-->
              <!--    <h3 class="faq-head"><span>07</span> Are my digital devices affecting my eyes and so what I can do?</h3>-->
              <!--    <div class="faq-content">-->
              <!--        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse <a href="#">[...]</a></p>-->
              <!--    </div>-->
              <!--</li>-->
            </ul>
          </div>


        </div>

        <div class="col-lg-6 ptb-50" style="border-left: 2px solid;">
          <div class="appointment-content">
            <h3 class="book-heading">Book An &nbsp;<span> Appointment</span> </h3>
            <p style="color:black;">To book an appointment at A.A Hospital, call our dedicated line or use
              our convenient online booking system. Experience the best in eye care services today!</p>

        <form id="customForm" accept-charset='UTF-8' action='https://app.formester.com/forms/91607b7b-3b91-464e-abaf-15bd13acc1a5/submissions' method='POST'>
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Your Phone" required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <input type="text" name="subject" class="form-control" placeholder="Subject To Request" required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="form-group">
                    <input name="datetimepicker" type="date" class="form-control" placeholder="Appointment Date" required>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="form-group">
                    <textarea name="message" rows="8" class="form-control" placeholder="Write Message" required></textarea>
                </div>
            </div>

            <div class="col-lg-12">
                <button type="submit" class="btn common-btn">
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
  </div>
  <!-- End Appointment -->

  <!-- News and Media -->
  <!--<section class="blog-area pt-100 pb-70">-->
  <!--  <div class="container">-->
  <!--    <div class="section-title">-->
  <!--      <div class="top">-->
  <!--        <span class="top-title">News & Media</span>-->
  <!--        <span class="sub-title">News & Media</span>-->
  <!--      </div>-->
  <!--      <h2>News & Media</h2>-->
  <!--    </div>-->
  <!--    <div class="row justify-content-center">-->

  <!--      <div class="col-lg-4 col-sm-6">-->
  <!--        <div class="blog-item">-->
  <!--          <div class="top">-->
  <!--            <a href="#">-->
  <!--              <img src="assets/images/thumbnail.jpg" alt="Blog">-->
  <!--            </a>-->
  <!--          </div>-->
  <!--          <div class="bottom">-->
  <!--            <h3>-->
  <!--              <a href="#">Why Do People Get Kidney Stones In The Summer?</a>-->
  <!--            </h3>-->
  <!--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>-->
  <!--            <ul>-->
  <!--              <li>-->
  <!--                <span>june 5, 2024</span>-->
  <!--              </li>-->

  <!--            </ul>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--      <div class="col-lg-4 col-sm-6">-->
  <!--        <div class="blog-item">-->
  <!--          <div class="top">-->
  <!--            <a href="#">-->
  <!--              <img src="assets/images/thumbnail.jpg" alt="Blog">-->
  <!--            </a>-->
  <!--          </div>-->
  <!--          <div class="bottom">-->
  <!--            <h3>-->
  <!--              <a href="#">How Technology Can Help You To Stay Safe & Healthy?</a>-->
  <!--            </h3>-->
  <!--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>-->
  <!--            <ul>-->
  <!--              <li>-->
  <!--                <span>june 6, 2024</span>-->
  <!--              </li>-->

  <!--            </ul>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--      <div class="col-lg-4 col-sm-6">-->
  <!--        <div class="blog-item">-->
  <!--          <div class="top">-->
  <!--            <a href="#">-->
  <!--              <img src="assets/images/thumbnail.jpg" alt="Blog">-->
  <!--            </a>-->
  <!--          </div>-->
  <!--          <div class="bottom">-->
  <!--            <h3>-->
  <!--              <a href="#">7 Tips For Boosting Immune System & Eye Health</a>-->
  <!--            </h3>-->
  <!--            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>-->
  <!--            <ul>-->
  <!--              <li>-->
  <!--                <span>june 7, 2024</span>-->
  <!--              </li>-->

  <!--            </ul>-->
  <!--          </div>-->
  <!--        </div>-->
  <!--      </div>-->

  <!--    </div>-->
  <!--  </div>-->
  <!--</section>-->
  <!-- News and Media -->

  <?php include('footer.php');?>
  
 

 

</body>

</html>