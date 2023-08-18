<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert(
            [
                [
                    'name' => 'owner',
                    'email' => 'owner@owner.com',
                    'password' => Hash::make('password'),
                    'created_at' => '2023/8/18 22:10:02',
                ],
                [
                    'name' => 'test2',
                    'email' => 'test2@test.com',
                    'password' => Hash::make('password'),
                    'created_at' => '2023/8/18 22:10:02',
                ],
                [
                    'name' => 'test3',
                    'email' => 'test3@test.com',
                    'password' => Hash::make('password'),
                    'created_at' => '2023/8/18 22:10:02',
                ]
            ]
    );
    }
}
