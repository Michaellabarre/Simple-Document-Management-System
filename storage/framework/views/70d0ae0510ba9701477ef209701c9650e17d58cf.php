<?php $__env->startSection('content'); ?>
  	<div class="row">
        <div class="sixteen wide column">
            <div class="ui segment">
                <div class="ui segment">
                    <h3 class="ui header">
                        Show Document Number:.<span class="text-danger"><?php echo e(Auth::user()->first_name); ?></span>
                    </h3>
                </div>
                <div class="ui  segment">
                    <div class="ui basic black button"><i class="pencil icon"></i>Edit Document</div>
                    <div class="ui basic black button"><i class="bookmark icon"></i>Bookmark this Document</div>
                    <div class="ui basic black button"><i class="file icon"></i>Create Memo</div>
                    <div class="ui basic black button"><i class="file icon"></i>Create Acknowledgement</div>
                    <div class="ui dropdown item">
                        <b>Print Tracking Slip:</b>
                        <div class="menu ">
                          <a class="item">With Action(s)</a>
                          <a class="item">Without Action(s) Whole Page</a>
                          <a class="item">Without Action(s) Half Page</a>
                        </div>
                         <i class="dropdown icon"></i>
                    </div>
                </div>
            </div>
            <div class="ui segment">
                <form class="ui form segment form1">
                    <div class="two fields">
                        <div class="field">
                            <label>Document Type:</label>
                            <input placeholder="Reference" name="reference_number"  type="text"  readonly=""> 
                        </div>
                        <div class="field">
                            <label>Reference Number:</label>
                            <input placeholder="Reference" name="reference_number" type="text" value="<?php echo e($data['reference_number']); ?>" readonly="">                       
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>Document Date:</label>
                            <input placeholder="Document Date" name="doc_date"  type="text" readonly="" value="<?php echo e($data['doc_date']); ?>">
                        </div>
                        <div class="field">
                            <label>Document Received/Forwarded:</label>
                            <input name="Document Received/Forwarded"  readonly="" value="<?php echo e($data['doc_received']); ?>">
                        </div>
                    </div>
                     <div class="two fields">
                        <div class="field">
                            <label>Subject:</label>
                            <textarea  name="subject"  rows="2" readonly=""  value=""><?php echo e($data['Subject']); ?></textarea>
                        </div>
                        <div class="field">
                            <label>Document Status:</label>
                            <input placeholder="Document Status"   type="text" readonly=""  value="<?php echo e($data['doc_status']); ?>">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>From/To:</label>
                            <input placeholder="From/To" type="text" readonly=""  value="<?php echo e($data['from_to']); ?>">
                        </div>
                        <div class="field">
                            <label>Designation:</label>
                            <input placeholder="Designation"  type="text"  readonly=""  value="<?php echo e($data['designation']); ?>">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>Office:</label>
                            <input placeholder="Office"  type="text"  readonly=""  value="<?php echo e($data['office']); ?>">
                        </div>
                        <div class="field">
                            <label>Office Address:</label>
                            <input placeholder="Office Address" name="username"  type="text"  readonly=""  value="<?php echo e($data['office_address']); ?>">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>Deadline :</label>
                            <input placeholder="Deadline" name="username"  type="text"  readonly=""  value="<?php echo e($data['deadline']); ?>">
                        </div>
                        <div class="field">
                            <label>Remarks:</label>
                            <input placeholder="Remarks" name="username"  type="text"  readonly=""  value="<?php echo e($data['remarks']); ?>">
                        </div>
                    </div>
                </form>
                  
            </div>
            <div class="ui horizontal divider">
                Documents
            </div>
            <div class="ui  segment">
                <table class="ui celled small striped table">
                    <thead>
                    <tr>
                        <th class="center aligned ten wide" >
                          Document
                        </th>
                        <th  class="center aligned six wide" colspan="2">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($file); ?>

                                </td>
                                <td class="center aligned three wide">Download</td>
                                <td class="center aligned three wide">View</td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>

                </table>
                <div class="ui styled fluid accordion">
                    <div class="title">
                        <i class="dropdown icon"></i>
                        Add Document
                    </div>
                    <div class="content">
                    <form action="<?php echo e(route('document.adddoc', [$data['id']])); ?>" class="ui mini form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <div class="field">
                                <label>File:</label>
                                <input type="file" name="import_file_add">
                            </div>
                            <button class="ui mini basic black button" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>  
            <div class="ui horizontal divider">
                Document Actions
            </div>
            <div class="ui styled fluid accordion">
                <div class="title">
                    <i class="dropdown icon"></i>
                    Add Action
                </div>
                <div class="content">
                    <form action="<?php echo e(route('document.add_action_doc', [$data['id']])); ?>" class="ui mini form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                        <div class="two fields">
                            <div class="field">
                                <label>File:</label>
                                <input type="file" name="import_file_add" value="<?php echo e(old('import_file_add')); ?>" / >
                            </div>
                            <div class="field">
                                <div class="field">
                                    <label>Action:</label>
                                    <select class="ui dropdown" name="action_id">
                                      <option value="1">Forwarded</option>
                                      <option value="2">Signed</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="three fields">
                            <div class="field">
                                <div class="field">
                                    <label>Unit:</label>
                                    <select id="unit_id" name="unit_id" class="ui dropdown" >
                                      <option value="1">ITMS</option>
                                      <option value="2">ITD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="field">
                                <label>Person:</label>
                                <input placeholder="Person" name="person"  type="text" >
                            </div>
                            <div class="field">
                                <label>Position:</label>
                                <input name="position"  >
                            </div>
                        </div>
                         <div class="two fields">
                            <div class="field">
                                <label>Date:</label>
                                <input  name="act_doc_date"  type="date">
                            </div>
                            <div class="field">
                                <label>Remarks:</label>
                                <input placeholder="remarks" name="remarks"  type="text">
                            </div>
                        </div>
                        <input type="hidden" id="unit" name="unit" value="">
                        <button class="ui mini basic black button" type="submit">Add</button>
                    </form>
                </div>
            </div>
            <div class="ui segment">
                <table class="ui celled small striped table">
                  <thead>
                    <tr>
                    <th>
                        Action
                    </th>
                    <th>
                        Person
                    </th>
                    <th>
                        Position
                    </th>
                    <th>
                        Unit
                    </th>
                    <th>
                        Action By
                    </th>
                    <th>
                        Date Created
                    </th>
                    <th>
                        Remarks
                    </th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $data->action; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $act): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <?php echo e($act->action_id); ?>

                            </td>
                            <td>
                                <?php echo e($act->person); ?>

                            </td>
                            <td>
                                <?php echo e($act->position); ?>

                            </td>
                            <td>
                                <?php echo e($act->unit); ?>

                            </td>
                            <td>
                                <?php echo e($act->created_by); ?>

                            </td>
                            <td>
                                <?php echo e($act->created_at); ?>

                            </td>
                            <td>
                                <?php echo e($act->remarks); ?>

                            </td>   
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#unit").val($( "#unit_id option:selected").text());
            $("#unit_id").change(function(){
                $("#unit").val($( "#unit_id option:selected").text());
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>