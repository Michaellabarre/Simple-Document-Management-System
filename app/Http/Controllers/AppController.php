<?php
namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }
    
    public function getAuthorPage()
    {
        return view('author');
    }

    public function getAdminPage()
    {
        $users = User::paginate(10);
        return view('admin/index', ['users' => $users]);
    }

    public function getGenerateArticle()
    {
        return response('Article generated!', 200);
    }
    
    public function postAdminAssignRoles(Request $request)
    {
        $user = User::where('username', $request['username'])->first();
        $user->roles()->detach();
        if ($request['role_accountingstaff']) {
            $user->roles()->attach(Role::where('name', 'Accountingstaff')->first());
        }
        if ($request['role_admin']) {
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        return redirect()->back();
    }
}