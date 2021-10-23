<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('types')->truncate();
        DB::table('types')->insert([
            'intitule' => 'Lan'
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
