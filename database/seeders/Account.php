<?php

namespace Database\Seeders;

use App\Models\Account as ModelsAccount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Account extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsAccount::create([
            'username' => "Jhon",
            'password' => Hash::make('taberna'),
            'teacher_id' => '1',
            'user_setup_id' => '1'
        ]);
    }
}
