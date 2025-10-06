<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->create([
            'id' => 1,
            'name' => 'doce',
            'parent_id' => null
        ]);
        Category::factory()->create([
            'id' => 2,
            'name' => 'pote',
            'parent_id' => 1
        ]);
        Category::factory()->create([
            'id' => 3,
            'name' => 'caixa',
            'parent_id' => 1
        ]);
    }
}
