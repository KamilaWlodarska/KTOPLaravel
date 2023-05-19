<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Products;
use Carbon\Carbon;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['pcat_id'=>5, 'purchase_date' =>Carbon::parse('2023-01-15'), 'open_date' =>null, 'deadline' =>Carbon::parse('2023-06-01')],
            ['pcat_id'=>5, 'purchase_date' =>Carbon::parse('2023-01-02'), 'open_date' =>Carbon::parse('2023-01-09'), 'deadline' =>Carbon::parse('2023-05-20')],
            ['pcat_id'=>6, 'purchase_date' =>Carbon::parse('2022-11-05'), 'open_date' =>Carbon::parse('2022-11-15'), 'deadline' =>Carbon::parse('2025-01-01')],
            ['pcat_id'=>7, 'purchase_date' =>Carbon::parse('2022-12-10'), 'open_date' =>Carbon::parse('2022-12-10'), 'deadline' =>Carbon::parse('2024-03-15')],
        ]);
    }
}
