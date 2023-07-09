<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Http\Requests\CreateTodoRequest;
use App\Services\TodoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends ApiController
{
    private TodoService $todoService;

    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }


    /**
     * Display a listing of the resource.
     *
     */
    public function index(Request $request)
    {
        try {
            $filters = $request->all();
            $filters['id'] = \Auth::user()->id;
            $todos = $this->todoService->getAllById($filters);
            return $this->success($todos);
        } catch (\Throwable $th) {
            return $this->error($th, "Error when handle your todo", 500);
        }
    }


    /**
     * Display a listing of the resource.
     *
     */
    public function adminGetAll(Request $request)
    {
        try {
            $todos = $this->todoService->getAll($request->all());
            return $this->success($todos);
        } catch (\Throwable $th) {
            return $this->error($th, "Error when handle your todo", 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateTodoRequest $request
     */
    public function store(CreateTodoRequest $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $data['created_by'] = \Auth::user()->id;
            $this->todoService->create($data);
            DB::commit();
            return $this->success("Todo create successfully");
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->error($th, "Error when handle your todo", 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}