<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\timeinout;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('teachers')->insert([
            'fname' => 'Neil Mark',
            'lname' => 'Luspo',
            'mname' => 'A.',
            'role_id' => '1',
            'timeInOut_id' => '1'
        ]);

        DB::table('accounts')->insert([
            'teacher_id' => '1',
            'username' => 'Neil',
            'password' => Hash::make('luspo'),
            'user_setup_id' => '1'
        ]);

        DB::table('user_set_ups')->insert([
            'setup' => 'admin'
        ]);

        DB::table('user_set_ups')->insert([
            'setup' => 'teacher'
        ]);

    }
}
