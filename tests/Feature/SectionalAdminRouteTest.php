<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SectionalAdminRouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     * @return void
     */
    public function user_can_visit_sectional_admin_dashboard()
    {
        $this->withoutMiddleware();
        $response = $this->get(route('sectional_admin.dashboard'));

        $response->assertStatus(200);
    }

    /**
     * @test
     * @return void
     */
    public function authenticated_user_can_visit_sectional_admin_home_page()
    {
        $this->withoutMiddleware(['role:sectional_admin']);
        $response = $this->get('/sectional_admin');

        $response->assertStatus(302);
    }
}
