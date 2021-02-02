<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create(['name' => 'Administrator', 'email' => 'admin@clearme.test', 'password' => Hash::make('@dm1nt3st')]);
        $user->assignRole('admin');
    }
}
