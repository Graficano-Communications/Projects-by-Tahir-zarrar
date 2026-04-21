<?php $__env->startSection('title', 'Events'); ?>


<?php $__env->startSection('content'); ?>



   <!--=================================
    inner banner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('images/header-inner/03.jpg');">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-8">
            <div class="header-inner-title text-center">
              <h1 class="text-white font-weight-normal">Events</h1>
              <p class="text-white mb-0">Introspection is the trick. Understand what you want, why you want it and what it will do for you. This is a critical factor.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    inner banner -->

    <!--=================================
    Blog -->
    <section class="space-ptb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <?php if(count($events)): ?>
              <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="blog-post mb-4 mb-lg-5">
              <div class="blog-post-image">
                <img class="img-fluid" src="<?php echo e(asset('images/events/'.$event->image)); ?>" alt="">
              </div>
              <div class="blog-post-content">
                <div class="blog-post-info">
                  <div class="blog-post-author">
                    <a href="#" class="btn btn-light-round btn-round text-primary"><?php echo e($event->location); ?></a>
                  </div>
                  <div class="blog-post-date">
                    <a href="#"> <?php echo e(\Carbon\Carbon::parse($event->start_date)->format('d M Y ')); ?> </a>
                  </div>
                </div>
                <div class="blog-post-details">
                  <h5 class="blog-post-title">
                    <a href="blog-detail.html"><?php echo e($event->title); ?></a>
                  </h5>
                  <p><?php echo $event->description; ?></p>
                </div>
              </div>
            </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
             <h1>Coming Soon ... !</h1>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Blog -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>