<?php
declare(strict_types=1);

namespace Database\migrations;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Database\Seeders\DishesSeeder;
use Database\Seeders\IngredientsTagsSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('admin'),
        ]);
        $this->call(IngredientsTagsSeeder::class);
        $this->call(DishesSeeder::class);
    }
}
