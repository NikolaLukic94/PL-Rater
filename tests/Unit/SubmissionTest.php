<?php

namespace Tests\Unit;

use Tests\TestCase;

class SubmissionTest extends TestCase
{
    /** @test **/
    public function user_can_see_submissions()
    {   //given we have submissions in db
        $submision = factory('App\Submission')->create();
        //when users visits submissions/index page
        $response = $this->get('/subs/emails/index');
        //He should be able to read the lob attribute
        $response->assertSee($submision->lob);
    }

    /** @test **/
    public function upon_creating_confirmation_email_containing_submission_number_will_be_sent()
    {
    }
}
