<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CulturalHeritageSite>
 */
class CulturalHeritageSiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $textFields = ['name', 'description'];
        $result = [];
        foreach($textFields as $textField) {
            $result += [$textField => $this->faker->text(20)];
        }
        return $result;
    }
}
