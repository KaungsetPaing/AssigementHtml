<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'kaungset',
            'email' => 'kaungset@gmail.com',
            'password'=>Hash::make('1234567'),
        ]);
        $admin->assignRole('Admin');

        $editor = User::create([
            'name' => 'jhon',
            'email' => 'jhon@gmail.com',
            'password'=>Hash::make('7654321'),
        ]);
        $editor->assignRole('Editor');
    }
}
