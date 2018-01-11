<?php
namespace App\Http\Repositories;
use Illuminate\Support\Facades\Auth;
use App\Employee;
use App\Http\Repositories\Common\Eloquent\CommonEloquent;
use Request;

class EmployeeRepository extends CommonEloquent {
	
	function __construct(Employee $model) {
	 	$this->model = $model;	
	 }

    public function Employeeindex()
    {
        $data = $this->model->orderBy('lastname', 'asc')->paginate(100);
        return view('employee.list',compact('data'));
    }

    public function SearchEmployee($request)
    {
        $keyword = $request->input('search');
        $model = new $this->model;
        $data = $model::where('firstname','LIKE',"%{$keyword}%")
            ->orwhere('employee_id','LIKE',"%{$keyword}%")
            ->orwhere('lastname','LIKE',"%{$keyword}%")
            ->orwhere('account_number','LIKE',"%{$keyword}%")
            ->orderBy('id', 'desc')
            ->paginate(100);
        return view('employee.list',compact('data'));
    }

    public function CreatePayrolltype($param=[])
    {
        $param = Request::all();
        $this->save($param);
        return redirect('/managelibraries/employee');
    }


    public function UpdatePayrolltype($id,$param=[])
    {
        $param = Request::all();
        $this->update($id,$param);
        return redirect('/managelibraries/employee');
    }
}     

     