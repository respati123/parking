<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class createAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user  = new User();
        $user->name     = "respati";
        $user->email    = "tyorespati@gmail.com";
        $user->password = Hash::make("respati");
        $user->save();

        $permission = new Permission();
        $permission->name = "superuser";
        $permission->save();

        $role = new Role();
        $role->name = "superuser";
        $role->save();

        $role->givePermissionTo($permission);
        $user->assignRole($role);
    }
}
