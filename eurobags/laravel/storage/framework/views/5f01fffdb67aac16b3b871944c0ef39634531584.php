<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center"> 
       
        <div class="col-md-12">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
    <li class="breadcrumb-item active"><a href="<?php echo e(route('events.index')); ?>">Events -  <small style="color: #eb252a;">count( <?php echo e($events->count()); ?> )</small></a></li>
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
      <th scope="col">#</th>   
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Location</th>
      <th scope="col">Date Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody id="EventSortable">
    <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr id="<?php echo e($event->id); ?>">
      <td class="handle"><a class="btn" style="cursor:move"><i class="fa fa-align-justify"></i></a></td>
      <td><img src="<?php echo e(asset('images/events/' . $event->image)); ?>"  class="img-resposive" height="100px" ></td>
      <td><?php echo e($event->title); ?></td>
      <td><?php echo e($event->description); ?></td> 
      <td><?php echo e($event->location); ?></td>
      <td><?php echo e(\Carbon\Carbon::parse($event->date_time)->format('d M Y ')); ?></td>
      <td style="display: flex">
        <a href="<?php echo e(route('events.edit',$event->id)); ?>"><button class="btn btn-success" type="button"><i class="fa fa-pencil" ></i></button></a>
                <form action="<?php echo e(route('events.destroy',$event->id)); ?>" method="post">
                     <?php echo e(method_field('delete')); ?>

                     <?php echo csrf_field(); ?>
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">
                      <i class="fa fa-trash-o" ></i></button>
                </form>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
       </div>
    </div>
    <input type="hidden" name="_token" id="csrf-token" value="<?php echo e(Session::token()); ?>" />
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('specificscripts'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
}); 

  $( "#EventSortable" ).sortable({
     
        delay: 150,
        stop: function() {
            var selectedData = new Array();
            $('#EventSortable>tr').each(function() {
                selectedData.push($(this).attr("id"));
            });
            updateOrder(selectedData);
        }
    }); 
});

function updateOrder(data) {
      var token = document.getElementById('csrf-token').value;
      var ajaxurl = '<?php echo e(route('sort_event')); ?>';
      var data = {'data' : data , '_token' : token};
      // console.log(data);
        $.ajax({
            url:ajaxurl,
            type:'post',
            data:data,
            success:function(data){
               // console.log(data);
                // alert('your change successfully saved');
            }
        })
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>