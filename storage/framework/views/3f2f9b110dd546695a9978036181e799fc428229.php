<?php $__env->startSection('header'); ?>
<div class="ui grid">
  	<div class="sixteen wide column">
	  	<div class="ui teal inverted segment" > <!-- style="background-color: #F7B34D" -->
			<h1 class="ui header" > <!-- style="color: #F6F6F6" -->
			    <i class="home icon" ></i>
			    <div class="content" >
			      Home
			    </div>
			</h1>
		</div>
  	</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="ui grid" id="invoice" >
	<div class="sixteen wide column">
		<div class="ui teal segment">
			<div class="ui form">
			  <div class="field">
			    <label>First Name</label>
			    <input name="first-name" placeholder="First Name" type="text">
			  </div>
			  <div class="field">
			    <label>Last Name</label>
			    <input name="last-name" placeholder="Last Name" type="text">
			  </div>
			  <button  @click="addLine"  class="ui button" type="submit">Add</button>
			</div>
		</div>
	</div>

	<div class="sixteen wide column">
		<table class="ui celled table">
		    <thead>
		        <tr>
		            <th>First Name</th>
		            <th>Last Name</th>
		        </tr>
		    </thead>
		    <tbody>
		        <tr v-for="product in form.products">
		            <td>
		                <input class="table-control" v-model="product.firstname">
		            </td>
		            <td>
		                <input type="text" class="table-control"  v-model="product.lastname">
		            </td>
		            <td class="table-remove">
		                <span @click="remove(product)" class="table-remove-btn">&times;</span>
		            </td>
		        </tr>
		    </tbody>
		</table>
	</div>

</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript" src="<?php echo e(asset('js/vue.js')); ?>"></script> 
    <script type="text/javascript">
        Vue.http.headers.common['X-CSRF-TOKEN'] = '<?php echo e(csrf_token()); ?>';

     
        window._form = {
            products: [{
                name: '',
                price: 0,
                qty: 1
            }]
        };
    </script>            
    <script type="text/javascript" src="<?php echo e(asset('js/Controller/app.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>