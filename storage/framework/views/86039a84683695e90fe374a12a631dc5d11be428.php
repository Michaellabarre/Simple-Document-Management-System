<?php $__env->startSection('header'); ?>
	<div class="ui segment">
		<div class="ui grid">
			  <div class="four column row">
			    <div class="left floated column">
			    	<div class="column">
						<h2 class="ui header">
						    <i class="file archive outline icon"></i>
						    <div class="right content">
						     	Create PPMP
						      	<div class="sub header">Manage Budget Items</div>
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
		<div class="right floated column">
			<button   @click="create" class="ui blue  button" :disabled="disabled">Save</button>
			<button   @click="addLine"  class="ui red  button" >Cancel</button>
			<button   @click="preview"  class="ui red  button" >preview</button>
		</div>
		<div class="ui  black segment" >
			<?php echo $__env->make('ppmp.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php echo $__env->make('ppmp.ppmpdynatable', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript" src="<?php echo e(asset('/js/vue-resource.min.js')); ?>"></script>
	<script type="text/javascript">
        Vue.http.headers.common['X-CSRF-TOKEN'] = '<?php echo e(csrf_token()); ?>';
        window._form = {
        	year:'2017',
        	enduser:'ITD',
        	operatingprogram_id: [],
            modeofprocurement_id: 0,
            category_id:0,
            fund_id:0,
            code:'',
            generaldesc:'',
            quantity:'',
            estimated_budget:0,
            jan:1,
            feb:1,
            mar:1,
            apr:1,
            may:1,
            june:1,
            july:1,
            aug:1,
            sept:1,
			oct:1,
            nov:1,
            dec:1,
            products: []
        };
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