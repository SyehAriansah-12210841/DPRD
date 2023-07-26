<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FraksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fraksi')->insert([
            ['slug' => 'a-a', 'nama' => 'Fraksi Gerinda Persatuan'],
            ['slug' => 'b-b', 'nama' => 'Fraksi Golongan Berkarya'],
            ['slug' => 'c-c', 'nama' => 'Fraksi PDIP'],
            ['slug' => 'd-d', 'nama' => 'Fraksi Nasdem'],
            ['slug' => 'e-e', 'nama' => 'Fraksi Demokrat'],

        ]);
    }
}
