<?php

namespace Database\Factories;

use App\Models\Pocket;
use Illuminate\Database\Eloquent\Factories\Factory;

class PocketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pocket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text('20')
        ];
    }
}
