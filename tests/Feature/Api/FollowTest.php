<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Offer;
use App\Models\Follow;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FollowTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_CheckIfCanCreateNewEntryInFollowWithJsonFile(){

        Offer::create([
            'status' => 1,
            'company' => 'Factoria F5',
            'jobPosition' => 'coder',
            'web' => 'entregar CV',
        ]);

        $response = $this->post(route('apistoreFollow',1),[
            'offer_id' => 1,
            'news' => 'me muero'
        ]);

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                 ->assertJsonCount(1);

    }

    public function test_GetElements()
    {
        Offer::create([
            'status' => 1,
            'company' => 'Factoria F5',
            'jobPosition' => 'coder',
            'web' => 'entregar CV',
        ]);
        Follow::create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);

        $response = $this->get('/api/offers/1/follows');

        $response->assertStatus(200)->assertJsonFragment([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);
    }



    public function test_GetElementsById()
    {
        Offer::create([
            'status' => 1,
            'company' => 'Factoria F5',
            'jobPosition' => 'coder',
            'web' => 'entregar CV',
        ]);
        Follow::create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);

        $response = $this->get('/api/offers/1/follows/1');

        $response->assertStatus(200)->assertJsonFragment(['offer_id' => 1]);
    }


    public function test_DeleteElement()
    {
        Offer::create([
            'status' => 1,
            'company' => 'Factoria F5',
            'jobPosition' => 'coder',
            'web' => 'entregar CV',
        ]);
        Follow::create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);
        
        $response = $this->delete('/api/offers/1/follows/1');
        $this->assertDatabaseCount('follows', 0);
    }


    public function test_UpdateElements()
    {
        Offer::factory(10)->create();
        Follow::factory(1)->create([
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);
        
        $response = $this->put('/api/offers/1/follows/1',
        [
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
            'offer_id' => 1,
        ]);

        $response = $this->get('/api/offers/1/follows/1');

        $response->assertStatus(200)->assertJsonFragment([

            'offer_id' => 1,
            'news' => 'sadasfasffsaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
        ]);
    }
}