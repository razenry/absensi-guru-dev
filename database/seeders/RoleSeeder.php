<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'Full system access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'employee',
                'display_name' => 'Employee',
                'description' => 'Employee level access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'student',
                'display_name' => 'Student',
                'description' => 'Student level access',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
