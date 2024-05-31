<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Luas Rumah',
                'weight' => 0.25,
                
            ],
            [
                'name' => 'Gaji',
                'weight' => 0.25,
                
            ],
            [
                'name' => 'Status',
                'weight' => 0.20,
                
            ],
            [
                'name' => 'Jumlah Usia Lanjut',
                'weight' => 0.20,
                
            ],
            [
                'name' => 'Jarak Domisili',
                'weight' => 0.10,
                
            ],
        ];
        DB::table('criterias')->insert($data);
    }
}
