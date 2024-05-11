<?php

namespace Database\Seeders;

use App\Models\Teacher as ModelsTeacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Teacher extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsTeacher::create([
            'fname' => 'Jhon Rey',
            'lname' => 'Taberna',
            'mname' => ' ',
            'role_id' => '1',
            'timeInOut_id' => '1',

        ]);
    }
}
