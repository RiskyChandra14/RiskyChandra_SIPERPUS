<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookshelfSheeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("bookshelves")->insert([
            [
                'code' => 'RAX0A',
                'name'=> 'MANGA',
            ],
            [ 
                'code'=> 'RAK18',
                'name'=> 'Novel',
            ],
            [
                'code'=> 'TAG2C',
                'name'=> 'Kitab Kuning',
            ],

        ]);
    }
}
