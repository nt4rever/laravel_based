<?php
namespace App\Repositories;

use App\Models\Todo;

class TodoRepository extends BaseRepository
{
    public function getModel()
    {
        return Todo::class;
    }

    /**
     * Get all todos is owner by user
     * @param int $id
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllByUser($id, $pageSize)
    {
        return $this->model->where('created_by', $id)->paginate($pageSize);
    }

    /**
     * @param int $pageSize
     */

    public function getAll($pageSize)
    {
        return $this->model->paginate($pageSize);
    }
}