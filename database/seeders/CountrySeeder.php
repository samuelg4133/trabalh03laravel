<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            "name" => "Brasil",
            "initials" => "BR",
        ]);

        DB::table('countries')->insert([
            "name" => "Estados Unidos da América",
            "initials" => "EUA",
        ]);
        DB::table('countries')->insert([
            "name" => "Inglaterra",
            "initials" => "ING",
        ]);
    }
}
