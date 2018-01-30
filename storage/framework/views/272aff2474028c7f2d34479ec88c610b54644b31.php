<?php $__env->startSection('content'); ?>
  	<div class="row">
        <div class="sixteen wide column">
            <div class="ui segments">
                <div class="ui segment">
                    <h5 class="ui header">
                       	New Bureau and Service
                    </h5>
                </div>
                <form class="ui form segment form1">
                    <div class="field">
                        <label>Bureau and Service:</label>
                        <input placeholder="Bureau and Service" name="username"  type="text">                       
                    </div>
                    <div class="ui blue submit button"><i class="save icon"></i>Save Document</div>
                    <div class="ui red submit button"><i class="cancel icon"></i>Cancel</div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>