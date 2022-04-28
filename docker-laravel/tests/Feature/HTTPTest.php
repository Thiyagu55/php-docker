<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Log;


class HTTPTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/api/user/store');
        //echo Log::query("SELECT * FROM  mysql.general_log  WHERE command_type ='Query' order by event_time desc limit 2;");
        echo Log::where('command_type', 'Query')
            ->orderByDesc('event_time')
            ->take(3)
            ->get();
        $response->assertStatus(200);
    }
}
