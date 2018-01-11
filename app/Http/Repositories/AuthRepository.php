<?php
namespace App\Http\Repositories;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Repositories\Common\Eloquent\CommonEloquent;
use Request;

class AuthRepository extends CommonEloquent {
	
	function __construct(User $model) {
	 	$this->model = $model;	
	 }

    public function Userindex()
    {
        $data = $this->model->orderBy('id', 'desc')->paginate(10);
        return view('user.list',compact('data'));
    }

    public function SearchUser($request)
    {
        $keyword = $request->input('search');
        $model = new $this->model;
        $data = $model::where('firstname','LIKE',"%{$keyword}%")
            ->orwhere('lastname','LIKE',"%{$keyword}%")
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('user.list',compact('data'));
    }

    // public function CreatePayrolltype($param=[])
    // {
    //     $param = Request::all();
    //     $this->save($param);
    //     return redirect('/managelibraries/employee');
    // }


    // public function UpdatePayrolltype($id,$param=[])
    // {
    //     $param = Request::all();
    //     $this->update($id,$param);
    //     return redirect('/managelibraries/employee');
    // }
}     

     