<?php $__env->startSection('title', 'Contact Us'); ?>
<?php $__env->startSection('SpecificStyles'); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
async defer>
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<style>
  .map-section {
    background: #f9f9f9; /* soft background */
  }
  .map-wrapper {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  .map-wrapper:hover {
    transform: scale(1.02);
    box-shadow: 0 12px 30px rgba(0,0,0,0.15);
  }
</style>

    <!--=================================
        Header Inner -->
    <section class="header-inner header-inner-menu bg-overlay-black-30"
        style="background-image: url('<?php echo e(asset('images/contactus-banner.jpg')); ?>');">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="header-inner-title text-center">
                        <h1 class="text-white font-weight-normal">Contact us</h1>
                        <p class="text-white mb-0">Drop us a line! We’ll set up a time to chat over the phone or in-person to know more about your business needs. All primary conferences are free of charge.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        Header Inner -->

    <!--=================================
    Contat Form -->
    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-lg-around position-relative pt-5">
          <div class="col-lg-4 col-md-5 mb-4">
            <div class="is-sticky">
              <h4 class="mb-4">Let’s talk about what you want to accomplish and how we can make it happen.</h4>
              <h5 class="text-light">This is the beginning of creating the life that you want to live.</h5>
            </div>
          </div>
          <div class="col-lg-7 col-md-7 pr-lg-5">
            <div class="p-4 p-md-5 bg-white shadow">
              <h3>Need assistance? please fill the form</h3>
              <form class="mt-4 theme-form" >
                <div class="form-group mb-3 ">
                  <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control"id="last-name" placeholder="Last Name">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control" class="form-control" id="email" placeholder="Email Address">
                </div>
                <div class="form-group mb-3">
                  <input type="text" class="form-control" id="review" placeholder="Phone No">
                </div>
                <div class="form-group mb-4">
                  <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Enquiry Description" rows="5"></textarea>
                </div>
                <div class="form-group mb-0">
                  <button type="submit" class="btn btn-primary">Send Massage<i class="fas fa-arrow-right pl-3"></i></button>
                </div>
              </form>
            </div>
          </div>
          <div class="contact-bg-logo">
            <i class="fas fa-comment"></i>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Contat Form  -->



    <!-- Section Start -->
<section class="map-section py-5">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="map-wrapper shadow rounded-3 overflow-hidden">
           <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3365.1997433751167!2d74.4878837!3d32.4940901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391ee9e67adc1787%3A0x6151d52e0a1235b3!2sEURO%20BAGS%20INTERNATIONAL!5e0!3m2!1sen!2s!4v1759476573012!5m2!1sen!2s"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="w-100"
            style="height: 450px; border:0;"
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section Ends -->

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>