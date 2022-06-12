<?php

namespace Database\Factories;

use App\Models\CulturalHeritageSite;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MapCoordinate>
 */
class MapCoordinateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'longitude' => rand(48, 86),
            'latitute' => rand(40, 55),
            'site_id' => CulturalHeritageSite::factory()->create()->id

        ];
    }
}
