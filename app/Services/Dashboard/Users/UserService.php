<?php

namespace App\Services\Dashboard\Users;

use App\Repository\Interfaces\UserRepositoryInterface;

class UserService
{
    public function __construct(
        private UserRepositoryInterface $repository,
    ) {}
}
