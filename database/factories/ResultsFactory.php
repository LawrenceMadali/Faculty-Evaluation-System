<?php

namespace Database\Factories;

use App\Models\Results;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResultsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Results::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                      => $this->faker->name,
            'id_number'                 => rand(1000000000, 400000000),
            'college_id'                => 1,
            'semester_id'               => 1,
            'instructor_id'             => rand(1,4),
            'school_year_id'            => $this->faker->numberBetween(1,4),
            'student_evaluation_result' => rand(1, 5),
            'peer_evaluation_result'    => rand(1, 5),
            'supervisor'                => rand(1, 5),
            'ipcr'                      => rand(1, 5),
            'total'                     => rand(1, 5),
        ];
    }
}
