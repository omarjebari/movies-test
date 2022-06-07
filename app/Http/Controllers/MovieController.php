<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Http\Requests\MovieStoreRequest;
use App\Http\Resources\MovieResource;
use App\Models\Movie;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MovieController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return MovieResource::collection(Movie::all());
    }

    public function store(MovieStoreRequest $request): MovieResource
    {
        return new MovieResource(Movie::create($request->validated()));
    }

    public function destroy(Movie $movie): JsonResponse
    {
        $movie->delete();
        return response()->json(null, 200);
    }
}
