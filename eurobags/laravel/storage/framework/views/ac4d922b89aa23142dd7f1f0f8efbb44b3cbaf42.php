<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
    
        <div class="col-md-12">
        	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo e(route('pages.index')); ?>">pages</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol> 
</nav>
<div class="panel panel-default">
  <div class="panel-body">
  	  <form action="<?php echo e(route('blogs.update',$blog->id)); ?>" method="post"  enctype="multipart/form-data">
  	  	<?php echo method_field('PUT'); ?>
             <div class="form-group">
              <label for="caption">Title</label>
              <input type="text" class="form-control" id="caption" value="<?php echo e($blog->title); ?>" name="title" required="" aria-describedby="emailHelp" placeholder="baner caption..">
             </div>
            <div class="form-group">
            <label for="image">New Image</label>
            <input type="file" class="form-control-file" name="image" id="image">
            <input type="hidden" name="old_img" value="<?php echo e($blog->images); ?>"><br>
            <img src="<?php echo e(asset('images/blogs/' . $blog->images)); ?>"  class="img-fluid"  >
           
            </div>
          
             <div class="form-group">
              <label for="description">Description</label>
             </div>
             <div class="col-xl-12 col-md-12 editor-space">
                <textarea id="editor1" name="editor1" cols="30" rows="10"><?php echo e($blog->content); ?></textarea>
               </div>
               <hr>
             <h3>SEO Title and Description </h3>
             <hr>
             <div class="form-group">
              <label for="title">Meta Title</label>
              <input type="text" class="form-control" id="meta_title" value="<?php echo e($blog->meta_title); ?>" name="meta_title" required=""placeholder="Enter Meta Title">
             </div>
             <div class="form-group">
              <label for="meta_description">Meta Description</label>
              <textarea type="text" class="form-control" id="meta_description"  name="meta_description" required="" placeholder="Meta Description.."><?php echo e($blog->meta_description); ?></textarea>
             </div>
           
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

<?php $__env->startSection('specificscripts'); ?>
<script>
  CKEDITOR.replace( 'editor1', {
    on: {
        contentDom: function( evt ) {
            // Allow custom context menu only with table elemnts.
            evt.editor.editable().on( 'contextmenu', function( contextEvent ) {
                var path = evt.editor.elementPath();

                if ( !path.contains( 'table' ) ) {
                    contextEvent.cancel();
                }
            }, null, null, 5 );
        }
    },
    filebrowserUploadUrl: "<?php echo e(route('pages.upload', ['_token' => csrf_token() ])); ?>",

    filebrowserUploadMethod: 'form',
} );

  </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>