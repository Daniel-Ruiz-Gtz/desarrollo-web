<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->times(3)
            ->administrador()
            ->create();

        User::factory()->times(50)
            ->alumno()
            ->has(Alumno::factory()->count(1))
            ->create();
    }
}
