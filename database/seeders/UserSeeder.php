<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create user
        $user = User::create([
            'name' => 'Admin User',
            'image' => 'default.png',
            'email_verified_at' => now(),
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        $user->assignRole('admin');
    }
}
