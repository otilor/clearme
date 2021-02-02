<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Artisan;

class RoleAndPermissionSeeder extends Seeder
{
    public function run()
    {
        $roles = ['admin', 'student'];
        foreach ($roles as $role) {
            Artisan::call('permission:create-role ' . $role);
        }
    }
}
