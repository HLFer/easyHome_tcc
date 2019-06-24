<?php

use Illuminate\Database\Seeder;
use easyHome\User;
use easyHome\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'Admin')->first();
        $role_dweller = Role::where('name', 'Dweller')->first();
        $role_visitor = Role::where('name', 'Visitor')->first();

        $admin = new User();
        $admin->name = 'Victor';
        $admin->role = 'Admin';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $dweller = new User();
        $dweller->name = 'Alex';
        $dweller->role = 'Dweller';
        $dweller->email = 'dweller@example.com';
        $dweller->password = bcrypt('dweller');
        $dweller->save();
        $dweller->roles()->attach($role_dweller);

        $visitor = new User();
        $visitor->name = 'Matt';
        $visitor->role = 'Visitor';
        $visitor->email = 'visitor@example.com';
        $visitor->password = bcrypt('visitor');
        $visitor->save();
        $visitor->roles()->attach($role_visitor);
    }
}
