<nav aria-label="Page navigation">
                <?php if($paginator->hasPages()): ?>
                    <ul class="pagination">
                    
                    <?php if($paginator->onFirstPage()): ?>
                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="<?php echo app('translator')->getFromJson('pagination.previous'); ?>"><span
                                    aria-hidden="true"><i
                                        class="fa fa-chevron-left"
                                        aria-hidden="true"></i></span> <span
                                    class="sr-only">Previous</span></a></li>
                    <?php else: ?>
                    <li class="page-item disabled"><a class="page-link" href="<?php echo e($paginator->previousPageUrl()); ?>" aria-label="<?php echo app('translator')->getFromJson('pagination.previous'); ?>"><span
                                    aria-hidden="true"><i
                                        class="fa fa-chevron-left"
                                        aria-hidden="true"></i></span> <span
                                    class="sr-only">Previous</span></a></li>
                    <?php endif; ?>
                    
                     <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                       <?php if(is_string($element)): ?>
                        <li class="page-item disabled"><a class="page-link" href="#"><?php echo e($element); ?></a></li>
                        <?php endif; ?>
 
                       
                        <?php if(is_array($element)): ?>
                        <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <?php if($page == $paginator->currentPage()): ?>

                        <li class="page-item active"><a class="page-link" href="#"><?php echo e($page); ?></a></li> 
                    <?php else: ?>
                        <li class="page-item"><a class="page-link" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    
                    <?php if($paginator->hasMorePages()): ?>
                        <li class="page-item"><a class="page-link" href="<?php echo e($paginator->nextPageUrl()); ?>" aria-label="<?php echo app('translator')->getFromJson('pagination.next'); ?>"><span aria-hidden="true"><i
                                        class="fa fa-chevron-right"
                                        aria-hidden="true"></i></span> <span
                                    class="sr-only">Next</span></a></li>
                    <?php else: ?>      
                    <li class="page-item disabled"><a class="page-link" href="#" aria-label="<?php echo app('translator')->getFromJson('pagination.next'); ?>"><span aria-hidden="true"><i
                                        class="fa fa-chevron-right"
                                        aria-hidden="true"></i></span> <span
                                    class="sr-only">Next</span></a></li>
                    <?php endif; ?>
                    </ul>
                    <?php endif; ?>

                </nav>