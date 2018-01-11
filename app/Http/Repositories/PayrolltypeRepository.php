<?php
namespace App\Http\Repositories;
use Illuminate\Support\Facades\Auth;
use App\Payrolltype;
use App\Http\Repositories\Common\Eloquent\CommonEloquent;
use Request;

class PayrolltypeRepository extends CommonEloquent {
	
	function __construct(Payrolltype $model) {
	 	$this->model = $model;	
	 }

    public function Payrolltypeindex()
    {
        $data = $this->model->orderBy('Payrolltype', 'asc')->paginate(10);
        return view('payroll_type.list',compact('data'));
    }

    public function SearchPayrolltype($request)
    {
        $keyword = $request->input('search');
        $model = new $this->model;
        $data = $model::where('Payrolltype','LIKE',"%{$keyword}%")
            ->orderBy('Payrolltype', 'asc')
            ->paginate(10);
        return view('payroll_type.list',compact('data'));
    }

    public function CreatePayrolltype($param=[])
    {
        $param = Request::all();
        $this->save($param);
        return redirect('/managelibraries/otherincomecode');
    }


    public function UpdatePayrolltype($id,$param=[])
    {
        $param = Request::all();
        $this->update($id,$param);
        return redirect('/managelibraries/otherincomecode');
    }
}     

     