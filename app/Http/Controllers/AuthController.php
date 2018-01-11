<?php
namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Http\Repositories\AuthRepository;
use App\Http\Requests\User\AddUser;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use File;
use App\Employee;
class AuthController extends Controller
{
    protected $model;
    protected $AuthRepository;

    public function __construct(AuthRepository $AuthRepository,User $model)
    {
        $this->model = $model;
        $this->AuthRepository = $AuthRepository;
    }
    public function index()
    {
        return $this->AuthRepository->Userindex();
    }

    public function profile()
    {
        return view('profile.profile')->with('data', $this->AuthRepository->getOne( Auth::user()->id));
    }

    public function create()
    {
        return view('user.create');
    }

    public function searchEmployee(Request $request)
    {
       return $this->EmployeeRepository->SearchEmployee($request);
    }

    public function edit($id)
    {
        return view('user.edit')->with('data', $this->AuthRepository->getOne($id));
    }

    public function updateprofile(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|unique:users,username,'.Auth::user()->id.',id',
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_initial'=>'max:3'
        ]);
        if(Input::hasFile('profile')){
            $this->validate($request, ['profile'=>'image']);
        }

        if(!is_null($request['password'])){
            $this->validate($request, ['password' => 'min:6']); 
        }

        $user = User::find(Auth::user()->id);
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->username = $request['username'];
        $user->middle_initial = $request['middle_initial'];
        $user->isactive = 1;

        if(Input::hasFile('profile')){
            $file = request()->file('profile');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('avatar')->delete(Auth::user()->profile);
            Storage::disk('avatar')->put(Auth::user()->id.'.'.$extension,  File::get($file));
            $user->profile = Auth::user()->id.'.'.$extension;
        }

        if(!is_null($request['password'])){
            $user->password = bcrypt($request['password']);
        }

        $user->save();

        $data = Employee::where('account_number', '=', '')->orWhereNull('account_number')->orderBy('fullname', 'asc')->paginate(100);
        return redirect()->route('dashboard');
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'username' => 'required|unique:users,username,'.$id.',id',
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_initial'=>'max:3'
        ]);

        if(!is_null($request['password'])){
            $this->validate($request, ['password' => 'min:6']); 
        }

        $user = User::find($id);
        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];
        $user->username = $request['username'];
        $user->middle_initial = $request['middle_initial'];
        $user->isactive = $request['isactive'];


        if(!is_null($request['password'])){
            $user->password = bcrypt($request['password']);
        }
        $user->save();

        $user = User::where('username', $request['username'])->first();
        $user->roles()->detach();

        if ($request['role_accountingstaff']) {
            $user->roles()->attach(Role::where('name', 'Accountingstaff')->first());
        }

        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return $this->index();
    }

    public function postSignUp(AddUser $request)
    {

        $this->model->first_name = $request['first_name'];
        $this->model->last_name = $request['last_name'];
        $this->model->username = $request['username'];
        $this->model->middle_initial = $request['middle_initial'];
        $this->model->password = bcrypt($request['password']);
        $this->model->save();


        $this->model = User::where('username', $request['username'])->first();
        $this->model->roles()->detach();
        if ($request['role_accountingstaff']) {
            $this->model->roles()->attach(Role::where('name', 'Accountingstaff')->first());
        }

        if ($request['role_admin']) {
            $this->model->roles()->attach(Role::where('name', 'Admin')->first());
        }
       // Auth::login($user);
        return $this->index();
    }

    public function postSignIn(Request $request)
    {
        if (Auth::attempt(['username' => $request['username'], 'password' => $request['password'], 'isactive' => 1])) {
            return redirect()->route('dashboard');
        }else {
            Session::flash('message', 'Username or Password is incorrect');  
            return redirect()->back();
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('main');
    }
}