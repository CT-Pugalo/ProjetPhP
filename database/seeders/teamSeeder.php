<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class teamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('teams')->truncate();
        DB::table('teams')->insert([
            'name' => 'JAiFaim'
        ]);
        $user = User::findOrFail(1);
        $user->teamId = 1;
        $user->save();
        $user = User::findOrFail(2);
        $user->teamId = 1;
        $user->save();
        Schema::enableForeignKeyConstraints();
    }
}
