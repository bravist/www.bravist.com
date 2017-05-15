<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\PermissionRepositoryContract;
use App\Http\Requests\Admin\Permission\StoreRequest;
use App\Http\Requests\Admin\Permission\UpdateRequest;

class PermissionController extends Controller
{
    protected $repository;

    /**
     * Contruct
     *
     * @param RoleRepositoryContract $repository
     */
    public function __construct(PermissionRepositoryContract $repository)
    {
        $this->repository = $repository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $permissions = $this->repository
                    ->searchByKeyword($request->get('search', null))
                    ->orderBy('id', 'DESC')
                    ->paginate(15)
                    ->appends($request->all());
        return view('admin.permission.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $this->repository->create(
            [
                'name' => $request->name,
                'display_name' => $request->display_name,
                'description' => $request->description,
            ]
        );

        flash('添加新权限成功！')->success();

        return back();
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = $this->repository->find($id);

        return view('admin.permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $permission = $this->repository->find($id);

        if (!$permission) {
            abort(404);
        }

        $this->repository->update(
            $permission,
            [
                'name' => $request->name,
                'display_name' => $request->display_name,
                'description' => $request->description,
            ]
        );

        flash('修改权限名称成功！')->success();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = $this->repository->find($id);

        if (!$permission) {
            abort(404);
        }

        $this->repository->delete($permission);

        flash('删除权限成功')->success();

        return redirect()->route('roles.index');
    }
}
