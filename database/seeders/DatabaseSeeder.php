<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::transaction(function () {
            $this->call([RoleAndPermissionSeeder::class, AdminSeeder::class, SectionSeeder::class, StudentSeeder::class, ClearanceRequestSeeder::class]);
        });
    }
}
