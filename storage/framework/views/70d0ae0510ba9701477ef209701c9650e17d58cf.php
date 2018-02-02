<?php $__env->startSection('content'); ?>
  	<div class="row">
        <div class="sixteen wide column">
            <div class="ui segment">
                <div class="ui segment">
                    <h3 class="ui header">
                        Show Document Number:00001
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
                            <input placeholder="Reference" name="username"  type="text" value="Memorandum" readonly=""> 
                        </div>
                        <div class="field">
                            <label>Reference Number:</label>
                            <input placeholder="Reference" name="username"  type="text" readonly="">                       
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>Document Date:</label>
                            <input placeholder="Document Date" name="username"  type="text" readonly="">
                        </div>
                        <div class="field">
                            <label>Document Received/Forwarded:</label>
                            <input name="Document Received/Forwarded"  readonly="">
                        </div>
                    </div>
                     <div class="two fields">
                        <div class="field">
                            <label>Subject:</label>
                            <textarea name="minLength" rows="2" readonly=""></textarea>
                        </div>
                        <div class="field">
                            <label>Document Status:</label>
                            <input placeholder="Document Status" name="username"  type="text" readonly="">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>From/To:</label>
                            <input placeholder="From/To" name="username"  type="text" readonly="">
                        </div>
                        <div class="field">
                            <label>Designation:</label>
                            <input placeholder="Designation" name="username"  type="text"  readonly="">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>Office:</label>
                            <input placeholder="Office" name="username"  type="text"  readonly="">
                        </div>
                        <div class="field">
                            <label>Office Address:</label>
                            <input placeholder="Office Address" name="username"  type="text"  readonly="">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label>Deadline :</label>
                            <input placeholder="Deadline" name="username"  type="text"  readonly="">
                        </div>
                        <div class="field">
                            <label>Remarks:</label>
                            <input placeholder="Remarks" name="username"  type="text"  readonly="">
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
                    <tr>
                        <td class="collapsing">
                            <i class="folder icon"></i> DOC 1
                        </td>
                        <td class="center aligned three wide">Download</td>
                        <td class="center aligned three wide">View</td>
                    </tr>
                  </tbody>
                </table>
                <div class="ui styled fluid accordion">
                    <div class="title">
                        <i class="dropdown icon"></i>
                        Add Document
                    </div>
                    <div class="content">
                       <form class="ui form segment form">
                            <div class="field">
                                <label>File:</label>
                                <input type="file" name="import_file">
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
                   <form class="ui form segment form">
                        <div class="field">
                            <label>As a New Document</label>
                            <input type="checkbox" placeholder="Reference" name="username"  type="text" value="Memorandum" > 
                        </div>
                        <div class="two fields">
                            <div class="field">
                                <label>File:</label>
                                <input type="file" name="import_file" value="<?php echo e(old('import_file')); ?>" / >
                            </div>
                            <div class="field">
                                <div class="field">
                                    <label>Action:</label>
                                    <div class="ui dropdown selection" tabindex="0">
                                        <select name="gender">
                                        </select>
                                        <i class="dropdown icon"></i><div class="text">Forwarded</div><div class="menu transition hidden" tabindex="-1"><div class="item" data-value="male">Forwarded</div><div class="item active selected" data-value="female">Signed</div></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="three fields">
                            <div class="field">
                                <div class="field">
                                    <label>Unit:</label>
                                    <div class="ui dropdown selection" tabindex="0">
                                        <select name="gender">
                                        </select>
                                        <i class="dropdown icon"></i><div class="text">ITMS</div><div class="menu transition hidden" tabindex="-1"><div class="item" data-value="male">ITMS</div><div class="item active selected" data-value="female">ITD</div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label>Person:</label>
                                <input placeholder="Person" name="username"  type="text" readonly="">
                            </div>
                            <div class="field">
                                <label>Position:</label>
                                <input name="Position"  readonly="">
                            </div>
                        </div>
                         <div class="two fields">
                            <div class="field">
                                <label>Date:</label>
                                <input placeholder="Date" name="username"  type="text">
                            </div>
                            <div class="field">
                                <label>Remarks:</label>
                                <input placeholder="Remarks" name="username"  type="text">
                            </div>
                        </div>
                        <button class="ui mini basic black button" type="submit">Add</button>
                    </form>
                </div>
            </div>
            <div class="ui segment">
                <table class="ui celled small striped table">
                  <thead>
                    <tr>
                    <th>
                      Attachement As New
                    </th>
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
                    <tr>
                      <td class="collapsing">
                        <i class="folder icon"></i> DOC 2
                      </td>
                        <td>For Signature</td>
                        <td class="right aligned collapsing">test1</td>
                        <td class="right aligned collapsing">Director</td>
                        <td class="right aligned collapsing">ITMS</td>
                        <td class="right aligned collapsing">User 1</td>
                        <td class="right aligned collapsing">April 17, 2017 10:03 AM</td>
                        <td class="right aligned collapsing">Sample Remark</td>
                    </tr>

                    <tr>
                      <td class="collapsing">
                        <i class="folder icon"></i> DOC 2
                      </td>
                        <td>For Signature</td>
                        <td class="right aligned collapsing">test2</td>
                        <td class="right aligned collapsing">Director</td>
                        <td class="right aligned collapsing">ITMS</td>
                        <td class="right aligned collapsing">User 1</td>
                        <td class="right aligned collapsing">April 17, 2017 10:03 AM</td>
                        <td class="right aligned collapsing">Sample Remark</td>
                    </tr>


                    <tr>
                      <td class="collapsing">
                        <i class="folder icon"></i> DOC 2
                      </td>
                        <td>For Signature</td>
                        <td class="right aligned collapsing">test3</td>
                        <td class="right aligned collapsing">Director</td>
                        <td class="right aligned collapsing">ITMS</td>
                        <td class="right aligned collapsing">User 1</td>
                        <td class="right aligned collapsing">April 17, 2017 10:03 AM</td>
                        <td class="right aligned collapsing">Sample Remark</td>
                    </tr>


                    <tr>
                      <td class="collapsing">
                        <i class="folder icon"></i> DOC 2
                      </td>
                        <td>For Signature</td>
                        <td class="right aligned collapsing">test4</td>
                        <td class="right aligned collapsing">Director</td>
                        <td class="right aligned collapsing">ITMS</td>
                        <td class="right aligned collapsing">User 1</td>
                        <td class="right aligned collapsing">April 17, 2017 10:03 AM</td>
                        <td class="right aligned collapsing">Sample Remark</td>
                    </tr>
                  </tbody>
                </table>
            </div>
<!--             <div class="ui horizontal divider">
                Document History
            </div>
             <div class="ui styled fluid accordion">
                <div class="title">
                    <i class="dropdown icon"></i>
                    Document History
                </div>
                <div class="content">
                    <form  class="ui form" method="get">
                        <div class="two fields">
                            <div class="field">
                                <label>Remarks:</label>
                                <input type="text" placeholder="Search" name="search" >
                            </div>

                        </div>
                        <button class="ui mini basic black button" type="submit">Filter</button>
                        <a class="ui mini basic black button">Clear</a>
                    </form>
                </div>
            </div> -->
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>