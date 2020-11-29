<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['categoria' => 'HTML']);
        Categoria::create(['categoria' => 'JavaScript']);
        Categoria::create(['categoria' => 'Git']);
        Categoria::create(['categoria' => 'Laravel']);
        Categoria::create(['categoria' => 'Editores de Texto']);
    }
}
