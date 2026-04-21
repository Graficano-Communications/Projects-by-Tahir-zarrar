<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row" style="height:600px;text-align:center">
        <div class="col-xl-12 col-md-12 xl-50">
            <h2 style="padding-top:10%"">Welcome to Dashboard</h2>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>