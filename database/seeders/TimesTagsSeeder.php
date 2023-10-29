<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TimesTag;
use App\Enums\TimeTagType;

class TimesTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TimesTag::query()->create([
            'name' => '15-20min',
            'type' => TimeTagType::Short,
        ]);
        TimesTag::query()->create([
            'name' => '30-40min',
            'type' => TimeTagType::Mid,
        ]);
        TimesTag::query()->create([
            'name' => '1h',
            'type' => TimeTagType::Mid_long,
        ]);
        TimesTag::query()->create([
            'name' => '+1h',
            'type' => TimeTagType::Long,
        ]);
    }
}
