<?php

namespace Database\Factories;

use App\Models\Evenement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class EvenementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Evenement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->realTextBetween(1, 10, 2),
            'paf' => $this->faker->numberBetween(1, 15),
            'type_id' => 1,
            'nbPersonne' => $this->faker->numberBetween(10, 255),
            'team_id' => 1
        ];
    }
}
