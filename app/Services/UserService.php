<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    private $userRepo;

    /**
     * @param UserRepository $userRepo
     */
    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function delete($user, $deleteBy)
    {
        return $this->userRepo->delete($user, $deleteBy);
    }

    /**
     * @return \App\Models\User|null
     */
    public function findById($id)
    {
        return $this->userRepo->findById($id);
    }
}