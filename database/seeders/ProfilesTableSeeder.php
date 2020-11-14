<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'description' => 'Admin'
        ]);
        DB::table('profiles')->insert([
            'description' => 'Avaliador'
        ]);
        DB::table('profiles')->insert([
            'description' => 'Empresa'
        ]);
        DB::table('profiles')->insert([
            'description' => 'Usuário'
        ]);
    }
}
