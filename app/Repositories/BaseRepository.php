<?php

namespace App\Repositories;

abstract class BaseRepository
{

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * EloquentRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get model
     * @return string
     */
    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        return $this->model = app()->make($this->getModel());
    }

    /**
     * create
     */
    public function create($data)
    {
        return $this->model->create($data);
    }

    /**
     * update
     */
    public function update($data, $info)
    {
        return $data->update($info);
    }

    /**
     * delete
     */
    public function delete($data, $deleteBy)
    {
        $data->deleted_at = now();
        $data->deleted_by = $deleteBy;
        $data->updated_by = $deleteBy;
        $data->save();
        return true;
    }

    /**
     * Find by id
     * @param $id
     */
    public function findById($id)
    {
        return $this->model->where('id', $id)
            ->first();
    }

    /**
     * Find by ids
     * @param $id
     */
    public function findByIds($ids)
    {
        return $this->model->whereIn('id', $ids)->get();
    }
}