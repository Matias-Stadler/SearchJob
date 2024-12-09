<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Offer;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OfferTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    use RefreshDatabase;

    public function test_CheckIfReceiveAllEntryOfOfferInJsonFile(){
        $offer = Offer::factory(2)->create();

        $response = $this->get(route('apihome'));

        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }


    public function test_CheckIfCanDeleteEntryInOfferWithApi(){
        $offer = Offer::factory(2)->create();

        $response = $this->delete(route('apidestroy',1));
        $this->assertDatabaseCount('offers',1);

        $response = $this->get(route('apihome'));

        $response->assertJsonCount(1);
    }


    public function test_CheckIfCanCreateNewEntryInOfferWithJsonFile(){

        $response = $this->post(route('apistore'),[
            'status' => '1',
            'company' => 'arrabal',
            'jobPosition' => 'coder',
            'web' => 'entregar CV',
        ]);

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                 ->assertJsonCount(1);

    }


    public function test_CheckIfCanUpdateEntryInOfferEhitJsonFile(){

        $response = $this->post(route('apistore'),[
            'status' => 1,
            'company' => 'arrabal',
            'jobPosition' => 'coder',
            'web' => 'entregar CV',
        ]);

        $data = ['company' => 'arrabal'];
        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                 ->assertJsonCount(1)
                 ->assertJsonFragment($data);

        $response = $this->put('/api/offers/1', [
            'status' => 1,
            'company' => 'Factoria F5',
            'jobPosition' => 'coder',
            'web' => 'entregar CV',
        ]);

        $data = ['company' => 'Factoria F5'];
        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                 ->assertJsonCount(1)
                 ->assertJsonFragment($data);
}
}
