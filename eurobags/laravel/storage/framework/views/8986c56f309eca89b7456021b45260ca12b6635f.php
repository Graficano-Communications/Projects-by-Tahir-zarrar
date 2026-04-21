<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(route('banners.index')); ?>">Banners</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>
<div class="panel panel-default">
  <div class="panel-body">
  	  <form action="<?php echo e(route('banners.store')); ?>" method="post"  enctype="multipart/form-data">
             <div class="form-group">
              <label for="caption">Caption</label>
              <input type="text" class="form-control" id="caption" name="caption" required="" aria-describedby="emailHelp" placeholder="baner caption..">
              <small id="emailHelp" class="form-text text-muted">Text that you want to apear on banner.</small>
             </div>
             <div class="form-group">
              <label for="caption">Link</label>
              <input type="text" class="form-control" id="link" name="link" required="" aria-describedby="emailHelp" placeholder="https//cashop.com.....">
              <small id="emailHelp" class="form-text text-muted">link that you want to redirect on banner button.</small>
             </div>

            <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" name="image" id="image">
            </div>
           <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-primary">Submit</button>
           </form>
  </div>
</div>
          
       </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>