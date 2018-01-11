<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Item;
use DB;
use Excel;
use Request as Req;
use Response;
use App\Employee;
use App\Http\Repositories\EmployeeRepository;

class EmployeeController extends Controller
{
    protected $model;
    protected $EmployeeRepository;

    public function __construct(EmployeeRepository $EmployeeRepository,Employee $model)
    {
        $this->model = $model;
        $this->EmployeeRepository = $EmployeeRepository;
    }

    public function index()
    {
        return $this->EmployeeRepository->Employeeindex();
    }


    public function create()
    {

        return view('employee.create');
    }

    public function store(Request $request)
    {
        return $this->EmployeeRepository->CreatePayrolltype($request);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return vieW('employee.edit')->with('data', $this->EmployeeRepository->getOne($id));
    }

    public function update(Request $request, $id)
    {
        return $this->EmployeeRepository->UpdatePayrolltype($id,$request);
    }


    public function searchEmployee(Request $request)
    {
       return $this->EmployeeRepository->SearchEmployee($request);
    }
}
