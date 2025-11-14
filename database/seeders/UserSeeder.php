<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'public_id' => Str::uuid(),
            'name' => 'Razenry Aretha Silverine',
            'email' => 'razenry@com.com',
            'password' => Hash::make('password'),
            'user_type' => 'employee',
            'employee_id' => 'EMP001',
            'department' => 'IT',
            'position' => 'Developer',
            'phone' => '08123456789',
            'is_active' => true,
            'email_verified_at' => now(),
        ]);

        // Attach admin role
        $admin->roles()->attach(1); // role_id = 1 (admin)
    }
}
