<?php

namespace Database\Factories;

use App\Models\AnnualLeave;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnnualLeaveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = AnnualLeave::class;
    public function definition()
    {
        return [
            'user_id' => User::factory(), // Asumsi Anda memiliki User model dan factory
            'reason' => $this->faker->sentence,
        ];
    }
}
