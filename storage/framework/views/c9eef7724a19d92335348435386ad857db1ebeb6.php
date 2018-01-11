<form  class="ui form" >
	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<div class="field">
	    <div class="two fields">		    
	     	<div class="field">
	      		<label>Year</label>
	        	<input v-model="form.year" name="year" type="text" value="2017" readonly="">
	     	 </div>
	      	<div class="field">
		      	<label>EndUser</label>
		        <input v-model="form.enduser"  type="text" value="Information Technology Division" readonly="">
	      </div>
	    </div>
	</div>
	<div class="field">
	    <div class="two fields">
	     	 <div class="field">
				<label>Operating Program</label>
				<select id="operatingprogram"  class="ui dropdown" multiple="" v-model="form.operatingprogram_id"> 
					<option value="0">Select Operating Program</option>
					<option value="1">MOOE</option>
					<option value="2">InActive</option>
				</select>
			</div>
	      	<div class="field">
		      	<label>Mode of Procurement</label>
		        <select id="modeofprocurement" class="ui dropdown"  v-model="form.modeofprocurement_id">
		        	<option value="0">Select Mode of Procurement</option>
					<option value="1">Public Bidding</option>
					<option value="2">AMP</option>
				</select>
	      </div>
	    </div>
	</div>
	<div class="field">
	    <div class="three fields">
	     	<div class="field">
	      		<label>Category</label>
	 			<select id="category"  class="ui dropdown"  v-model="form.category_id">
	 				<option value="0">Select Category</option>
					<option value="1">Office Supply</option>
					<option value="2">Computer Hardware</option>
				</select>
	     	 </div>
	      	<div class="field">
		      	<label>Fund</label>
		        <select class="ui dropdown" id="fundcode"  v-model="form.fund_id">
		        	<option value="0">Select Fund</option>
					<option value="1">Fund 101</option>
					<option value="1">Fund 151</option>
				</select>
	      	</div>
	      	<div class="field">
		      	<label>Code</label>
		        <input placeholder="Enter Code" type="text" v-model="form.code">
	      	</div>
	    </div>
	</div>
	<div class="field">
		<label>General Description</label>
		<div class="field">
			<textarea rows="2" placeholder="Enter General Description" v-model="form.generaldescription"></textarea>
		</div>
	</div>
	<div class="field">
	    <div class="two fields">
	     	<div class="field">
	      		<label>Quantity</label>
	        	<input  placeholder="Quantity" type="text" v-model="form.quantity">
	     	 </div>
	      	<div class="field">
		      	<label>Estimated Budget</label>
		        <input placeholder="Estimated Budget" type="text" v-model="form.estimated_budget" @blur="focusOut" @focus="focusIn">
	      	</div>
	    </div>
	</div>
	<?php echo $__env->make('ppmp.ppmpcolortable', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="field">
		<div class="two fields">
			<div class="field">
				<span>Legend:</span>
			</div>
			<div class="field">
				<div class="comment">
				    <a class="avatar">
				       <img class="ui mini image" src="<?php echo e(asset('img/colorcoding/green.png')); ?>"> 
				    </a>
				   	<div class="text">
			        	PRE BID
			      	</div>
			    </div>
			</div>
			<div class="field">
				<div class="comment">
				    <a class="avatar">
				       <img class="ui mini image" src="<?php echo e(asset('img/colorcoding/yellow.png')); ?>">
				    </a>
				   	<div class="text">
			        	PROCUREMENT
			      	</div>
			    </div>
			</div>
			<div class="field">
				<div class="comment">
				    <a class="avatar">
				       <img class="ui mini image" src="<?php echo e(asset('img/colorcoding/blue.png')); ?>">
				    </a>
				   	<div class="text">
			        	AWARDING
			      	</div>
			    </div>
			</div>
			<div class="field">
				<div class="comment">
				    <a class="avatar">
				       <img class="ui mini image" src="<?php echo e(asset('img/colorcoding/red.png')); ?>">
				    </a>
				   	<div class="text">
			        	DELIVERY / COMPLETION
			      	</div>
			    </div>
			</div>
			<div class="field">
				<div class="comment">
				    <a class="avatar">
				       <img class="ui mini image" src="<?php echo e(asset('img/colorcoding/greenyellow.png')); ?>">
				    </a>
				   	<div class="text">
			        	PRE BID AND PROCUREMENT
			      	</div>
			    </div>
			</div>
			<div class="field">
				<div class="comment">
				    <a class="avatar">
				       <img class="ui mini image" src="<?php echo e(asset('img/colorcoding/yellowblue.png')); ?>">
				    </a>
				   	<div class="text">
			        	PRE BID AND AWARDING
			      	</div>
			    </div>
			</div>
			<div class="field">
				<div class="comment">
				    <a class="avatar">
				       <img class="ui mini image" src="<?php echo e(asset('img/colorcoding/bluered.png')); ?>">
				    </a>
				   	<div class="text">
			        	AWARDING AND DELIVERY / COMPLETION
			      	</div>
			    </div>
			</div>
  	  	</div>
	</div>
</form>
<div class="sixteen wide column">
	   	<div class="field">
		<button   @click="addLine"  class="ui blue  button" :disabled="disabled">Add</button>
		<button  @click="updateline(product)" class="ui teal  button" :disabled="!disabled">Update</button>
 	</div>
</div>