<?php

namespace Database\Seeders;

use App\Models\State as ModelsState;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class State extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsState::create([
            'state' => 'C/Out'
        ]);
    }
}
