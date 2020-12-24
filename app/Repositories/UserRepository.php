<?php

namespace App\Repositories;

use App\Models\User;
use App\Core\BaseRepository;

class UserRepository  extends BaseRepository  {

    protected $entity;

    public function __construct(User $user)
    {
        $this->entity = $user;
    }
}