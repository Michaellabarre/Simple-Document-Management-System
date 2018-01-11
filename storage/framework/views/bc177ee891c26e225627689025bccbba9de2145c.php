
  <tfoot>
    <tr><th colspan="10">
      <div class="ui right floated pagination menu">
        <?php if($paginator->hasPages()): ?>
    
        
        <?php if($paginator->onFirstPage()): ?>
            <a class=" item disabled"><span>&laquo;</span></a>
        <?php else: ?>
            <a class="item" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev">&laquo;</a>
        <?php endif; ?>
        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <a class="item disabled"><span><?php echo e($element); ?></span></a>
            <?php endif; ?>
            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <a class="item active"><span><?php echo e($page); ?></span></a>
                    <?php else: ?>
                        <a class="item" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <a class="item" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next">&raquo;</a>
        <?php else: ?>
            <a class="item disabled"><span>&raquo;</span></a>
        <?php endif; ?>
   
<?php endif; ?>
      </div>
    </th>
  </tr></tfoot>
