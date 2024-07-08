<?php

namespace Konnec\Examples\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Konnec\Examples\Models\Post;

class FileManagerController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $result = Post::apiQuery($request);

        return response()->index($result);
    }

    public function store(Request $request): JsonResponse
    {
        $post = Post::create($request->all());

        return response()->store($post);
    }

    public function show(Post $post): JsonResponse
    {
        return response()->show([
            'data' => $post,
            'meta' => 'meta',
            'links' => 'links',
        ]);
    }

    public function update(Request $request, Post $post): JsonResponse
    {
        $post->fill($request->all())->save();

        return response()->update($post);
    }

    public function destroy(Post $post): JsonResponse
    {
        $post->delete();

        return response()->destroy($post);
    }
}
