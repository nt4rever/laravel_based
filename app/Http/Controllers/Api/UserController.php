<?php

namespace App\Http\Controllers\Api;

use DB;
use App\Models\User;
use App\Enums\ResponseCode;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\ApiController;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;

class UserController extends ApiController
{
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pageSize = $request->pageSize ?? 10;
        // $users = User::paginate($pageSize);
        $users = User::withTrashed()->paginate($pageSize);
        return $this->success($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        try {
            DB::beginTransaction();
            $user = $this->userService->findById($id);
            if (!$user)
                throw new \Exception(__("users.not_found"), ResponseCode::NOT_FOUND);
            $this->userService->delete($user, Auth::user()->id);
            DB::commit();
            return $this->success(null, ResponseCode::SUCCESS_DATA);
        } catch (\Exception $error) {
            DB::rollBack();
            return $this->error($error, $error->getMessage(), $error->getCode());
        }
    }
}