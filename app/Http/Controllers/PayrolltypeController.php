<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Item;
use DB;
use Excel;
use Request as Req;
use Response;
use App\Payrolltype;
use App\Http\Repositories\PayrolltypeRepository;
use App\Http\Requests\Payrolltype\Validatepayrolltype;

class PayrolltypeController extends Controller
{
    protected $model;
    protected $PayrolltypeRepository;

    public function __construct(PayrolltypeRepository $PayrolltypeRepository,Payrolltype $model)
    {
        $this->model = $model;
        $this->PayrolltypeRepository = $PayrolltypeRepository;
    }

    public function index()
    {
        return $this->PayrolltypeRepository->Payrolltypeindex();
    }

    public function create()
    {
        return view('payroll_type.create');
    }

    public function store(Validatepayrolltype $request)
    {
        return $this->PayrolltypeRepository->CreatePayrolltype($request);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return vieW('payroll_type.edit')->with('data', $this->PayrolltypeRepository->getOne($id));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'payrolltype' => 'required|unique:payrolltype,payrolltype,'.$id.',id'
        ]);
        return $this->PayrolltypeRepository->UpdatePayrolltype($id,$request);
    }


    public function searchPayrolltype(Request $request)
    {
       return $this->PayrolltypeRepository->SearchPayrolltype($request);
    }
}
