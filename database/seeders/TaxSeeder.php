<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('taxes')->truncate();
        $now = Carbon::now();

        $data = [
            ['name' => 'VAT', 'description' => 'VAT', 'percentage' => 12.5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'GETFund', 'description' => 'GETFund', 'percentage' => 2.5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'COVID 19 TAX', 'description' => 'COVID 19 TAX', 'percentage' => 1.0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'NHIL', 'description' => 'NHIL', 'percentage' => 2.5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'CST', 'description' => 'CST', 'percentage' => 5.0, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Flat VAT', 'description' => 'Flat VAT', 'percentage' => 3.0, 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('taxes')->insertOrIgnore($data);
    }
}
