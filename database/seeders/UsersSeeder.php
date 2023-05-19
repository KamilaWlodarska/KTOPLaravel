<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'user', 'email' =>'user123@user.com', 'password' =>'user123'],
            ['name'=>'admin', 'email' =>'admin123@admin.com', 'password' =>'admin123'],
        ]);
    }
}
