<?php $__env->startSection('title',  $page->meta_title ); ?>
<?php $__env->startSection('description', $page->meta_description ); ?>
<?php $__env->startSection('keywords',  $page->meta_description ); ?>
<?php $__env->startSection('content'); ?>
 <!-- breadcrumb start-->
 <div class="breadcrumb-section pt-4">
        <div class="container">
            <div class="row justify-content-end">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo e($page->title); ?></li>
                        </ol>
                    </nav>
            </div>
        </div>
    </div>
    <!-- breadcrumb end-->

<!--section start-->
<section class="blog-detail-page section-b-space ratio2_3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 blog-detail"><img src="<?php echo e(asset('images/blogs/' . $page->image)); ?>"
                        class="img-fluid blur-up lazyload" alt="">
                    <h3><?php echo e($page->title); ?></h3>
                    <?php echo $page->content; ?>

                </div>
            </div>
           
        </div>
    </section>
    <!--Section ends-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>