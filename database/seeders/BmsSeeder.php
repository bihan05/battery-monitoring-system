<?php

namespace Database\Seeders;

use App\Models\BmsModel;
use App\Models\BmsModel_Mggr;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 15; $i++) {
            BmsModel::create([
                'baterai' => $i,
                'tegangan' => rand(12.0, 13.8),
                'hambatan_dalam' => rand(0.0, 1.0),
                'persen' => rand(50, 100),
            ]);
        }
    }
}
