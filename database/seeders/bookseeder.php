<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('book')->insert([
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'price' => 299,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'price' => 249,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
