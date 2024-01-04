<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AbsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $random = rand(0,100);
        $time = Carbon::now()->subDay($random);
        //
        DB::table('absens')->insert([
            ['nis' => '1000120001', 'id_act' => 'BD', 'date' => $time],
            ['nis' => '1000120001', 'id_act' => 'AQ', 'date' => $time],
            ['nis' => '1000120001', 'id_act' => 'MH', 'date' => $time],
            ['nis' => '1000120001', 'id_act' => 'MD', 'date' => $time],
            ['nis' => '1000120002', 'id_act' => 'BD', 'date' => $time],
            ['nis' => '1000120002', 'id_act' => 'AQ', 'date' => $time],
            ['nis' => '1000120002', 'id_act' => 'MH', 'date' => $time],
            ['nis' => '1000120002', 'id_act' => 'MD', 'date' => $time],
            ['nis' => '1000120003', 'id_act' => 'BD', 'date' => $time],
            ['nis' => '1000120003', 'id_act' => 'AQ', 'date' => $time],
            ['nis' => '1000120003', 'id_act' => 'MH', 'date' => $time],
            ['nis' => '1000120003', 'id_act' => 'MD', 'date' => $time],
            ['nis' => '1000120004', 'id_act' => 'BD', 'date' => $time],
            ['nis' => '1000120004', 'id_act' => 'AQ', 'date' => $time],
            ['nis' => '1000120004', 'id_act' => 'MH', 'date' => $time],
            ['nis' => '1000120004', 'id_act' => 'MD', 'date' => $time],
            ['nis' => '1000120005', 'id_act' => 'BD', 'date' => $time],
            ['nis' => '1000120005', 'id_act' => 'AQ', 'date' => $time],
            ['nis' => '1000120005', 'id_act' => 'MH', 'date' => $time],
            ['nis' => '1000120005', 'id_act' => 'MD', 'date' => $time],
            ['nis' => '1000120006', 'id_act' => 'BD', 'date' => $time],
            ['nis' => '1000120006', 'id_act' => 'AQ', 'date' => $time],
            ['nis' => '1000120006', 'id_act' => 'MH', 'date' => $time],
            ['nis' => '1000120006', 'id_act' => 'MD', 'date' => $time],
            ['nis' => '1000120007', 'id_act' => 'BD', 'date' => $time],
            ['nis' => '1000120007', 'id_act' => 'AQ', 'date' => $time],
            ['nis' => '1000120007', 'id_act' => 'MH', 'date' => $time],
            ['nis' => '1000120007', 'id_act' => 'MD', 'date' => $time],
            ['nis' => '1000120008', 'id_act' => 'BD', 'date' => $time],
            ['nis' => '1000120008', 'id_act' => 'AQ', 'date' => $time],
            ['nis' => '1000120008', 'id_act' => 'MH', 'date' => $time],
            ['nis' => '1000120008', 'id_act' => 'MD', 'date' => $time],
            ['nis' => '1000120009', 'id_act' => 'BD', 'date' => $time],
            ['nis' => '1000120009', 'id_act' => 'AQ', 'date' => $time],
            ['nis' => '1000120009', 'id_act' => 'MH', 'date' => $time],
            ['nis' => '1000120009', 'id_act' => 'MD', 'date' => $time],
            ['nis' => '1000120010', 'id_act' => 'BD', 'date' => $time],
            ['nis' => '1000120010', 'id_act' => 'AQ', 'date' => $time],
            ['nis' => '1000120010', 'id_act' => 'MH', 'date' => $time],
            ['nis' => '1000120010', 'id_act' => 'MD', 'date' => $time],
            ['nis' => '1000120011', 'id_act' => 'BD', 'date' => $time],
            ['nis' => '1000120011', 'id_act' => 'AQ', 'date' => $time],
            ['nis' => '1000120011', 'id_act' => 'MH', 'date' => $time],
            ['nis' => '1000120011', 'id_act' => 'MD', 'date' => $time],
            ['nis' => '1000120012', 'id_act' => 'BD', 'date' => $time],
            ['nis' => '1000120012', 'id_act' => 'AQ', 'date' => $time],
            ['nis' => '1000120012', 'id_act' => 'MH', 'date' => $time],
            ['nis' => '1000120012', 'id_act' => 'MD', 'date' => $time],
            ['nis' => '1000120013', 'id_act' => 'AQ', 'date' => $time],
        ]);
    }
}
