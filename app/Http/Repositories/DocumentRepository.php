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
use App\Action;

class DocumentRepository extends CommonEloquent {
    
    protected $model;
    protected $actionmodel;

    function __construct(Document $model,Action $actionmodel) {
        $this->model = $model;
        $this->actionmodel = $actionmodel;   
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

    public function ShowDocument($id)
    {
        $data = $this->getOne($id);
        $directory  ='itd/'.$this->model->id.'/'.$id;
        $files = Storage::allFiles($directory);
        return view('document.show', compact('data','files'));
    }

    public function AddDocument($id,$request)
    {
        $this->Addfile($id,$request);
        return back();
    }

    public function AddAction($id,$request){

    }

    public function Addfile($id,$request)
    {
        if(Input::hasFile('import_file_add')){
            $directory  ='itd/'.$id;
            $files = Storage::allFiles($directory);
            $filecount = count($files)+1;
            $file = request()->file('import_file_add');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put('itd/'.$id.'/'.'Doc_'.$filecount.'.'.$extension,  File::get($file));
        }

    }
}       