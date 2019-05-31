<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RateTest extends TestCase
{
    /** @test **/
    public function user_needs_to_be_authorized_in_order_to_delete_rate()
    {
        $this->be($user = factory('App\User')->create();

       	$rate = factory('App\Rate')->create();

        $this->post("rate/delete" . $rate->id);

        $this->assertResponseStatus(403);

        $rate = factory('App\Rate', ['user_id' => $user->id ])->create();
        
        $this->post("rate/delete" . $rate->id);  

        $this->notSeeInDatabase('rates', [ 'id' => $rate->id ]);
    }
}
