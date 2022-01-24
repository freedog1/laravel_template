<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class TempControllerTest extends TestCase
{
    use WithoutMiddleware;
    use RefreshDatabase; 

    /**
     * @test
     */
    public function testt()
    {
        $response = $this->get('/temp');

        $response->assertStatus(200);
    }


    /**
     * @test
     */
    public function 入力してpostした後、入力したワードが反映されていることをテスト()
    {
        
        $testWord = mt_rand(0, 100);


        $response = $this->post('/temp/store',['free_word' => $testWord]);
        $response->assertStatus(302);
        $response->assertRedirect('/temp');

        $response = $this->get('/temp');
        $response->assertSeeText($testWord);

        $response->assertSeeText($testWord);
    }


}
