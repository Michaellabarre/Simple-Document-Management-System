<?php
namespace App\Http\Repositories;
use Illuminate\Support\Facades\Auth;
use App\Http\Repositories\Common\Eloquent\CommonEloquent;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Request as Req;
use Response;
use Validator;
use App\Document;
use Illuminate\Support\Facades\Storage;
use File;

class DocumentRepository extends CommonEloquent {
    
    function __construct(Document $model) {
        $this->model = $model;  
    }

    public function Documentindex()
    {
        $Payrolltypes = Payrolltype::select('payrolltype', 'id')->get();
        $data = $this->model->orderBy('id', 'desc')->paginate(10);
        return view('payroll.list', compact('data','Payrolltypes'));
    }

    public function CreateDocument($request)
    {
        $this->model->fill($request->except('import_file'));
        $this->model->save();
        if(Input::hasFile('import_file')){
             $file = request()->file('import_file');
             $extension = $file->getClientOriginalExtension();
             Storage::disk('local')->put('itd/'.$this->model->id.'/'.'Doc_1'.'.'.$extension,  File::get($file));
        }
        return redirect('/document/'.$this->model->id);

    }

}       