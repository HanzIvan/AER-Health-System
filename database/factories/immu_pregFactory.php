<?php

namespace Database\Factories;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\immu_preg>
 */
class Immu_pregFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create();
        return [
            'one_ef_client_id' => $faker->unique()->numberBetween(1, 10),
            'ONE_IP_IMMPREG' => $faker->word,
        ];
    }
}
