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
            'name' => 'Vraj Shah',
            'email' => 'vrajpshah28@gmail.com',
            'password' => Hash::make('Vrajjd282412'),
        ]);

        Admin::create([
            'name' => 'Neel Bhadreshvara',
            'email' => 'neelbhadreshvara@gmail.com',
            'password' => Hash::make('SEISEN@13189'),
        ]);

        Admin::create([
            'name' => 'Yash Sharma',
            'email' => 'sidsha01313@gmail.com',
            'password' => Hash::make('yash@2602'),
        ]);
    }
}
