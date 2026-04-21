@extends('front-layouts.master')

@section('title', 'About us')


@section('content')

<style>
  :root {
    --red: #f45b69;
    --dark-blue: #53709D;
    --turquoise: #00336B;
    --white: #fff;
  }


  *,
  *::before,
  *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .txt-b{
    font-size: 40px;
    font-weight: bold;
    line-height: 0.9;
    color: #7C7C7C;
    margin-top: 10px;
  }
  .bg-89{
    background-color: #E7ECEF !important;
  }

  .vission-mission {
    background-color: #E1F3FF;
    color: #00336B;
    width: 80px;
    height: 80px;
    line-height: 90px;
    text-align: center;
    font-size: 45px;
    border-radius: 50%;
    margin-bottom: 25px;
  }

  .timeline {
    padding: 50px 20px;
    margin: 0 auto;
    max-width: 1000px;
    color: var(--dark-blue);
  }

  .timeline ol {
    position: relative;
    list-style: none;
  }

  .timeline ol::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 3px;
    height: 100%;
    background: var(--turquoise);
  }

  .timeline ol li .item-inner {
    padding: 20px 180px;
    margin-bottom: 8vh;
  }

  .timeline ol li .time-wrapper {
    position: relative;
    font-size: 4.5rem;
    font-weight: bold;
    line-height: 0.9;
  }

  .timeline ol li .time-wrapper::before,
  .timeline ol li .time-wrapper::after {
    content: "";
    position: absolute;
    background: var(--turquoise);
  }

  .timeline ol li .time-wrapper::before {
    top: 50%;
    left: -210px;
    transform: translateY(-50%);
    width: 0;
    height: 3px;
    transition: width 0.8s linear;
  }

  .timeline ol li .time-wrapper::after {
    top: calc(50% - 8px);
    left: -90px;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    transform: scale(0);
    transform-origin: left center;
    transition: all 0.4s linear;
  }

  .timeline ol li time,
  .timeline ol li .details>* {
    opacity: 0;
    transition: 0.5s;
  }

  .timeline ol li time {
    display: inline-block;
    transform: translateY(-30px);
  }

  .timeline ol li .details>* {
    transform: translateY(30px);
  }

  .timeline ol li .details h3 {
    font-size: 2rem;
    line-height: 1;
    margin: 15px 0;
  }

  /* ANIMATION STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */

  .timeline ol li.in-view .time-wrapper::before {
    width: 120px;
  }

  .timeline ol li.in-view .time-wrapper::after {
    transition-delay: 0.8s;
    transform: scale(1.5);
  }

  .timeline ol li.in-view time,
  .timeline ol li.in-view .details>* {
    opacity: 1;
    transform: none;
  }

  .timeline ol li.in-view time {
    transition-delay: 1.3s;
  }

  .timeline ol li.in-view .details h3 {
    transition-delay: 1.5s;
  }

  .timeline ol li.in-view .details p {
    transition-delay: 1.7s;
  }

  /* MQ STYLES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  @media (max-width: 700px) {
    .timeline ol li .item-inner {
      padding: 20px 40px;
    }

    .timeline ol li .time-wrapper::before {
      display: none;
    }

    .timeline ol li .time-wrapper::after {
      left: -45px;
      transform-origin: center;
    }

    .timeline ol li.in-view .time-wrapper::after {
      transition-delay: 0s;
    }

    .timeline ol li.in-view time {
      transition-delay: 0.5s;
    }

    .timeline ol li.in-view .details h3 {
      transition-delay: 0.7s;
    }

    .timeline ol li.in-view .details p {
      transition-delay: 0.9s;
    }
  }

  .testimony {
    position: absolute;
    bottom: -50px;
    left: -15px;
    border-radius: inherit;
    max-width: 450px;
    animation: moveBounce 4s linear infinite;
    z-index: -1;
  }



  .client-1 {
    background-color: #ffffff;
    border-radius: 10px;
    padding: 25px 30px 25px 25px;
    position: relative;
  }

  .client-1 i {
    color: #E1F3FF;
    position: absolute;
    font-size: 60px;
    right: 30px;
    bottom: 25px;
  }

  .testimonials-text {
    padding-left: 20px;
  }

  .testimonials-text-2 {
    padding-right: 20px;
  }

  /* For elements that should fade in from the left */
  .fade-in-left {
    opacity: 0;
    transform: translateX(-100px);
    /* Move left */
    transition: opacity 1.5s ease-out, transform 1.5s ease-out;
  }

  /* For elements that should fade in from the right */
  .fade-in-right {
    opacity: 0;
    transform: translateX(100px);
    /* Move right */
    transition: opacity 1.5s ease-out, transform 1.5s ease-out;
  }

  /* When elements become visible, reset the transformation */
  .fade-in-left.visible,
  .fade-in-right.visible {
    opacity: 1;
    transform: translateX(0);
    /* Reset to normal position */
  }

  .theme-dark .client-1 p {
    color: black !important;
  }

  .wrapper-counter {

    display: flex;
    justify-content: center;
    gap: 60px;
  }

  .container-counter {
    width: 18vmin;
    height: 21vmin;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    padding: 1em 0;
    position: relative;
    font-size: 18px;
    border-radius: 0.5em;
    background-color: #E7ECEF;
    border-bottom: 10px solid #00336B;
    overflow: hidden;
  }

  

  .theme-dark .container-counter {
    background-color: #0e0e0e;
  }



  span.num {
    color: #00336B;
    display: grid;
    place-items: center;
    font-weight: 600;
    font-size: 3em;
  }

  span.text {

    font-size: 1.1em;
    text-align: center;
    pad: 0.7em 0;
    font-weight: 400;
    line-height: 0;
  }

  @media screen and (max-width:1024px) {
    .wrapper-counter {
      padding-left: 20px;
      padding-right: 20px;
    }

    .container-counter {
      height: 20vmin;
      width: 16vmin;
      font-size: 12px;
    }
  }

  @media screen and (max-width: 768px) {
    .wrapper-counter {
      width: 100vw;
      flex-wrap: wrap;
      gap: 30px;
    }

    .container-counter {
      width: 23%;
      height: 25vmin;
      font-size: 13px;
    }
  }

  @media screen and (max-width: 480px) {
    .wrapper-counter {
      gap: 15px;
    }

    .container-counter {
      width: 40%;
      height: 43vmin;
      font-size: 10px;
    }
  }


 

</style>

<!-- Page Banner Area -->
<div class="page-banner-area bg-about">
  <div class="d-table">
    <div class="d-table-cell">
      <div class="container">
        <div class="page-content">
          <h2>About Us</h2>
          <ul>
            <li><a href="/">Home</a></li>
            <li>About Us</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page Banner Area -->

<div class="about-area ptb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-img">
          <div class="main-img">
            <img src="{{ asset('medimax_assets/img/about/About-us.jpg') }}" alt="Image">
            <div class="shape-1">
              <img src="{{ asset('medimax_assets/img/shapes/shape-3.png') }}" alt="Shape">
            </div>
            <div class="shape-2">
              <img src="{{ asset('medimax_assets/img/shapes/shape-3.png') }}" alt="Shape">
            </div>
            <div class="shape-3">
              <img src="{{ asset('medimax_assets/img/shapes/shape-4.png') }}" alt="Shape">
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="about-text">
          <div class="section-title-two">
            <span>About us</span>
            <h2>Leading provider of surgical excellence with precision instruments worldwide</h2>
            <p>Medimax is a trusted name in the B2B surgical instruments industry, dedicated to supplying high-quality tools for healthcare professionals worldwide. We offer a comprehensive range of surgical instruments, including orthopedic, dental, and diagnostic solutions, designed to meet the exacting standards of medical professionals.</p>
          </div>

          <ul>
            <li>
              <i class='bx bx-bone'></i>
              Orthopedic Solutions: Precision-crafted instruments for all orthopedic procedures.
            </li>
            <li>
              <i class='bx bx-knife'></i>
              Dental Solutions: High-quality tools for dental surgeries and treatments.
            </li>
            <li>
              <i class='bx bxs-shield-plus'></i>
              Diagnostic Kits: Reliable diagnostic instruments for accurate healthcare assessments.
            </li>
          </ul>


        </div>
      </div>
    </div>
  </div>
</div>

<!-- Testimonials Area -->
<!-- <div class="testimonials-area bg-color ptb-100">
  <div class="container">
    <div class="testimonials-slider owl-carousel owl-theme">
      <div class="slider-item">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="testimonials-img">
              <img src="{{ asset('medimax_assets/img/testimonials/client-1.jpg') }}" alt="Image">
              <div class="shape">
                <img src="{{ asset('medimax_assets/img/shapes/shape-6.png') }}" alt="Shape">
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="testimonials-text">
              <div class="section-title-two">
                <span>Testimonials</span>
                <h2>Let's check out our clients says & review at a glance</h2>
              </div>

              <div class="client-1">
                
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum".</p>
                <ul>
                  <li>Mikkle Deo</li>
                  <li>CEO, Maxcom Digenetic LTD</li>
                </ul>
                <i class='bx bxs-quote-right'></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      

      
    </div>
  </div>
</div> -->
<!-- End Testimonials Area -->

<!-- Testimonials Area -->
<div class="testimonials-area bg-color pt-100" id="mission-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-5">
        <div class="testimonials-img fade-in-left">
          <img class="tesmoniny-main" src="{{ asset('medimax_assets/img/about/mission.png') }}" alt="Image">
        </div>
      </div>

      <div class="col-lg-7">
        <div class="testimonials-text fade-in-right">
          <div class="section-title-two">
            <span>Our mission</span>
            <h2>At Medimax, our mission is to equip healthcare providers with high-quality surgical instruments</h2>
          </div>

          <div class="client-1">
            <p>"At Medimax, our mission is to equip healthcare providers with high-quality surgical instruments that ensure precision, safety, and improved patient outcomes. We are committed to innovation, reliability, and exceptional customer service, making us a trusted partner in the medical field.".</p>
            <ul>
              <li style="list-style-type: none;">Medimax-instrument</li>
            </ul>
            <i class='bx bxs-quote-right'></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="testimonials-area bg-color ptb-100" id="vision-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="testimonials-text-2 fade-in-left">
          <div class="section-title-two">
            <span>Our vision</span>
            <h2>At Medimax, our vision is to become the leading global provider of innovative healthcare solutions</h2>
          </div>

          <div class="client-1">
            <p>"We aspire to lead the advancement of surgical technology, setting new standards for quality and sustainability in the medical supply industry. Our goal is to continuously support healthcare professionals in delivering the best possible care to their patients.".</p>
            <ul>
              <li style="list-style-type: none;">Medimax-instrument</li>
            </ul>
            <i class='bx bxs-quote-right'></i>
          </div>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="testimonials-img fade-in-right">
          <img class="tesmoniny-main" src="{{ asset('medimax_assets/img/about/vision.png') }}" alt="Image">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Testimonials Area -->
<!-- Choose Area -->
<div class="choose-area pt-100  pb-70">
  <div class="container">


      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="row">
            <div class="col-lg-3 col-sm-6 ">
              <div class="choose-card rounded-3 bg-89">
                <img src="{{ asset('medimax_assets/img/about/key-1.png') }}" class="img-fluid" alt="Countries Icon" >
                  <p class="txt-b">22</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 ">
              <div class="choose-card rounded-3 bg-89">
                <img src="{{ asset('medimax_assets/img/about/key-2.png') }}" class="img-fluid" alt="Countries Icon" >
                  <p class="txt-b">250</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="choose-card rounded-3 bg-89">
                <img src="{{ asset('medimax_assets/img/about/key-3.png') }}" class="img-fluid" alt="Countries Icon" >
                  <p class="txt-b">50</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6">
              <div class="choose-card rounded-3 bg-89">
                <img src="{{ asset('medimax_assets/img/about/key-4.png') }}" class="img-fluid" alt="Countries Icon" >
                  <p class="txt-b">10,000</p>
              </div>
            </div>
          </div>
        </div>
        


      

      </div>
  </div>
</div>
<!-- End Choose Area -->
<div class="wrapper-counter ptb-100">
  <div class="container-counter countries">
    <!-- <span class="num" data-val="50">000</span>
    <span class="text">Countries</span> -->
    <img src="{{ asset('medimax_assets/img/about/countries.png') }}" class="icon-bottom-right" alt="Countries Icon" style="position: absolute;
    bottom: 14px;
    right: 2px;
    width: 100%; 
    height: auto; 
    overflow:hidden;">
  </div>
  <div class="container-counter employees">
    <!-- <span class="num" data-val="250">000</span>
    <span class="text">Employees</span> -->
    <img src="{{ asset('medimax_assets/img/about/employees.png') }}" class="icon-bottom-right" alt="Employees Icon" style="position: absolute;
    bottom: 14px;
    right: 2px;
    width: 100%; 
    height: auto; 
    overflow:hidden;">
  </div>
  <div class="container-counter clients">
    <!-- <span class="num" data-val="300">000</span>
    <span class="text">Clients</span> -->
    <img src="{{ asset('medimax_assets/img/about/clients.png') }}" class="icon-bottom-right" alt="Clients Icon" style="position: absolute;
    bottom: 14px;
    right: 2px;
    width: 100%; 
    height: auto; 
    overflow:hidden;">
  </div>
  <div class="container-counter instruments">
    <!-- <span class="num" data-val="10000">000</span>
    <span class="text">Instruments</span> -->
    <img src="{{ asset('medimax_assets/img/about/instruments.png') }}" class="icon-bottom-right" alt="Instruments Icon" style="position: absolute;
    bottom: 14px;
    right: 2px;
    width: 100%; 
    height: auto; 
    overflow:hidden;">
  </div>
</div>




<!-- Services Area -->
<div class="services-area pt-100 pb-70">
  <div class="container">
    <div class="section-title-one">
      <h2>CSR</h2>
      <span>At Medimax International, we believe in being a responsible company that helps people and the environment. Here are our key areas of focus</span>
    </div>

    <div class="row">
      <div class="col-lg-4 col-sm-6">
        <div class="service-card">
          <i class='bx bx-strikethrough main-icon'></i>
          <h3>Environmental Sustainability</h3>
          <p>We use eco-friendly materials and practices to reduce our impact on the planet.</p>


        </div>
      </div>

      <div class="col-lg-4 col-sm-6">
        <div class="service-card">
          <i class='bx bx-bulb main-icon'></i>
          <h3>Helping Our Community</h3>
          <p>We support local organizations and take part in community service projects.</p>

        </div>
      </div>

      <div class="col-lg-4 col-sm-6">
        <div class="service-card">
          <i class='bx bx-droplet main-icon'></i>
          <h3>Employee Well-being</h3>
          <p>We provide a safe workplace and offer benefits for our employees' well-being.</p>

        </div>
      </div>

      <div class="col-lg-4 col-sm-6">
        <div class="service-card">
          <i class='bx bx-test-tube main-icon'></i>
          <h3>Ethical Sourcing</h3>
          <p>We choose suppliers that treat their workers fairly and responsibly.</p>

        </div>
      </div>

      <div class="col-lg-4 col-sm-6">
        <div class="service-card">
          <i class='bx bx-donate-heart main-icon'></i>
          <h3>Health and Safety First</h3>
          <p>We follow strict safety rules to keep our employees and customers safe.</p>

        </div>
      </div>

      <div class="col-lg-4 col-sm-6">
        <div class="service-card">
          <i class='bx bx-home main-icon'></i>
          <h3>Supporting Healthcare </h3>
          <p>We donate surgical instruments to hospitals and clinics in need.</p>

        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="service-card">
          
          <i class='bx bx-female main-icon'></i>
          <h3>Women Empowerment</h3>
          <p>50% of our workforce comprises talented, empowered, and dedicated women leaders.</p>

        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="service-card">
          <i class='bx bx-leaf main-icon'></i>
          <h3>Green Energy</h3>
          <p>Our operations run 100% on solar energy, championing sustainability and innovation.</p>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Services Area -->

<div class="container">
  <div class="section-title-one">
    <h2>Our Timeline</h2>
  </div>
  <section class="timeline">
    <ol>
      <li>
        <div class="item-inner">
          <div class="time-wrapper">
            <time>1994</time>
          </div>
          <div class="details">
            <h3>Foundation Established</h3>
            <p>Medimax International was founded in Sialkot, Pakistan, by visionary entrepreneur Mr. Muhammad Yaqoob. Starting from a modest two-room setup, the company focused on producing general surgery products.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="item-inner">
          <div class="time-wrapper">
            <time>1998</time>
          </div>
          <div class="details">
            <h3>First Export</h3>
            <p>Medimax made its first international shipment to Belgium, marking the start of its journey toward global recognition.
            </p>
          </div>
        </div>
      </li>
      <li>
        <div class="item-inner">
          <div class="time-wrapper">
            <time>2002</time>
          </div>
          <div class="details">
            <h3>A Family Affair</h3>
            <p>Mr. Khurram Chaudhry, the elder son of Mr. Yaqoob, joined as Managing Director, bringing new leadership and energy to the company.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="item-inner">
          <div class="time-wrapper">
            <time>2005</time>
          </div>
          <div class="details">
            <h3>Commitment to Growth</h3>
            <p>The younger son, Mr. Adil Shahzad, joined as Production Director, further strengthening the family’s dedication to the company's success.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="item-inner">
          <div class="time-wrapper">
            <time>2006</time>
          </div>
          <div class="details">
            <h3>Quality Assurance Milestone</h3>
            <p>Medimax achieved ISO 9001 certification, demonstrating its commitment to producing safe, high-quality surgical instruments.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="item-inner">
          <div class="time-wrapper">
            <time>2012</time>
          </div>
          <div class="details">
            <h3>Advancing Standards</h3>
            <p>The company earned cGMP certification, reinforcing its dedication to global quality and manufacturing standards.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="item-inner">
          <div class="time-wrapper">
            <time>2014</time>
          </div>
          <div class="details">
            <h3>Orthodontic Manufacturing Line</h3>
            <p>Medimax expanded its product offerings by introducing a dedicated manufacturing line for orthodontic products to meet growing demand.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="item-inner">
          <div class="time-wrapper">
            <time>2018</time>
          </div>
          <div class="details">
            <h3>Enhanced Quality Certification</h3>
            <p>Secured ISO 13485 and CE certifications, further ensuring compliance with international standards and strengthening trust with clients worldwide.</p>
          </div>
        </div>
      </li>
      {{-- <li>
        <div class="item-inner">
          <div class="time-wrapper">
            <time>2018</time>
          </div>
          <div class="details">
            <h3>International Partnerships</h3>
            <p>Established partnerships with healthcare organizations to improve access to quality surgical instruments.</p>
          </div>
        </div>
      </li> --}}
      <li>
        <div class="item-inner">
          <div class="time-wrapper">
            <time>2020</time>
          </div>
          <div class="details">
            <h3>Technological Advancements</h3>
            <p>Invested in cutting-edge machinery, including Swiss lathe (Mitsubishi) and CNC Mills (Fanuc), to enhance production capabilities and efficiency.</p>
          </div>
        </div>
      </li>
      <li>
        <div class="item-inner">
          <div class="time-wrapper">
            <time>2024</time>
          </div>
          <div class="details">
            <h3>Innovation & MDR Compliance</h3>
            <p>In 2024, Medimax launched patent-pending LOFTY dental products and partnered with SGS to implement new Medical Device Regulation (MDR) standards.</p>
          </div>
        </div>
      </li>
    </ol>

  </section>
</div>
<!-- Partner Slider Area -->
<div class="partner-area ptb-100">
  <div class="container">
    <div class="section-title-one">
      <h2>Our Compliances</h2>
    </div>
    <div class="container">
      <div class="row justify-content-center align-items-center logos-section">
        <div class="col-3 col-sm-2 col-md-2 col-lg-2 text-center">
          <img src="{{ asset('medimax_assets/img/about/iso.png') }}" class="img-fluid" alt="Logo 1">
        </div>
        <div class="col-3 col-sm-2 col-md-2 col-lg-2 text-center">
          <img src="{{ asset('medimax_assets/img/about/ce.png') }}" class="img-fluid" alt="Logo 5">
        </div>
        <div class="col-3 col-sm-2 col-md-2 col-lg-2 text-center">
          <img src="{{ asset('medimax_assets/img/about/fda.png') }}" class="img-fluid" alt="Logo 4">
        </div>
        <div class="col-3 col-sm-2 col-md-2 col-lg-2 text-center">
          <img src="{{ asset('medimax_assets/img/about/cGMP.png') }}" class="img-fluid" alt="Logo 5">
        </div>
        <div class="col-3 col-sm-2 col-md-2 col-lg-2 text-center">
          <img src="{{ asset('medimax_assets/img/about/chamber.png') }}" class="img-fluid" alt="Logo 3">
        </div>
        <div class="col-3 col-sm-2 col-md-2 col-lg-2 text-center">
          <img src="{{ asset('medimax_assets/img/about/SURGICAL-instruments.png') }}" class="img-fluid" alt="Logo 2">
        </div> 
      </div>
    </div>
  </div>
</div>





<script>
  const targets = document.querySelectorAll(".timeline ol li");
  const threshold = 0.3;
  const ANIMATED_CLASS = "in-view";

  function callback(entries, observer) {
    entries.forEach((entry) => {
      const elem = entry.target;
      if (entry.intersectionRatio >= threshold) {
        elem.classList.add(ANIMATED_CLASS);
        observer.unobserve(elem);
      } else {
        elem.classList.remove(ANIMATED_CLASS);
      }
    });
  }

  const observer = new IntersectionObserver(callback, {
    threshold
  });
  for (const target of targets) {
    observer.observe(target);
  }

  document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    });

    // Target both the image and text elements
    const fadeElements = document.querySelectorAll('.fade-in-left, .fade-in-right');
    fadeElements.forEach(element => {
      observer.observe(element);
    });
  });
  let valueDisplays = document.querySelectorAll(".num");
  let interval = 4000;

  valueDisplays.forEach((valueDisplay) => {
    let startValue = 0;
    let endValue = parseInt(valueDisplay.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function() {
      startValue += 1;
      valueDisplay.textContent = startValue;
      if (startValue == endValue) {
        clearInterval(counter);
      }
    }, duration);
  });
</script>




@endsection