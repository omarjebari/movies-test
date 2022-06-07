<?php

namespace Tests\Feature;

use App\Models\Movie;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ListMoviesTest extends TestCase
{
    use RefreshDatabase;

    public function test_initially_no_movies()
    {
        $this->getJson(route('movies.index'))->assertStatus(200);
        $this->assertDatabaseCount('movies', 0);

    }

    public function test_movies_listed()
    {
        Movie::factory()->count(3)->create();
        $this->getJson(route('movies.index'))->assertStatus(200);
        $this->assertDatabaseCount('movies', 3);
    }
}
