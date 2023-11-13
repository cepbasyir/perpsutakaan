<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role; 
use Spatie\Permission\Models\Permission;


class AdminController extends Controller
{
    public function test_spatie()
    {
        $role = Role::create(['name' => 'petugas']);
        $permission = Permission::create(['name' => 'index peminjaman']);

        $role->givePermissionTo($permission);
        $permission->assignRole($role);

        // $user = auth()->user();
        // $user->assignRole('petugas');
        // return $user;
        // $user = User::with('roles')->get();
        // return $user;

        // $user = auth()->user();
        // $user->removeRole('petugas');

    }
    
}




