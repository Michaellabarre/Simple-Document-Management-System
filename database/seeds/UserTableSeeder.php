<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_accountingstaff = Role::where('name', 'Accountingstaff')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->first_name = 'admin';
        $user->last_name = 'admin';
        $user->middle_initial = 'a';
        $user->username = 'admin';
        $user->password = bcrypt('admin');
        $user->isactive = 1;
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->first_name = 'acct';
        $user->last_name = 'acct';
        $user->middle_initial = 'b';
        $user->username = 'acct';
        $user->password = bcrypt('acct');
        $user->isactive = 1;
        $user->save();
        $user->roles()->attach($role_accountingstaff);

    }
}
