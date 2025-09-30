<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'PHP Dasar',
                'author' => 'Markus Maulana',
                'year' => 2003,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'UI/UX Pemula',
                'author' => 'Gilang',
                'year' => 1999,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cara Sukses di Usia Muda',
                'author' => 'Gilbert Johnson',
                'year' => 2004,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Refactoring',
                'author' => 'Martin Fowler',
                'year' => 1999,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laravel 12 Pemula',
                'author' => 'Gideon',
                'year' => 2024,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
