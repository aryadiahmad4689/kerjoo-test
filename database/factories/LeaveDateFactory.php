<?php

namespace Database\Factories;

use App\Models\LeaveDate;
use App\Models\AnnualLeave;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeaveDateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = LeaveDate::class;
    public function definition()
    {
        return [
            'annual_leave_id' => AnnualLeave::factory(), // Membuat AnnualLeave secara otomatis
            'date' => $this->faker->date(),
        ];
    }
}
