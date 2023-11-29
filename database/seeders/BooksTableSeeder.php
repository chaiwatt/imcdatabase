<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'name' => 'ฟิงเกอร์แมท เล่ม 1'
            ],
            [
                'name' => 'ฟิงเกอร์แมท เล่ม 2'
            ],
            [
                'name' => 'ฟิงเกอร์แมท เล่ม 3'
            ],
            [
                'name' => 'ลูกคิด เล่ม 1'
            ],
            [
                'name' => 'ลูกคิด เล่ม 2'
            ],
            [
                'name' => 'จินตนาการ เล่ม 1'
            ],
            [
                'name' => 'จินตนาการ เล่ม 2'
            ]
        ]);
    }
}
