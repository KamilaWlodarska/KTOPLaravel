<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ProductsCategory;

class ProductsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_category')->insert([
            ['pcat_name'=>'mleko', 'type' =>'żywność', 'home_id' =>1],
            ['pcat_name'=>'wd-40', 'type' =>'chemia', 'home_id' =>1],
            ['pcat_name'=>'apap', 'type' =>'leki', 'home_id' =>1],
        ]);
    }
}
