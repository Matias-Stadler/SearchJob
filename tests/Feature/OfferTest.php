<?php

namespace Tests\Feature;

use App\Models\Offer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OfferTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    //public function test_example(): void
    //{
    //    $response = $this->get('/');
//
     //   $response->assertStatus(200);
    //}
    public function test_ListOfEntryCanBeRead(){
        $this->withoutExceptionHandling();

        Offer::all();

        $response = $this->get('/');
        $response->assertStatus(200)
                ->assertViewIs('home');
    }
}
