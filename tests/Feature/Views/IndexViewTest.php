<?php

namespace Tests\Feature\Views;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexViewTest extends TestCase
{
    public function testHomeView()
    {
        $this->get('/')
            ->assertSeeText('Halaman Home');

        $this->get('/post')
            ->assertSeeText('Halaman Post');

        $this->get('/about')
            ->assertSeeText('Halaman About');
    }

}
