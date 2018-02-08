<?php $__env->startSection('content'); ?>
    <div class="row" id="Document">
        <div class="sixteen wide column">
            <div class="ui segments">
                <div class="ui segment">
                    <h5 class="ui header">
                        Edit Document<span></span>
                    </h5>
                </div>
                <div class="ui segment">              
                    <form action="<?php echo e(route('document.update', [$data['id']])); ?>" class="ui mini form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="two fields">
                            <div class="field">
                                <label>Document Type:</label>
                                <select id="doctype_id" class="ui dropdown" name="doctype_id">
                                  <option value="1">Memorandum</option>
                                  <option value="2">Letter</option>
                                </select>
                            </div>
                            <div class="field">
                                <label>Reference Number:</label>
                                <input placeholder="Reference" name="reference_number"  type="text"  value="<?php echo e($data['reference_number']); ?>">                       
                            </div>
                        </div>
                        <div class="two fields">
                            <div class="field">
                                <label>Document Date:</label>
                                <input name="doc_date" id="doc_date" type="date" value="<?php echo e(date_format(date_create($data['doc_date']),"Y-m-d")); ?>" >
                            </div>

                            <div class="field">
                                <label>Document Received/Forwarded:</label>
                                <input name="doc_received"  type="date"  value=" <?php echo e(date_format(date_create($data['doc_received']),"Y-m-d")); ?>">
                            </div>                        
                        </div>
                         <div class="two fields">
                            <div class="field">
                                <label>Subject:</label>
                                <textarea name="subject" rows="2" placeholder="Subject" ><?php echo e($data['Subject']); ?></textarea>
                            </div>
                            <div class="field">
                                <label>Document Status:</label>
                                <input placeholder="Document Status" name="doc_status"  type="text" value="<?php echo e($data['doc_status']); ?>">
                            </div>
                        </div>
                        <div class="two fields">
                            <div class="field">
                                <label>From/To:</label>
                                <input placeholder="From/To" name="from_to"  type="text" value="<?php echo e($data['from_to']); ?>">
                            </div>
                            <div class="field">
                                <label>Designation:</label>
                                <input placeholder="Designation" name="designation"  type="text" value="<?php echo e($data['designation']); ?>">
                            </div>
                        </div>
                        <div class="two fields">
                            <div class="field">
                                <label>Office :</label>
                                <input placeholder="Office" name="office"  type="text" value="<?php echo e($data['office']); ?>">
                            </div>
                            <div class="field">
                                <label>Office Address:</label>
                                <input placeholder="Office Address" name="office_address"  type="text" value="<?php echo e($data['office_address']); ?>">
                            </div>
                        </div>
                        <div class="two fields">
                            <div class="field">
                                <label>Deadline :</label>
                                <input name="deadline"  type="date"  value=" <?php echo e(date_format(date_create($data['deadline']),"Y-m-d")); ?>">
                            </div>
                            <div class="field">
                                <label>Remarks:</label>
                                <input placeholder="Remarks" name="remarks"  type="text" value="<?php echo e($data['remarks']); ?>">
                            </div>
                        </div>
                        <button class="ui  basic black button" type="submit"> <i class="save icon"></i>Save Document</button>
                        <div class="ui basic black submit button"><i class="cancel icon"></i>Cancel</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $('#doctype_id').dropdown('set selected',"<?php echo e($data['doctype_id']); ?>");
    </script>
    <script type="text/javascript" src="<?php echo e(asset('/js/controller/documentcontroller.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>