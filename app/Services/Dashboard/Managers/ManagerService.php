<?php

namespace App\Services\Dashboard\Managers;

use App\Repository\Interfaces\ManagerRepositoryInterface;

class ManagerService
{
    public function __construct(
        private ManagerRepositoryInterface $repository,
    ) {}
}
