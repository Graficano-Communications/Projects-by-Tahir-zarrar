<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(route('vimeos.index')); ?>">Reveiws
    -  <small style="color: #eb252a;">count( <?php echo e($reviews->count()); ?> )</small></a></li>
  </ol>
</nav>

 <div class="container">

<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong><?php echo e($message); ?></strong>
</div>
<?php endif; ?>
  <table class="table table-striped bg-white">
  <thead>
    <tr> 
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th>Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="MediaSortable">
    <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr >
      <td> <?php echo e($review->name); ?></td>
      <td><?php echo e($review->email); ?></td> 
      <td><?php echo e($review->title); ?></td> 
      <td><?php echo e($review->description); ?></td> 
      <td><?php if($review->status == 0): ?> Deactivate <?php else: ?> Active <?php endif; ?> <a href="<?php echo e(route('change_status',$review->id)); ?>">Change</a></td>

      <td style="display:flex">
                <form action="<?php echo e(route('review.destroy',$review->id)); ?>" method="post">
                     <?php echo e(method_field('delete')); ?>

                     <?php echo csrf_field(); ?>
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o" ></i></button>
                </form>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
       </div>
    </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>