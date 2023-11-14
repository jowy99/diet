<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IngredientsTag;
use App\Models\Dishes;

class DishesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingTags = IngredientsTag::query()
            ->select(['id'])
            ->get();

        $dishes = Dishes::factory()->count(10)->create();

        foreach ($dishes as $dish)
        {
            $ntags = random_int(1, 4);
            $dish->IngredientsTag()->attach($ingTags->random($ntags));
        }
    }
}
