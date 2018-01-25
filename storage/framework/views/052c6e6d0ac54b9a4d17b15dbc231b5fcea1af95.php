<?php $__env->startSection('content'); ?>
  	<div class="row">
        <div class="sixteen wide column">
            <div class="ui segments">
                <div class="ui segment">
                    <h5 class="ui header">
                       	New Document
                    </h5>
                </div>
                <form class="ui form segment form1">
                    <div class="two fields">
                        <div class="field">
                            <label>Document Type:</label>
                            <div class="ui dropdown selection" tabindex="0">
                                <select name="gender">
                                </select>
                                <i class="dropdown icon"></i><div class="text">Memorandum</div><div class="menu transition hidden" tabindex="-1"><div class="item" data-value="male">Memorandum</div><div class="item active selected" data-value="female">Letter</div></div>
                            </div>
                        </div>
                        <div class="field">
                            <label>Reference Number:</label>
                              <input placeholder="Reference" name="username"  type="text">                       
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>Document Date:</label>
                            <input placeholder="Document Date" name="username"  type="text">
                        </div>
                        <div class="field">
                            <label>Document Received/Forwarded:</label>
                            <input name="Document Received/Forwarded" >
                        </div>
                    </div>
                     <div class="two fields">
                        <div class="field">
                            <label>Subject:</label>
                            <textarea name="minLength" rows="2"></textarea>
                        </div>
                        <div class="field">
                            <label>Document Status:</label>
                            <input placeholder="Document Date" name="username"  type="text">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>From/To:</label>
                            <input placeholder="Document Date" name="username"  type="text">
                        </div>
                        <div class="field">
                            <label>Designation:</label>
                            <input placeholder="Document Date" name="username"  type="text">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>Office :</label>
                            <input placeholder="Document Date" name="username"  type="text">
                        </div>
                        <div class="field">
                            <label>Office Address:</label>
                            <input placeholder="Document Date" name="username"  type="text">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>Deadline :</label>
                            <input placeholder="Document Date" name="username"  type="text">
                        </div>
                        <div class="field">
                            <label>Remarks:</label>
                            <input placeholder="Document Date" name="username"  type="text">
                        </div>
                    </div>
                    <div class="field">
                        <label>File:</label>
                        <input type="file" name="import_file" value="<?php echo e(old('import_file')); ?>" / >
                    </div>

                    <div class="ui blue submit button"><i class="save icon"></i>Save Document</div>
                    <div class="ui red submit button"><i class="cancel icon"></i>Cancel</div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>