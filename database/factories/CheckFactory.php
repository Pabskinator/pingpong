<?php

namespace Database\Factories;

use App\Models\Check;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class CheckFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Check::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws Exception
     */
    public function definition()
    {
        return [
            'response_status' => rand(200, 204),
            'response_content' => $this->faker->randomHtml(),
            'elapsed_time' => random_int(1, 100)
        ];
    }
}
