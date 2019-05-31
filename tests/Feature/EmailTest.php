<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmailTest extends TestCase
{
    /** @test **/
    public function custom_email_will_be_sent()
    {
        Mail::fake();

        $this->post('/emails/sent', [
            'subject' => 'subject',
            'body' => 'body',
            'to' => 'to@example.com'
        ]);

        
        Mail::assertSent(CustomEmail::class);
        
    }
}
