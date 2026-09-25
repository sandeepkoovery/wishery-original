<?php

namespace Tests\Feature;

use App\Models\Creator;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreatorTest extends TestCase
{
    use RefreshDatabase;

    public function test_creator_page_can_be_rendered(): void
    {
        $response = $this->get('/creator');

        $response->assertStatus(200);
        $response->assertSee('Are you ready to be the part of', false);
        $response->assertSee('Full Name', false);
        $response->assertSee('WISHERY', false);
        $response->assertSee('Instagram', false);
        $response->assertSee('followers', false);
        $response->assertSee('Content Niche', false);
        $response->assertSee('Commercials / Charges', false);
        $response->assertSee('Instagram Profile Link', false);
        $response->assertSee('Contact Number', false);
        $response->assertSee('Instagram Profile Link');
        $response->assertSee('Contact Number');
    }

    public function test_creator_application_can_be_submitted_via_ajax(): void
    {
        $payload = [
            'full_name' => 'Rahul Sharma',
            'instagram_followed' => 'Yes, I’m already following',
            'follower_count' => '25K - 50K',
            'content_niche' => 'Tech',
            'state' => 'Kerala',
            'district' => 'Ernakulam',
            'commercials' => '10000 per reel',
            'instagram_link' => 'https://instagram.com/rahul_tech',
            'contact_number' => '+91 9847012345',
        ];

        $response = $this->postJson('/creator', $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'status' => 'success',
            'message' => 'Thank you! Your response has been recorded.',
        ]);

        $this->assertDatabaseHas('creators', [
            'full_name' => 'Rahul Sharma',
            'content_niche' => 'Tech',
            'district' => 'Ernakulam',
            'contact_number' => '+91 9847012345',
        ]);
    }

    public function test_creator_application_validation_errors(): void
    {
        $response = $this->postJson('/creator', []);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors([
            'full_name',
            'instagram_followed',
            'follower_count',
            'content_niche',
            'state',
            'district',
            'commercials',
            'instagram_link',
            'contact_number',
        ]);
    }
}
