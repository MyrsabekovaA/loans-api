<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('loans')->insert([
            ['amount' => 1000.00, 'creation_date' => '2024-01-01', 'status' => 'approved'],
            ['amount' => 2000.00, 'creation_date' => '2024-01-02', 'status' => 'pending'],
            ['amount' => 1500.50, 'creation_date' => '2024-01-03', 'status' => 'rejected'],
        ]);
    }
}
