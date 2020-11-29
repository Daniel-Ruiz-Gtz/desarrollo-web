<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('temas')->insert(['tema' => 'Navegadores']);
        DB::table('temas')->insert(['tema' => 'HTML']);
        DB::table('temas')->insert(['tema' => 'CSS']);
        DB::table('temas')->insert(['tema' => 'Frameworks']);
    }
}
