<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('our-team.index')); ?>">Our Team</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="<?php echo e(route('our-team.update', $team->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="name">Member Name</label>
                            <input type="text" class="form-control" id="name" value="<?php echo e($team->name); ?>" name="name" required placeholder="Enter member name">
                        </div>

                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" id="designation" value="<?php echo e($team->designation); ?>" name="designation" required placeholder="e.g. Web Developer">
                        </div>

                        <div class="form-group">
                            <label for="image">New Image</label>
                            <input type="file" class="form-control-file" name="image" id="image">
                            <input type="hidden" name="old_img" value="<?php echo e($team->image); ?>"><br>
                            <img src="<?php echo e(asset('images/' . $team->image)); ?>" class="img-fluid" style="max-width: 200px;">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
          
       </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>