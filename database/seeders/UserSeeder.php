<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            [
                'username' => 'tolosa_admin',
                'first_name' => 'Tolosa',
                'middle_name' => '',
                'last_name' => '',
                'role_id' => '1',
                'role' => 'Admin',
                'specialization' => '',
                'birthday' => '2023-10-29',
                'contact' => '',
                'email' => '',
                'profile_picture' => 'default-profile.jpg',
                'status' => 'Active',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            ],
            [
                'username' => '3ddata_team',
                'first_name' => 'COLLABDev',
                'middle_name' => '',
                'last_name' => 'Data Team',
                'role_id' => '1',
                'role' => 'Admin',
                'specialization' => '',
                'birthday' => '2021-01-01',
                'contact' => '09212345689',
                'email' => 'data@aer.ph',
                'profile_picture' => 'download (1).png',
                'status' => 'Active',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            ],
            
        ];
        
        foreach($users as $user){
            User::create($user);
        }
    }
}
