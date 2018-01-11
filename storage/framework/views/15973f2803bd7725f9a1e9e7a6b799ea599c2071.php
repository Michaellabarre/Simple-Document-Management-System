<?php if($paginator->lastPage() > 1): ?>
<div class="ui right floated pagination menu">
	<a class="<?php echo e(($paginator->currentPage() == 1) ? 'disabled icon item' : 'icon item'); ?>" href="<?php echo e($paginator->url($paginator->currentPage() - 1)); ?>">
		<i class="left chevron icon"></i>
	</a>
	<?php for($i = 1; $i <= $paginator->lastPage(); $i++): ?>
	<?php if($i <= 5): ?>
	<a href="<?php echo e($paginator->url($i)); ?>" class="<?php echo e(($paginator->currentPage() == $i) ? 'active item' : 'item'); ?>">
		<?php echo e($i); ?>

	</a>
	<?php endif; ?>
	<?php endfor; ?>
	
	<a class="<?php echo e(($paginator->lastPage() == $paginator->currentPage()) ? 'disabled icon item' : 'icon item'); ?>" href="<?php echo e($paginator->url($paginator->currentPage() + 1)); ?>">
		<i class="right chevron icon"></i>
	</a>
</div>
<?php endif; ?>