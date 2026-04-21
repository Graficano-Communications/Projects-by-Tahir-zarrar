<?php $__env->startSection('title', 'Media'); ?>

<?php $__env->startSection('content'); ?>

    <!--=================================
            inner banner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('images/header-inner/02.jpg');">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="header-inner-title text-center">
                        <h1 class="text-white font-weight-normal">Media</h1>
                        <p class="text-white mb-0">The sad thing is the majority of people have no clue about what they truly
                            want. They have no clarity. When asked the question</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================================
            inner banner -->


    <!--=================================
        About -->
    <section class="space-ptb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <nav>
                        <div class="nav nav-tabs nav-tabs-02 justify-content-center" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-one-tab" data-toggle="tab" href="#nav-one"
                                role="tab" aria-controls="nav-one" aria-selected="true">Images</a>
                            <a class="nav-item nav-link" id="nav-tow-tab" data-toggle="tab" href="#nav-tow" role="tab"
                                aria-controls="nav-tow" aria-selected="false">Videos</a>
                        </div>
                    </nav>

                    <div class="tab-content mt-5" id="nav-tabContent">

                        <!-- E-commerce Solution (images from $medias) -->
                        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                            <div class="row">
                                <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-6 col-md-5">
                                        <img class="img-fluid" src="<?php echo e(asset('images/media/' . $media->image)); ?>"
                                            alt="media">
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                        <!-- Digital Strategy (videos from $vimeos) -->
                        <div class="tab-pane fade" id="nav-tow" role="tabpanel" aria-labelledby="nav-tow-tab">
                            <div class="row align-items-center">
                                <?php $__currentLoopData = $vimeos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vimeo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-md-6 mt-4 mt-md-0">
                                        <iframe height="305" width="100%"
                                            src="https://www.youtube.com/embed/<?php echo e(substr($vimeo->link, strpos($vimeo->link, '=') + 1)); ?>"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--=================================
        About -->



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>