<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IngredientsTag;
use App\Support\MediaLibrary\NamePathGenerator;
use App\Models\Dishes;
use App\Models\Media;
use Illuminate\Support\Facades\Config;



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

        $generator = Config::get('media-library.path_generator');
        Config::set('media-library.path_generator', NamePathGenerator::class);
        $media = Media::create([
            'model_type' => 'App\Models\Dishes',
            'model_id' => 0,
            'collection_name' => 'dishes',
            'name' => 'test',
            'file_name' => 'test.jpg',
            'mime_type' => 'image/jpeg',
            'disk' => 's3',
            'conversions_disk' => 's3',
            'size' => 612095,
            'manipulations' => [],
            'custom_properties' => [],
            'generated_conversions' => [
                "web" => true,
                "thumb" => true,
            ],
            'responsive_images' => [
                "web" => [
                    "urls" => [
                        "test___web_3840_2560.jpg",
                        "test___web_3212_2141.jpg",
                        "test___web_2688_1792.jpg",
                        "test___web_2248_1499.jpg",
                        "test___web_1881_1254.jpg",
                        "test___web_1574_1049.jpg",
                        "test___web_1317_878.jpg",
                        "test___web_1101_734.jpg",
                        "test___web_921_614.jpg",
                        "test___web_771_514.jpg",
                        "test___web_645_430.jpg",
                        "test___web_539_359.jpg",
                    ],
                    "base64svg" => "data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMzg0MCAyNTYwIj4KCTxpbWFnZSB3aWR0aD0iMzg0MCIgaGVpZ2h0PSIyNTYwIiB4bGluazpocmVmPSJkYXRhOmltYWdlL2pwZWc7YmFzZTY0LC85ai80QUFRU2taSlJnQUJBUUVBWUFCZ0FBRC8vZ0E3UTFKRlFWUlBVam9nWjJRdGFuQmxaeUIyTVM0d0lDaDFjMmx1WnlCSlNrY2dTbEJGUnlCMk9EQXBMQ0J4ZFdGc2FYUjVJRDBnT1RBSy85c0FRd0FEQWdJREFnSURBd01EQkFNREJBVUlCUVVFQkFVS0J3Y0dDQXdLREF3TENnc0xEUTRTRUEwT0VRNExDeEFXRUJFVEZCVVZGUXdQRnhnV0ZCZ1NGQlVVLzlzQVF3RURCQVFGQkFVSkJRVUpGQTBMRFJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVUvOEFBRVFnQUZRQWdBd0VSQUFJUkFRTVJBZi9FQUI4QUFBRUZBUUVCQVFFQkFBQUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVRQUFJQkF3TUNCQU1GQlFRRUFBQUJmUUVDQXdBRUVRVVNJVEZCQmhOUllRY2ljUlF5Z1pHaENDTkNzY0VWVXRId0pETmljb0lKQ2hZWEdCa2FKU1luS0NrcU5EVTJOemc1T2tORVJVWkhTRWxLVTFSVlZsZFlXVnBqWkdWbVoyaHBhbk4wZFhaM2VIbDZnNFNGaG9lSWlZcVNrNVNWbHBlWW1acWlvNlNscHFlb3FhcXlzN1MxdHJlNHVickN3OFRGeHNmSXljclMwOVRWMXRmWTJkcmg0dVBrNWVibjZPbnE4Zkx6OVBYMjkvajUrdi9FQUI4QkFBTUJBUUVCQVFFQkFRRUFBQUFBQUFBQkFnTUVCUVlIQ0FrS0MvL0VBTFVSQUFJQkFnUUVBd1FIQlFRRUFBRUNkd0FCQWdNUkJBVWhNUVlTUVZFSFlYRVRJaktCQ0JSQ2thR3h3UWtqTTFMd0ZXSnkwUW9XSkRUaEpmRVhHQmthSmljb0tTbzFOamM0T1RwRFJFVkdSMGhKU2xOVVZWWlhXRmxhWTJSbFptZG9hV3B6ZEhWMmQzaDVlb0tEaElXR2g0aUppcEtUbEpXV2w1aVptcUtqcEtXbXA2aXBxckt6dExXMnQ3aTV1c0xEeE1YR3g4akp5dExUMU5YVzE5aloydUxqNU9YbTUranA2dkx6OVBYMjkvajUrdi9hQUF3REFRQUNFUU1SQUQ4QTB0WThYUy9zOWZEOTROUGNPNmRLMWVoT3cvd1grMnZxTVhocU8vdklRNEp3Y1ZWbGE0S1RPaTE3OXE2NjhSMjlrTEtNYlhJTEN1S1ZUV3h2eSs3ZG4ySDhIUEVwMWp3WGFYZHdmTEpRRWsxckYzTW91NStaL3dBVjd3ZkV1M2V6Z20ySWVwTlR6Nm1uTG9ZWGh6NEVYa2ZoWjdkTG8zQ0hrS296V3Jhc1pLTHVhSGc3NFcrS0xMVWJjZllwRGJJNEdXSGJOWU9DYnVicDlHZlczeEUrTlduZkNmNE53MnIzYVcrbytXQUVWdVFhMFdoRnJIbTlqOEpOSFY0U04vekhrWXJKUlRWelZ1enNlMytFZkEybGFKWVJpR0FNQ1A0aFdDazBkSEttZVBmdE8vRkRVZmgvWStWcE1NTU80ZmVBd1JTVldUZGdkTkpYUHppK0tueEkxM3hmZE1kUnZaSlZKKzZXT0JXOFhkbkxNLy9aIj4KCTwvaW1hZ2U+Cjwvc3ZnPg==",
                ],
            ],
            'order_column' => 1,
        ]);


        $dishes = Dishes::factory()->count(14)->create();

        foreach ($dishes as $dish)
        {
            $media->replicate(['uuid', 'id'])
                ->fill(['model_id' => $dish->id])
                ->save();

            $ntags = random_int(1, 4);
            $dish->IngredientsTag()->attach($ingTags->random($ntags));
        }
        $media->delete();
        Config::set('media-library.path_generator', $generator);
    }
}
