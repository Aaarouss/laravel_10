<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
        /**
         * Seed the application's database.
         */
    public function run(): void
    {
        $sql = file_get_contents(__DIR__.'/categories.sql');
        DB::unprepared($sql);

        $sql = file_get_contents(__DIR__.'/etiquette.sql');
        DB::unprepared($sql);

        $sql = file_get_contents(__DIR__.'/plat.sql');
        DB::unprepared($sql);

        $sql = file_get_contents(__DIR__.'/etiquette_plat.sql');
        DB::unprepared($sql);
    }
}