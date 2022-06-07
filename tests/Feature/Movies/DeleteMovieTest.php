<?php

namespace Tests\Feature;

use App\Models\Movie;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteMovieTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_movie()
    {
        $movie = Movie::factory()->create();
        $this->deleteJson(route('movies.destroy', ['movie'=>$movie->id]))->assertStatus(200);
        $this->assertDatabaseCount('movies', 0);
    }

    public function test_error_if_movie_not_exist()
    {
        $this->deleteJson(route('movies.destroy', ['movie'=>1]))->assertStatus(404);
        $this->assertDatabaseCount('movies', 0);
    }
}
