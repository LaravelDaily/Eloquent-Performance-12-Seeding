<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Country;
use App\Models\Employee;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'country_id' => rand(1, 240),
            'company_id' => rand(1, 1000),
            'position_id' => rand(1, 3),
        ];
    }
}
