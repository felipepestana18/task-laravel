<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Http\Controllers\taskController;

class TaskControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_index_router_get(){

        $response = $this->get(route('task.index'));

        $response->assertStatus(200);

    }
    public function test_sum_two_value(){
        $value1 = 10;
        $value2 = 20;

        $result = (new taskController())->somar($value1, $value2);

        //dd($result);

        $this->assertEquals($result, 30);
    }
   
    public function test_count_tasks(){

        $this->assertDatabaseCount('tasks', 2);
    }
}
