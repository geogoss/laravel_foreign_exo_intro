<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            ['car' => 'BMW', 'color_id' => '0'],
            ['car' => 'Toyota', 'color_id' => '1'],
            ['car' => 'Mercedes', 'color_id' => '2'],
            ['car' => 'Opel', 'color_id' => '3'],
            ['car' => 'Porshe', 'color_id' => '4']
        ]);
    }
}
