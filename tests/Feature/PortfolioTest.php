<?php

namespace Tests\Feature;

use App\Mail\ContactFormSubmitted;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;
    public function test_portfolio_page_renders_successfully_with_all_sections(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Minal Patel');
        $response->assertSee('Full-Stack Software Engineer &amp; Solutions Architect', false);
        $response->assertSee('Full-Stack Web Development');
        $response->assertSee('Backend Engineering');
        $response->assertSee('Career Pathway');
        $response->assertSee('Featured Work');
        $response->assertDontSee('Client Feedback');
        $response->assertDontSee('Specialized in:');
        $response->assertSee('Camp MusArt - Track Out Camp', false);
        $response->assertSee('Inspiring Excellence - Coaching Platform', false);
        $response->assertSee('Open to New Projects');
        $response->assertDontSee('bi-linkedin');
        $response->assertDontSee('bi-twitter-x');
    }

    public function test_contact_form_submission_succeeds_with_valid_data(): void
    {
        Mail::fake();

        $payload = [
            'name' => 'Sarah Connor',
            'email' => 'sarah@example.com',
            'subject' => 'New Laravel Project Opportunity',
            'message' => 'We have an exciting web platform we need built with Laravel and Bootstrap. Let us talk!',
        ];

        $response = $this->postJson(route('portfolio.contact'), $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
        ]);
        $response->assertJsonFragment([
            'message' => 'Thank you, Sarah Connor! Your message has been received. I will reply to you as soon as possible.',
        ]);

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Sarah Connor',
            'email' => 'sarah@example.com',
        ]);

        Mail::assertSent(ContactFormSubmitted::class, function ($mail) {
            return $mail->hasTo('minalp391@gmail.com');
        });
    }

    public function test_contact_form_fails_validation_with_missing_fields(): void
    {
        $response = $this->postJson(route('portfolio.contact'), [
            'name' => '',
            'email' => 'invalid-email',
            'subject' => '',
            'message' => 'short',
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['name', 'email', 'subject', 'message']);
    }

    public function test_contact_form_supports_standard_post_with_flash_message(): void
    {
        Mail::fake();

        $payload = [
            'name' => 'John Wick',
            'email' => 'john@continental.com',
            'subject' => 'Consulting Request',
            'message' => 'I need assistance optimizing a large-scale database schema and APIs.',
        ];

        $response = $this->post(route('portfolio.contact'), $payload);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'John Wick',
            'email' => 'john@continental.com',
        ]);
    }
}
