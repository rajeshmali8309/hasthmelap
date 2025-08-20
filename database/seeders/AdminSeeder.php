<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
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
        Admin::create([
            'name' => 'Hasthmelap',
            'email' => 'hasthmelap@gmail.com',
            'password' => Hash::make('JD@2025.'),
        ]);
        Admin::create([
            'name' => 'Ravi Kumar',
            'email' => 'ravikumarmali0908@gmail.com',
            'password' => Hash::make('ravimali123'),
        ]);
    }
}
