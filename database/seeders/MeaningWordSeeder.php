<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeaningWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meaning_word')->insert([
            [
                'word_id' => '1',
                'meaning_id' => '1',
            ],
            [
                'word_id' => '2',
                'meaning_id' => '1',
            ],
            [
                'word_id' => '3',
                'meaning_id' => '1',
            ],
            [
                'word_id' => '4',
                'meaning_id' => '1',
            ],
            [
                'word_id' => '5',
                'meaning_id' => '1',
            ],
            [
                'word_id' => '6',
                'meaning_id' => '2',
            ],            
            [
                'word_id' => '7',
                'meaning_id' => '2',
            ],
            [
                'word_id' => '8',
                'meaning_id' => '2',
            ],
            [
                'word_id' => '9',
                'meaning_id' => '2',
            ],
            [
                'word_id' => '10',
                'meaning_id' => '2',
            ],            
        ]);
    }
}
