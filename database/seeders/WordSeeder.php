<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('words')->insert([
            [
                'name' => 'apple1',
                'transcription' => "[ˈæpl]",
                'used' => 'no',
                'date_use' => '2000-01-01 01:01:01',
            ],
            [
                'name' => 'apple2',
                'transcription' => "[ˈæpl]",
                'used' => 'no',
                'date_use' => '2000-01-01 01:01:01',
            ],
            [
                'name' => 'apple3',
                'transcription' => "[ˈæpl]",
                'used' => 'no',
                'date_use' => '2000-01-01 01:01:01',
            ],
            [
                'name' => 'apple4',
                'transcription' => "[ˈæpl]",
                'used' => 'no',
                'date_use' => '2000-01-01 01:01:01',
            ],
            [
                'name' => 'apple5',
                'transcription' => "[ˈæpl]",
                'used' => 'no',
                'date_use' => '2000-01-01 01:01:01',
            ],
            [
                'name' => 'apple6',
                'transcription' => "[ˈæpl]",
                'used' => 'no',
                'date_use' => '2000-01-01 01:01:01',
            ],
            [
                'name' => 'apple7',
                'transcription' => "[ˈæpl]",
                'used' => 'no',
                'date_use' => '2000-01-01 01:01:01',
            ],            
            [
                'name' => 'apple8',
                'transcription' => "[ˈæpl]",
                'used' => 'no',
                'date_use' => '2000-01-01 01:01:01',
            ],            
            [
                'name' => 'apple9',
                'transcription' => "[ˈæpl]",
                'used' => 'no',
                'date_use' => '2000-01-01 01:01:01',
            ],            
            [
                'name' => 'apple10',
                'transcription' => "[ˈæpl]",
                'used' => 'no',
                'date_use' => '2000-01-01 01:01:01',
            ],            
            ]);
    }
}
