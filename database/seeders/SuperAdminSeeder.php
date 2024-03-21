<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Superadmin User', 
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        $superAdmin->assignRole('Super-Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Admin User', 
            'email' => 'admin@gmail.com',
            'password' => Hash::make('87654321')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'Office Assistant', 
            'email' => 'assistant@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        $productManager->assignRole('Office-Assistant');
    }
}