<?php $__env->startSection('content'); ?>
    <!--=================================
        inner banner -->
    <section class="header-inner bg-overlay-black-50" style="background-image: url('<?php echo e(asset('images/blog-banner.jpg')); ?>');">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="header-inner-title text-center">
                        <h1 class="text-white font-weight-normal">Blog</h1>
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
        Blog -->
    <section class="space-ptb">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="blog-post">
                            <div class="blog-post-image">
                                <img class="img-fluid" src="<?php echo e(asset('images/blogs/' . $blog->images)); ?>" alt="">
                            </div>
                            <div class="blog-post-content">
                                <div class="blog-post-info">
                                    <div class="blog-post-author">
                                        <a href="<?php echo e(route('blog_post', $blog->slug)); ?>" class="btn btn-light-round btn-round text-primary">Blog</a>
                                    </div>
                                    <div class="blog-post-date">
                                        <a href="<?php echo e(route('blog_post', $blog->slug)); ?>"><?php echo e(\Carbon\Carbon::parse($blog->created_at)->format('d M Y ')); ?></a>
                                    </div>
                                </div>
                                <div class="blog-post-details">
                                    <h5 class="blog-post-title">
                                        <a href="<?php echo e(route('blog_post', $blog->slug)); ?>"><?php echo e($blog->title); ?></a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>
    <!--=================================
        Blog -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>