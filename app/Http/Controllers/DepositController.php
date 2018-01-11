<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;
use DB;
use App\Deposit;
use App\Payrolltype;
use App\Http\Repositories\DepositeRepository;
use Validator;
use Request as Req;

class DepositController extends Controller
{
    protected $model;
    protected $DepositeRepository;

    public function __construct(DepositeRepository $DepositeRepository,Deposit $model)
    {
        $this->model = $model;
        $this->DepositeRepository = $DepositeRepository;
    }

    public function index()
    {
        return $this->DepositeRepository->Depositindex();
    }

    public function create()
    {
        $Payrolltypes = Payrolltype::select('payrolltype', 'id')->get();
        return view('deposit.create', compact('data','Payrolltypes'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make(Req::all(), [
            'deposit_number'  => 'required',
            'deposit_date'  => 'required',
        ]);

        if ($validator->fails())
        {
            $Payrolltypes = Payrolltype::select('payrolltype', 'id')->get();
            return view('deposit.create', compact('data','Payrolltypes'))->withErrors($validator);
        }

        return $this->DepositeRepository->CreateDeposit($request);
    }

    public function update(Request $request, $id)
    {
        return $this->DepositeRepository->UpdateDeposit($id,$request);
    }

    public function edit($id)
    {
        $Payrolltypes = Payrolltype::select('payrolltype', 'id')->get();
        return vieW('deposit.edit',compact('Payrolltypes'))->with('data', $this->DepositeRepository->getOne($id));
    }



    public function searchDeposit(Request $request)
    {
        return $this->DepositeRepository->searchDeposit($request);
    }
}
