<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        DB::table('users')->insert([
           'name' => "Hugo",
            'password' => Hash::make("password"),
            'email' => "hugo@local.com",
            'email_verified_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => "Sara",
            'password' => Hash::make("password"),
            'email' => "sara@local.com",
            'email_verified_at' => now()
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
