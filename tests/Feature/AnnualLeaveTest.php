<?php

namespace Tests\Feature;

use App\Models\AnnualLeave;
use App\Models\LeaveDate;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
class AnnualLeaveTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_annual_leave()
    {
        $user = User::factory()->create();
        $data = [
            'user_id' => $user->id,
            'reason' => 'Cutting short vacation',
            "dates" => [
                now()->format('Y-m-d'),
                now()->addDays(1)->format('Y-m-d'),
                now()->addDays(2)->format('Y-m-d'),
            ]
        ];

        $this->post('api/annual-leaves', $data)
            ->assertStatus(201);

        $this->assertDatabaseHas('annual_leaves', [
            'user_id' => $user->id,
            'reason' => 'Cutting short vacation',
        ]);
    }

    public function test_can_get_all_annual_leaves()
    {
        AnnualLeave::factory()->create();

        $response = $this->get('api/annual-leaves');

        $response->assertStatus(200);
    }

    public function test_can_get_single_annual_leave()
    {
        $annualLeave = AnnualLeave::factory()->create();

        $response = $this->get("api/annual-leaves/{$annualLeave->id}");

        $response->assertStatus(200);
    }
}
