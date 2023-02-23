<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Administrator',
                'email' => 'admin@bcp.sms',
                'username' => 'hrAdmin',
                'password' => Hash::make('admin1234'),
                'phone' => '123-123-4',
                'user_level' => 0
            ],
            [
                'name' => ' HR1 Manager',
                'email' => 'hr1@bcp.sms',
                'username' => 'hr1Manager',
                'password' => Hash::make('admin1234'),
                'phone' => '123-123-4',
                'user_level' => 1
            ],
            [
                'name' => ' HR2 Manager',
                'email' => 'hr2@bcp.sms',
                'username' => 'hr2Manager',
                'password' => Hash::make('admin1234'),
                'phone' => '123-123-4',
                'user_level' => 2
            ],
        ]);
    }
}
