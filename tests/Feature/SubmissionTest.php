<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class SubmissionTest extends TestCase
{

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_a_user_can_see_submissions()
    {   //given we have submissions in db
        $submision = factory('App\Submission')->create();
        //when users visits submissions/index page
        $response = $this->get('/subs/emails/index');
        //He should be able to read the lob 
        $response->assertSee($submision->lob);        
    }
}
