<?php $__env->startSection('title', 'Media'); ?>

<?php $__env->startSection('content'); ?>

    <!--=================================
            inner banner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('images/header-inner/02.jpg');">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="header-inner-title text-center">
                        <h1 class="text-white font-weight-normal">Our Departments</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
            inner banner -->


    <!--=================================
        About -->
        <!--=================================
        About -->
    <section class="space-pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section-title text-center">
                        <h2>Our Departments</h2>
                        <p style="text-align: justify;">At Euro Bags International, we regularly participate in global exhibitions and trade fairs to explore the latest fabrics, machinery, and manufacturing techniques. Our goal is to bring fresh ideas and modern solutions to our customers, ensuring that every product we deliver stays ahead of industry trends.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
        About -->
   <section class="space-pb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <nav>
                    <div class="nav nav-tabs nav-tabs-02 justify-content-center" id="nav-tab" role="tablist">
                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a class="nav-item nav-link <?php echo e($key == 0 ? 'active' : ''); ?>"
                               id="nav-<?php echo e($department->id); ?>-tab"
                               data-toggle="tab"
                               href="#nav-<?php echo e($department->id); ?>"
                               role="tab"
                               aria-controls="nav-<?php echo e($department->id); ?>"
                               aria-selected="<?php echo e($key == 0 ? 'true' : 'false'); ?>">
                                <?php echo e($department->name); ?>

                            </a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </nav>

                <div class="tab-content mt-5" id="nav-tabContent">
                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="tab-pane fade <?php echo e($key == 0 ? 'show active' : ''); ?>"
                             id="nav-<?php echo e($department->id); ?>"
                             role="tabpanel"
                             aria-labelledby="nav-<?php echo e($department->id); ?>-tab">

                            <div class="row">
                                <?php
                                    $images = json_decode($department->images, true);
                                ?>
                                <?php if(!empty($images)): ?>
                                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-lg-6 col-md-5 mt-3">
                                            <img class="img-fluid"
                                                 src="<?php echo e(asset('images/departments/' . $img)); ?>"
                                                 alt="<?php echo e($department->name); ?>">
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <div class="col-12 text-center">
                                        <p>No images available for <?php echo e($department->name); ?></p>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

    <!--=================================
        About -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>