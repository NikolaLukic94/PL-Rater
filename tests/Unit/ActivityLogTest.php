<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActivityLogTest extends TestCase
{
	/** @test **/
	public function will_be_created_if_trait_is_included()
	{

	}

	public function will_be_included_on_users_home_page_if_exists() 
	{
        $this->be($user = factory('App\User')->create();

        $activity = factory('App\Activity', ['user_id' => $user->id,  ])->create();

        $this->get('/home')->assertSee($activity->$subject);

	}
}
