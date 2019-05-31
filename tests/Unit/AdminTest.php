<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdminTest extends TestCase
{
    public function setUp() {

        parent::setUp(); // performs set up
        
       //Session::start(); // starts session, this is what handles csrf token part
         
        $this->be($admin = factory('App\User', ['admin' => '1' ])->create();

    }

    /** @test **/
    public function can_approve_user()
    {
        $user = create('App\User', ['approved' => null ]);

        $this->post("/users/". $user->id . "/approve");

        $this->assertEquals($user->approved, '1');    
    }

    /** @test **/
    public function can_disable_user()
    {
        $user = create('App\User', ['approved' => '1' ]);

        $this->post("/users/". $user->id . "/disapprove");

        $this->assertEquals($user->approved, '1');   
    }    

    /** @test **/
    public function can_edit_user()
    {
        $user = create('App\User', ['name' => 'Tom']);
        $user2 = $user;

        $this->post("/manage/users/". $user->id . "/edit", ['name' => 'John']);

        $this->assertEquals($user2->name, $user->name);              
    }     

    /** @test **/
    public function can_delete_user()
    {
        $user = create('App\User', ['approved' => '1' ]);

        $this->post("/manage/users/". $user->id . "/delete");

        $this->assertEquals(302, $response->getStatusCode());

        $this->notSeeInDatabase('users', [ 'id' => $user->id ]);

    }     

    /** @test **/
    public function user_must_be_approved_in_order_to_use_app()
    {
        $user = create('App\User', ['approved' => null ]);

        $this->get('/home')->assertRedirect('/approval');
    }       
}
