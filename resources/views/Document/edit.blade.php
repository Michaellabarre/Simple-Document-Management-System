@extends('layouts.base')
@section('content')
    <div class="row" id="Document">
        <div class="sixteen wide column">
            <div class="ui segments">
                <div class="ui segment">
                    <h5 class="ui header">
                        Edit Document<span></span>
                    </h5>
                </div>
                <div class="ui segment">              
                    <form action="{{ route('document.update', [$data['id']]) }}" class="ui mini form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                                <input placeholder="Reference" name="reference_number"  type="text"  value="{{ $data['reference_number'] }}">                       
                            </div>
                        </div>
                        <div class="two fields">
                            <div class="field">
                                <label>Document Date:</label>
                                <input name="doc_date" id="doc_date" type="date" value="{{ date_format(date_create($data['doc_date']),"Y-m-d") }}" >
                            </div>

                            <div class="field">
                                <label>Document Received/Forwarded:</label>
                                <input name="doc_received"  type="date"  value=" {{ date_format(date_create($data['doc_received']),"Y-m-d") }}">
                            </div>                        
                        </div>
                         <div class="two fields">
                            <div class="field">
                                <label>Subject:</label>
                                <textarea name="subject" rows="2" placeholder="Subject" >{{ $data['Subject']}}</textarea>
                            </div>
                            <div class="field">
                                <label>Document Status:</label>
                                <input placeholder="Document Status" name="doc_status"  type="text" value="{{ $data['doc_status']   }}">
                            </div>
                        </div>
                        <div class="two fields">
                            <div class="field">
                                <label>From/To:</label>
                                <input placeholder="From/To" name="from_to"  type="text" value="{{ $data['from_to']  }}">
                            </div>
                            <div class="field">
                                <label>Designation:</label>
                                <input placeholder="Designation" name="designation"  type="text" value="{{ $data['designation'] }}">
                            </div>
                        </div>
                        <div class="two fields">
                            <div class="field">
                                <label>Office :</label>
                                <input placeholder="Office" name="office"  type="text" value="{{ $data['office']  }}">
                            </div>
                            <div class="field">
                                <label>Office Address:</label>
                                <input placeholder="Office Address" name="office_address"  type="text" value="{{ $data['office_address'] }}">
                            </div>
                        </div>
                        <div class="two fields">
                            <div class="field">
                                <label>Deadline :</label>
                                <input name="deadline"  type="date"  value=" {{ date_format(date_create($data['deadline']),"Y-m-d")}}">
                            </div>
                            <div class="field">
                                <label>Remarks:</label>
                                <input placeholder="Remarks" name="remarks"  type="text" value="{{ $data['remarks']  }}">
                            </div>
                        </div>
                        <button class="ui  basic black button" type="submit"> <i class="save icon"></i>Save Document</button>
                        <div class="ui basic black submit button"><i class="cancel icon"></i>Cancel</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script type="text/javascript">
        $('#doctype_id').dropdown('set selected',"{{ $data['doctype_id']}}");
    </script>
    <script type="text/javascript" src="{{ asset('/js/controller/documentcontroller.js')}}"></script>
@stop

