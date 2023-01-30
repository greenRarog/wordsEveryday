<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeaningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meanings')->insert([
            [
                'meaning' => 'яблоко',
            ],            
            [
                'meaning' => 'тыблоко',
            ],                        
        ]);
    }
}
