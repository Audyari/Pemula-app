<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Config;

class DebugTest extends TestCase
{
    public function test_mode_debug_default_adalah_false()
    {
        $debugStatus = config('app.debug'); // ini adalah method untuk mengambil nilai konfigurasi app.debug

        $this->assertTrue($debugStatus); // ini adalah method untuk menguji nilai debugStatus
    }

    public function test_mengubah_mode_debug_ke_true() // ini adalah method untuk mengubah nilai konfigurasi app.debug
    {
        Config::set('app.debug', true); // ini adalah method untuk mengubah nilai konfigurasi app.debug

        $this->assertTrue(env('APP_DEBUG'));

        $response = $this->get('/route-yang-error');

        $response->assertStatus(404);
    }

    public function test_enviroment_debug()
    {
        $appName = env('YOUTUBE_API_KEY');

        self::assertEquals("AudyariW", $appName);
    }

    public function test_Default_Value() // ini adalah method untuk menguji nilai konfigurasi app.debug
    {
        $appEnv = env('APP_ENV', 'development');

        self::assertEquals("testing", $appEnv);
    }
}
