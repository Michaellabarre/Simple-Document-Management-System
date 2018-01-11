<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'A Admin';
        $role_admin->save();

        $role_author = new Role();
        $role_author->name = 'Accountingstaff';
        $role_author->description = 'An Accounting Staff';
        $role_author->save();


    }
}
