<?php

namespace Tests\Feature;

use App\Models\Post;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PublicacionPreTest extends TestCase
{
    use RefreshDatabase;

    public function testPostView()
    {
        $postData = [
            'lugar' => 'Sample Title',
            'content' => 'Sample content.',
            'cupo' => 50,
            'fechaInicio' => '2023-12-06 08:00:00',
            'fechaFin' => '2023-12-07 17:00:00',
            'horaInicio' => '08:00:00',
            'horaFin' => '17:00:00',
        ];

        $queryString = http_build_query($postData);

        $response = $this->get(route('publicacion-main', $queryString));
        $response->assertStatus(200);
        $response->assertSee($queryString->cupo);
        $response->assertSee($queryString->lugar);
    }
}
