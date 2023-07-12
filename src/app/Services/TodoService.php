<?php

namespace App\Services;

use App\Repositories\TodoRepository;

class TodoService
{
    private TodoRepository $repo;
    public function __construct(TodoRepository $repo)
    {
        $this->repo = $repo;
    }

    public function create($data)
    {
        return $this->repo->create($data);
    }

    public function getAll($filter)
    {
        $pageSize = $filter['pageSize'] ?? 10;
        return $this->repo->getAll($pageSize);
    }

    public function getAllById($filter)
    {
        $pageSize = $filter['pageSize'] ?? 10;
        $id = $filter['id'];
        return $this->repo->getAllByUser($id, $pageSize);
    }
}