<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Homes;

class UsersHomesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_homes')->insert([
            ['user_id'=>1, 'home_id' =>1],
            ['user_id'=>1, 'home_id' =>2],
            ['user_id'=>2, 'home_id' =>1],
        ]);
    }
}
