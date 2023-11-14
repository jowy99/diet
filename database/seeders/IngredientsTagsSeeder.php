<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\IngredientTagType;
use App\Models\IngredientsTag;

class IngredientsTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IngredientsTag::query()->create([
            'name' => 'Carne roja',
            'type' => IngredientTagType::Red_meat,
        ]);
        IngredientsTag::query()->create([
            'name' => 'Carne blanca',
            'type' => IngredientTagType::White_meat,
        ]);
        IngredientsTag::query()->create([
            'name' => 'Verdura',
            'type' => IngredientTagType::Vegetable,
        ]);
        IngredientsTag::query()->create([
            'name' => 'Fruta',
            'type' => IngredientTagType::Fruit,
        ]);
        IngredientsTag::query()->create([
            'name' => 'Pescado blanco',
            'type' => IngredientTagType::White_fish,
        ]);
        IngredientsTag::query()->create([
            'name' => 'Pescado azul',
            'type' => IngredientTagType::Blue_fish,
        ]);
        IngredientsTag::query()->create([
            'name' => 'Legumbres',
            'type' => IngredientTagType::Legume,
        ]);
        IngredientsTag::query()->create([
            'name' => 'Sopa',
            'type' => IngredientTagType::Soup,
        ]);
        IngredientsTag::query()->create([
            'name' => 'Carbohidratos',
            'type' => IngredientTagType::Carbohydrates,
        ]);
    }
}
