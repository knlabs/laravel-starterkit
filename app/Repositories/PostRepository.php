<?php

namespace App\Repositories;

use App\Models\Post;
use App\Core\BaseRepository;

class PostRepository  extends BaseRepository {

    protected $entity;

    public function __construct(Post $post)
    {
        $this->entity = $post;
    }
}