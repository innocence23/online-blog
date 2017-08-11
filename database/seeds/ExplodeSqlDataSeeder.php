<?php

use Illuminate\Database\Seeder;

class ExplodeSqlDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::unprepared(file_get_contents(database_path()."/dump.sql"));
    }
}
