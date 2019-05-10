<?php

use Illuminate\Database\Seeder;
use App\Role;

class UserRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_student =new App\Role;
        $role_admin = new App\Role;

        $role_student->name="student";
        $role_student->save();

        $role_admin->name="admin";
        $role_admin->save();
    }
}
