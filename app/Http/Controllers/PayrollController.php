<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;
use DB;
use App\Payroll;
use App\Payrolltype;
use App\Http\Repositories\PayrollRepository;
use Validator;
use Request as Req;
class PayrollController extends Controller
{
    protected $model;
    protected $payrollRepository;

    public function __construct(PayrollRepository $payrollRepository,Payroll $model)
    {
        $this->model = $model;
        $this->PayrollRepository = $payrollRepository;
    }

    public function index()
    {
        return $this->PayrollRepository->Payrollindex();
    }

    public function create()
    {
        $Payrolltypes = Payrolltype::select('payrolltype', 'id')->get();
        return view('payroll.create', compact('data','Payrolltypes'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make(Req::all(), [
            'payee'  => 'required',
            'particular'  => 'required',
        ]);

        if ($validator->fails())
        {
            $Payrolltypes = Payrolltype::select('payrolltype', 'id')->get();
            return view('payroll.create', compact('data','Payrolltypes'))->withErrors($validator);
        }

        return $this->PayrollRepository->CreatePayroll($request);
    }

    public function update(Request $request, $id)
    {
        return $this->PayrollRepository->UpdatePayroll($id,$request);
    }

    public function edit($id)
    {
        $Payrolltypes = Payrolltype::select('payrolltype', 'id')->get();
        return vieW('payroll.edit',compact('Payrolltypes'))->with('data', $this->PayrollRepository->getOne($id));
    }

    public function downloadcsv($title=[],Request $request)
    {
        return $this->PayrollRepository->downloadcsv($title,$request);
    }
    public function downloadform()
    {
        return $this->PayrollRepository->downloadform();
    }

    public function Downloadexceldata($title)
    {
        return $this->PayrollRepository->Downloadexceldata($title);
    }

    public function downloadmanucsv($title=[],Request $request)
    {
        return $this->PayrollRepository->downloadmanucsv($title,$request);
    }

    public function importExcel(Request $request)
    {
        return $this->PayrollRepository->importexcel($request);
    }

    public function searchPayroll(Request $request)
    {
        return $this->PayrollRepository->searchPayroll($request);
    }
}
