<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('our-departments.index')); ?>">Departments</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="<?php echo e(route('our-departments.update', $department->id)); ?>" method="post" enctype="multipart/form-data">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="name">Department Name</label>
                            <input type="text" class="form-control" id="name" value="<?php echo e($department->name); ?>" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"><?php echo e($department->description); ?></textarea>
                        </div>

                        <!-- Old Images -->
                        <div class="form-group">
                            <label>Existing Images</label>
                            <div class="row">
                                <?php if($department->images): ?>
                                    <?php $__currentLoopData = json_decode($department->images, true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-3 text-center mb-3">
                                            <img src="<?php echo e(asset('images/departments/' . $img)); ?>" class="img-fluid mb-2" style="max-width:150px; height:auto;">
                                            <div>
                                                <input type="checkbox" name="remove_images[]" value="<?php echo e($img); ?>"> Remove
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        </div>

                        <!-- New Images -->
                        <div class="form-group">
                            <label for="images">Add New Images</label>
                            <input type="file" class="form-control-file" name="images[]" id="images" multiple>
                            <small class="text-muted">You can select multiple images</small>
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