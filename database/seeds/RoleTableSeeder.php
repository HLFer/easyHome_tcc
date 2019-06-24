<?php

use Illuminate\Database\Seeder;
use easyHome\Role;

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
        $role_admin->description = 'This is an Administrator of House (The Boss)';
        $role_admin->save();

        $role_dweller = new Role();
        $role_dweller->name = 'Dweller';
        $role_dweller->description = 'This is a Dweller User';
        $role_dweller->save();

        $role_visitor = new Role();
        $role_visitor->name = 'Visitor';
        $role_visitor->description = 'This is a Visitor User';
        $role_visitor->save();
    }
}
