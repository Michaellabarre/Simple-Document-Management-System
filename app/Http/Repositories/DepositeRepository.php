<?php
namespace App\Http\Repositories;
use Illuminate\Support\Facades\Auth;
use App\Payrolltype;
use App\Http\Repositories\Common\Eloquent\CommonEloquent;
use Request;
use App\Deposit;

class DepositeRepository extends CommonEloquent {
	
	function __construct(Deposit $model) {
	 	$this->model = $model;	
	 }

    public function Depositindex()
    {
        $Payrolltypes = Payrolltype::select('payrolltype', 'id')->get();
        $data = $this->model->orderBy('id', 'desc')->paginate(10);
        return view('deposit.list', compact('data','Payrolltypes'));
    }

    public function SearchDeposit($request)
    {
        $keyword = $request->input('search');
        $payrolltype = $request->input('fund_id');
        $model = new $this->model;
        $Payrolltypes = Payrolltype::select('payrolltype', 'id')->get();
        if ($payrolltype == 0){
            $data = $model::where('deposit_number','LIKE',"%{$keyword}%")
            ->orderBy('id', 'desc')
            ->paginate(10);
            return view('deposit.list', compact('data','Payrolltypes'));
        }
        $data = $model::where('deposit_number','LIKE',"%{$keyword}%")
            ->where('fund_id',$payrolltype)
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('deposit.list', compact('data','Payrolltypes'));

    }

    public function CreateDeposit($param=[])
    {
        $param = Request::all();
        $this->save($param);
        return redirect('/deposit');
    }


    public function UpdateDeposit($id,$param=[])
    {
        $param = Request::all();
        $this->update($id,$param);
        return redirect('/deposit');
    }
}     

     