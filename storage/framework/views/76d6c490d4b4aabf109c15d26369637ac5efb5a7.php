<?php $__env->startSection('header'); ?>
	<div class="ui segment">
		<div class="ui grid">
			  <div class="one column row">
			    <div class="left floated column">
			    	<div class="column">
						<h2 class="ui header">
						    <i class="file archive outline icon"></i>
						    <div class="right content">
						     	PROJECT PROCUREMENT AND MANAGEMENT SERVICES
						      	<div class="sub header">End-user/unit: ITMS-Information Technology Division</div>
						    </div>
						</h2>
			  		</div>
			    </div>

			  </div>
	 	</div>	
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="sixteen wide column" id="ppmpform">
		<?php echo $__env->make('ppmp.showppmpdynatable', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript" src="<?php echo e(asset('/js/vue-resource.min.js')); ?>"></script>
	<script type="text/javascript">
        Vue.http.headers.common['X-CSRF-TOKEN'] = '<?php echo e(csrf_token()); ?>';
        window._form = <?php echo $data->toJson(); ?>;
  
		function colourFunction(val) {
			var myselect = document.getElementById(val),
			colour = myselect.options[myselect.selectedIndex].value;
			switch (colour) {
			    case '1':
			       document.getElementById(val).style.backgroundImage = "url('<?php echo e(asset('img/colorcoding/White.png')); ?>')"; 
			       document.getElementById(val).style.backgroundSize = "100% 100%"; 
			        break;
			    case '2':
			       document.getElementById(val).style.backgroundImage = "url('<?php echo e(asset('img/colorcoding/green.png')); ?>')"; 
			       document.getElementById(val).style.backgroundSize = "100% 100%"; 
			        break;
			    case '3':
			       document.getElementById(val).style.backgroundImage = "url('<?php echo e(asset('img/colorcoding/Yellow.png')); ?>')"; 
			       document.getElementById(val).style.backgroundSize = "100% 100%"; 
			        break;
			    case '4':
			       document.getElementById(val).style.backgroundImage = "url('<?php echo e(asset('img/colorcoding/Blue.png')); ?>')"; 
			       document.getElementById(val).style.backgroundSize = "100% 100%"; 			        
			       break;
			    case '5':
			       document.getElementById(val).style.backgroundImage = "url('<?php echo e(asset('img/colorcoding/Red.png')); ?>')"; 
			       document.getElementById(val).style.backgroundSize = "100% 100%"; 
			        break;
			    case '6':
			        document.getElementById(val).style.backgroundImage = "url('<?php echo e(asset('img/colorcoding/GreenYellow.png')); ?>')"; 
			       	document.getElementById(val).style.backgroundSize = "100% 100%"; 
			        break;
			    case '7':
			        document.getElementById(val).style.backgroundImage = "url('<?php echo e(asset('img/colorcoding/YellowBlue.png')); ?>')"; 
			       	document.getElementById(val).style.backgroundSize = "100% 100%"; 
			        break;
			    case '8':
			        document.getElementById(val).style.backgroundImage = "url('<?php echo e(asset('img/colorcoding/BlueRed.png')); ?>')"; 
			       	document.getElementById(val).style.backgroundSize = "100% 100%"; 
			        break;					        			        			        
			}
		}
	</script>
	<script type="text/javascript" src="<?php echo e(asset('js/Controller/ppmpcontroller.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>