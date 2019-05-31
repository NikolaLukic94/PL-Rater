<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactUsTest extends TestCase
{
    /** @test **/
    public function contact_us_store_will_send_an_email_to_support()
    {
        Mail::fake();

        $this->post('/emails/sent', [
            'subject' => 'subject',
            'body' => 'body',
            'to' => 'to@example.com'
        ]);

        
        Mail::assertSent(ContactUsEmail::class);
    }
}
