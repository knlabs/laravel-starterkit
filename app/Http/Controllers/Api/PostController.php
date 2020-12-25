<?php

namespace App\Http\Controllers\Api;

use App\Core\BaseController;
use App\Http\Requests\Post\CreatePostRequest;
use App\Repositories\PostRepository;

class PostController extends BaseController
{
    private $repo;

    public function __construct(PostRepository $repo)
    {
        $this->repo = $repo;
    }

    public function index()
    {
        $posts = $this->repo->paginate();
        return $this->successResponse($posts, 'Posts retrievie');
    }

    public function store(CreatePostRequest $request)
    {
        return $this->successResponse(['tes' => 'data'], 'posts created');
    }

}
