<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateMovieTest extends TestCase
{
    use RefreshDatabase;

    public function test_movie_is_stored()
    {
        $title = 'my first movie';
        $this->postJson(route('movies.store'), [
            'title' => $title
        ])->assertStatus(201);
        $this->assertDatabaseHas('movies', [
            'title' => $title,
        ]);
    }

    public function test_error_if_no_title_passed()
    {
        $title = '';
        $this->postJson(route('movies.store'), [
            'title' => $title
        ])->assertStatus(422);
        $this->assertDatabaseCount('movies', 0);

    }
}
