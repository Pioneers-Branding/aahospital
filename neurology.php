<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!--=== Meta Tags ===-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=== Essential CSS ===-->
    <?php include('header-link.php'); ?>

    <!--=== Title & Favicon ===-->
    <title>Neurology at A.A Hospitals</title>
  </head>
  <style>
  
     .ptb-100 {
       
        padding-bottom: 10px !important;
    }
  
  @media only screen and (max-width: 767px) {
    .ptb-100 {
        padding-top: 50px;
        padding-bottom: 0px !important;
    }
    
    .mob-choose{
          margin-top:-60px !important;
      }
      
    .widget-area .widget-item:last-child {
    margin-bottom: 30px !important;
    }
}
  
    /*######Our Core value-css##   */
    
    .sidebar-mob{
        display:none;
    }

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

    .choose-area {
      background-color: #fff !important;
    }

    .faq-area .faq-item {
      margin: auto !important;
    }

    .faq-head {
      background: #f0f7ff;

      padding-top: 7px;
      padding-bottom: 7px;
    }
    .image-container {
      width: 100% !important;
      height: 90% !important;
      transition: transform 0.6s !important;
    }
    .image-container:hover {
      transform: scale(0.9) !important;
    }

    blockquote {
      padding: 20px;
      /*box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px,*/
      /*  rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;*/
      /* margin-top: 27px !important; */
      border-radius: 10px !important;
    }
    
    .consult {
        box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px,
        rgba(14, 30, 37, 0.32) 0px 2px 16px 0px !important;
    }
    blockquote {
      margin: 0 0 1rem;
    }

    .flaticon {
      display: inline-block;
      width: 50px;
      height: 50px;
      line-height: 50px;
      text-align: center;
      font-size: 25px;
      /*border-radius: 10px;*/
      color: #f89f1d;
      /*background-color: #fff;*/
      /*box-shadow: 0 0 20px 0 #e5f9fd;*/
      transition: 0.5s;
      position: absolute;
      top: 0;
      left: 0;
    }
    
    .top-title{
        opacity:0.4 !important;
    }

    @media only screen and (max-width: 767px) {
      .desk {
        display: none;
      }

      .mob-img {
        margin-top: 87px !important;
      }
      
      .image-container{
            border-radius:20px;
        }

      .pt-new-100 {
        padding-top: 0px;
      }
      .flaticon {
        display: none !important;
      }
      .choose-area .choose-content ul li {
        padding-left: 0px !important;
      }
      .sidebar-mob{
            display:block;
        }
        .sidebar-desk{
            display:none;
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
            <img class="desk-img" src="assets/images/banner/Neurology Care.jpg"/>
          </div>
          <div class="mob">
            <img class="mob-img" src="assets/images/banner/neurology-mobile-banner.jpg" />
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Title -->

    <div class="service-details-area ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="details-item">
              <img
                class="image-container"
                src="assets/images/Comprehensive Neurology Care.webp"
                alt="Details"
              />

              <blockquote>
                <p>
                  Welcome to A.A Hospitals, where we provide comprehensive neurology services to diagnose, treat, and manage neurological disorders. Our experienced neurologists are dedicated to offering personalized care using the latest technology and treatment methods. We focus on improving your quality of life by addressing a wide range of neurological conditions with precision and compassion.
                </p>

               
                <h3>What is Neurology?</h3>
                <p>Neurology is the branch of medicine that deals with the diagnosis and treatment of disorders affecting the nervous system, which includes the brain, spinal cord, and nerves. Our neurology department offers specialized care for conditions such as stroke, epilepsy, migraines, multiple sclerosis, and neurodegenerative diseases.
                </p>
               
    
                  <h2 class="mt-5">Comprehensive Patient Care</h2>
                  <ul>
                      <li><b>Customized Care Plans: </b> Tailoring treatment strategies to each patient's specific needs and conditions.</li>
                      <li><b>Detailed Consultations: </b>Providing thorough consultations to ensure patients understand their eye conditions and treatment options.</li>
                      <li><b>Holistic Care: </b> Addressing all patient health and well-being aspects to ensure optimal outcomes.</li>
                      <li><b>Post-Treatment Monitoring: </b>Regular follow-up appointments to monitor progress and adjust treatment as needed.</li>
                      <li><b>Vision Rehabilitation Services: </b>Our rehabilitation services are designed to help patients maintain their quality of life.</li>
                 </ul>
              </blockquote>
            </div>
          </div>

          <div class="col-lg-4 sidebar-desk">
            <div class="widget-area">
              <div class="categories widget-item">
                <h3>Categories</h3>
                <ul>
                      <li>
                    <a href="general-medicine" target="_blank" data-abc="true"
                      >General Medicines
                    </a>
                  </li>
                  <li>
                    <a href="ophthalmology" target="_blank" data-abc="true"
                      >Ophthalmology</a
                    >
                  </li>
                  <li>
                    <a href="rhemuatology" target="_blank" data-abc="true"
                      >Rheumatology
                    </a>
                  </li>
                </ul>
              </div>
              <div class="common-doctor-contact widget-item">
                <div class="inner">
                  <i class="bx bxs-phone-call"></i>
                  <a href="tel:+919346736775" data-abc="true">+91 93467 36775</a>
               
                </div>
                <h4>For Emergency Call</h4>
                <p>
                 In case of an eye emergency, call our 24/7 helpline immediately. Our team is ready to provide urgent care and support for any eye-related emergencies.
                </p>
                <a class="common-btn" href="contact" data-abc="true">
                  Book An Appointment
                  <span class="one"></span>
                  <span class="two"></span>
                </a>
              </div>
              <div class="consult widget-item">
                <h3>Get A Consult</h3>
                <form accept-charset='UTF-8' action='https://app.formester.com/forms/91607b7b-3b91-464e-abaf-15bd13acc1a5/submissions' method='POST'>
                  <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Your Email</label>
                    <input type="email" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Your Phone</label>
                    <input type="text" class="form-control" />
                  </div>
                     <div class="form-group">
                    <label>Select Type Of Service</label>
                    <select style="display: none">
                      <option>Select a Service </option>
                      <option>General Medicine</option>
                      <option>Ophthalmology</option>
                      <option>Neurology</option>
                      <option>Rheumatology</option>
                    </select>
                    <div class="nice-select" tabindex="0">
                      <span class="current">Select a Service </span>
                      <ul class="list">
                        <li
                          data-value="Select a Service "
                          class="option selected"
                        >
                          Select a Service 
                        </li>
                        <li data-value="Option" class="option">General Medicine</li>
                        <li data-value="Another ption" class="option">Ophthalmology</li>
                        <li data-value="Another ption" class="option">Neurology</li>
                        <li data-value="Another ption" class="option">Rheumatology</li>
                      </ul>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn common-btn">
                      <span class="one"></span>
                      <span class="two"></span>
                      Request For Call Back
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
          <div class="col-lg-12 mob-choose">
              <div class="choose-area pt-50 pb-40 mt-5">
              <div class="container">
                <blockquote>
                  <div class="row align-items-center">
                    <div class="col-lg-12">
                      <div class="choose-content">
                        <div class="section-title">
                          <!--<div class="top">-->
                          <!--<span class="top-title">Choose Us</span>-->
                          <!--<span class="sub-title">Why Choose Us</span>-->
                          <!--</div>-->
                        </div>

                        <div class="row">
                          <h2>Why Choose Neurology at A.A Hospitals?</h2> 
                         
                          <div class="col-lg-6 mt-4">
                            <ul>
                              <li>
                                <!--<i class="flaticon-doctor"></i>-->
                                <!--<img class="flaticon-doctor" src="assets/images/employee-engagement.png">-->
                                <img
                                  class="flaticon"
                                  src="assets/images/employee-engagement.png"
                                />
                                <h3 style="color: #f89f1d">
                                  Expertise and Experience
                                </h3>
                                <p> At A.A Hospitals, our team of highly qualified internists specializes in diagnosing and treating a wide range of medical conditions. Their extensive experience ensures precise and effective care tailored to each patient.</p>
                              </li>
                              <li>
                                <img
                                  class="flaticon"
                                  src="assets/images/monitoring.png"
                                />
                                <h3 style="color: #f89f1d">
                                  Advanced Technology
                                </h3>
                                <p>We utilize cutting-edge diagnostic tools and equipment to provide accurate diagnoses. Our advanced technology supports effective treatment plans and better health outcomes.</p>
                              </li>
                            </ul>
                          </div>
                          <div class="col-lg-6  mt-4">
                            <ul>
                              <li>
                                <img
                                  class="flaticon"
                                  src="assets/images/puzzle.png"
                                />
                                <h3 style="color: #f89f1d">
                                  Comprehensive Care
                                </h3>
                                <p>From routine check-ups to managing chronic diseases, we offer personalized care plans. Our holistic approach ensures all aspects of your health are addressed.</p>
                              </li>
                              <li>
                                <img
                                  class="flaticon"
                                  src="assets/images/clinic9.png"
                                  style="width: 65px; height: 75px"
                                />
                                <h3 style="color: #f89f1d">
                                  Patient-Centered Approach
                                </h3>
                                <p>Patient satisfaction and comfort are our top priorities. Our compassionate staff provides clear explanations and supports patients throughout their healthcare journey.</p>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>

            <div class="service-details-area" style="margin-top:-20px">
              <div class="container">
                <div class="row">
                  <blockquote>
                  <div class="col-lg-12">
                      <h2>Comprehensive Neurology Services</h2>
                  <div class="details-item">
                  <h3>Stroke Management</h3>
                  <p>Stroke is a medical emergency that requires prompt diagnosis and treatment to minimize brain damage and improve recovery outcomes. We offer comprehensive stroke management services, including:</p>
                  
                      <ul>
                          <li><b>Acute Treatment:  </b>Rapid diagnosis and intervention to restore blood flow to the brain.</li>
                          <li><b>Rehabilitation:  </b> Physical therapy, occupational therapy, and speech therapy to help patients recover function and independence.</li>
                          <li><b>Preventive Strategies: </b> Identifying and managing risk factors to prevent future strokes.</li>
                      </ul>
                      
                      <h3>Epilepsy Treatment</h3>
                      <p>Epilepsy is a neurological disorder characterized by recurrent seizures. Our epilepsy treatment services include:</p>
                      <ul>
                          <li><b>Diagnostic Testing: </b>EEG, MRI, and other tests to identify the type and cause of seizures.</li>
                          <li><b>Medication Management: </b>  Prescribing and monitoring anti-seizure medications to control seizures effectively.</li>
                          <li><b>Surgical Options: </b>  For patients who do not respond to medication, we offer surgical interventions to reduce or eliminate seizures.</li>
                      </ul>
                      
                      
                      <h3>Headache and Migraine Management</h3>
                      <p>Chronic headaches and migraines can significantly impact quality of life. We provide specialized care for headache and migraine management, including:</p>
                      <ul>
                          <li><b>Diagnosis: </b> Identifying the underlying causes of headaches and migraines through comprehensive evaluations.</li>
                          <li><b>Treatment Plans: </b>Personalized treatment plans that may include medications, lifestyle changes, and alternative therapies.</li>
                          <li><b>Preventive Care: </b>Strategies to reduce the frequency and severity of headaches and migraines.</li>
                      </ul>
                      
                      <h3>Neurodegenerative Diseases</h3>
                      <p>Neurodegenerative diseases, such as Alzheimer's, Parkinson's, and ALS, require specialized care to manage symptoms and slow disease progression. Our services include:</p>
                      <ul>
                          <li><b>Comprehensive Evaluation: </b>Detailed assessments to diagnose neurodegenerative diseases early.</li>
                          <li><b>Multidisciplinary Care: </b> Collaborating with specialists in neurology, physical therapy, occupational therapy, and speech therapy to provide holistic care.</li>
                          <li><b>Support Services: </b>Providing resources and support for patients and their families to manage the challenges of neurodegenerative diseases.</li>
                      </ul>
                  
                  </div>
                  </div>
              </blockquote>
      
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
        <!-- Client -->
  <section class="testimonials-area ptb-100 mt-5">
    <div class="testimonials-img">
      <img src="assets/images/testimonial-7.png" alt="Testimonials">
    </div>
    <div class="container">
      <div class="section-title">
        <div class="top">
          <span class="top-title">Testimonials</span>
          <span class="sub-title">Testimonials</span>
        </div>
        <h2 style="color: #fff;">What Our <span style="color: #f89f1d;">Patients</span> Say About Us</h2>
      </div>
      <div class="testimonials-slider owl-theme owl-carousel">

        <div class="testimonials-item">
          <div class="top">
            <img src="assets/images/google.png" alt="Testimonials">
            <h3>Hari Kamal</h3>
            <!--<span>Businessman</span>-->
          </div>
          <p>I recently had a wonderful experience at A.A. Hospitals. The doctors and staff provided excellent treatment and care. The facilities were top notch and the entire process was smooth and efficient. I highly recommend this hospital for anyone seeking quality health care in eluru.</p>
          <ul>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
          </ul>
          <i class="flaticon-straight-quotes icon"></i>
        </div>

        <div class="testimonials-item">
          <div class="top">
            <img src="assets/images/google.png" alt="Testimonials">
            <h3>Soma Sekhar Mokkapati</h3>
            <!--<span>Manager</span>-->
          </div>
          <p>I was retired from HPCL and back to my native place,  Eluru. Last week,  I went to Dr A S Ram for eye checkups. I am very happy to observe, the empathy and decades of experience of Ram garu. I was surprised to find the latest equipment and well trained staff at low charges - without any "commercial elements" A.A. Hospital is a hidden jem in our Eluru</p>
          <ul>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
          </ul>
          <i class="flaticon-straight-quotes icon"></i>
        </div>

        <div class="testimonials-item">
          <div class="top">
            <img src="assets/images/google.png" alt="Testimonials">
            <h3>Rupa Sri</h3>
            <!--<span>Engineer</span>-->
          </div>
          <p>They  treated patients friendly nature and respectful hospital alla are to good and I like overall staff also so good</p>
          <ul>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
          </ul>
          <i class="flaticon-straight-quotes icon"></i>
        </div>
        
        
        <div class="testimonials-item">
          <div class="top">
            <img src="assets/images/google.png" alt="Testimonials">
            <h3>Pushkala Ponnuru</h3>
            <!--<span>Engineer</span>-->
          </div>
          <p>Best doctors well experienced doctors. Both Dr Aparna Devi and Dr Ram the treatment also very good</p>
          <ul>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
          </ul>
          <i class="flaticon-straight-quotes icon"></i>
        </div>
        
        <div class="testimonials-item">
          <div class="top">
            <img src="assets/images/google.png" alt="Testimonials">
            <h3>VENKATESWARA RAO REDDY</h3>
            <!--<span>Engineer</span>-->
          </div>
          <p>Very good hospital best treatment and very experience doctors available there.</p>
          <ul>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
            <li>
              <i class='bx bxs-star checked'></i>
            </li>
          </ul>
          <i class="flaticon-straight-quotes icon"></i>
        </div>

      </div>
    </div>
  </section>
  <!-- End Client -->
    

    <div class="appointment-area faq-area ptb-100" style="background: #fff">
      <div class="appointment-shape">
        <div class="container p-0">
          <div class="row m-0">
            <div class="col-lg-12 p-0">
              <div class="faq-item">
                <div class="section-title">
                  <div class="top">
                    <span class="top-title">Questions</span>
                    <span class="sub-title">FAQ</span>
                  </div>
                  <h2 style="color: black">
                    Frequently Asked
                    <span style="color: #f89f1d">Questions</span>
                  </h2>
                </div>
                <ul class="accordion">
                  <li>
                    <h3 class="faq-head active">
                      <span>01</span>What conditions does the neurology department treat?
                    </h3>
                    <div class="faq-content" style="display: block">
                      <p>
                       Our neurology department treats a wide range of neurological conditions, including stroke, epilepsy, migraines, multiple sclerosis, and neurodegenerative diseases.
                      </p>
                    </div>
                  </li>
                  <li>
                    <h3 class="faq-head">
                      <span>02</span>How often should I have a neurological exam?
                    </h3>
                    <div class="faq-content">
                      <p>
                        A neurological exam is recommended if you experience symptoms such as persistent headaches, seizures, memory loss, or any other neurological concerns. Based on your specific condition, regular follow-ups are advised.
                      </p>
                    </div>
                  </li>
                  <li>
                    <h3 class="faq-head">
                      <span>03</span>What are the symptoms of a stroke?
                    </h3>
                    <div class="faq-content">
                      <p>
                       Symptoms of a stroke can include sudden numbness or weakness, especially on one side of the body, confusion, trouble speaking, difficulty seeing, loss of balance, and severe headache.
                      </p>
                    </div>
                  </li>
                  <li>
                    <h3 class="faq-head">
                      <span>04</span>How is epilepsy diagnosed?
                    </h3>
                    <div class="faq-content">
                      <p>
                       Epilepsy is diagnosed through a combination of medical history, physical examination, and diagnostic tests such as EEG and MRI.

                      </p>
                    </div>
                  </li>
                  <li>
                    <h3 class="faq-head">
                      <span>05</span> What treatments are available for neurodegenerative diseases?
                    </h3>
                    <div class="faq-content">
                      <p>
                       Treatments for neurodegenerative diseases include medications to manage symptoms, physical therapy, occupational therapy, speech therapy, and supportive care to maintain quality of life.

                      </p>
                    </div>
                  </li>
                  <li>
                    <h3 class="faq-head">
                      <span>06</span>Can migraines be prevented?
                    </h3>
                    <div class="faq-content">
                      <p>
                        While migraines cannot be completely prevented, their frequency and severity can be reduced through lifestyle changes, medications, and preventive strategies tailored to individual needs.
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
     
    
    <div class="service-details-area ptb-100 sidebar-mob">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget-area">
              <div class="categories widget-item">
                <h3>Categories</h3>
                <ul>
                  <li>
                    <a href="general-medicine" target="_blank" data-abc="true"
                      >General Medicine</a
                    >
                  </li>
                  <li>
                    <a href="ophthalmology" target="_blank" data-abc="true"
                      >Opthalmology
                    </a>
                  </li>
                  <li>
                    <a href="rhemuatology" target="_blank" data-abc="true"
                      >Rheumatology
                    </a>
                  </li>
                </ul>
              </div>
              <div class="common-doctor-contact widget-item">
                <div class="inner">
                  <i class="bx bxs-phone-call"></i>
                  <a href="tel:+919346736775" data-abc="true">+91-93467-36775</a>
                </div>
                <h4>For Emergency Call</h4>
                <p>
                  In case of an eye emergency, call our 24/7 helpline immediately. Our team is ready to provide urgent care and support for any eye-related emergencies.
                </p>
                <a class="common-btn" href="contact" data-abc="true">
                  Book An Appointment
                  <span class="one"></span>
                  <span class="two"></span>
                </a>
              </div>
              <div class="consult widget-item">
                <h3>Get A Consult</h3>
                <form accept-charset='UTF-8' action='https://app.formester.com/forms/91607b7b-3b91-464e-abaf-15bd13acc1a5/submissions' method='POST'>
                  <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" name="name" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Your Email</label>
                    <input type="email" name="email" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Your Phone</label>
                    <input type="text" name="phone" class="form-control" />
                  </div>
                  <div class="form-group">
                    <label>Select Type Of Service</label>
                    <select name="service">
                      <option>Select Service Request</option>
                      <option value="general surgery">General Surgery</option>
                      <option value="ophthalmology">Ophthalmology</option>
                      <option value="neurology">Neurology</option>
                      <option value="rheumatology">Rheumatology</option>
                    </select>
                    <div class="nice-select" tabindex="0">
                      <span class="current">Select Service Request</span>
                      <ul class="list">
                        <li
                          data-value="Select Service Request"
                          class="option selected"
                        >
                          Select Service Request
                        </li>
                        <li data-value="Option" class="option">Option</li>
                        <li data-value="Another ption" class="option">
                          Another ption
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn common-btn">
                      <span class="one"></span>
                      <span class="two"></span>
                      Request For Call Back
                    </button>
                  </div>
                </form>
              </div>
            </div>
                </div>
            </div>
            
        </div>
    </div>

    <?php include('footer.php'); ?>
  </body>
</html>
