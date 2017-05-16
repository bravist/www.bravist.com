<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RoleRepositoryContract;
use App\Repositories\Contracts\PermissionRepositoryContract;
use App\Http\Requests\Admin\Role\StoreRequest;
use App\Http\Requests\Admin\Role\UpdateRequest;

class RoleController extends Controller
{
    protected $repository;

    /**
     * Contruct
     *
     * @param RoleRepositoryContract $repository
     */
    public function __construct(RoleRepositoryContract $repository)
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
        $roles = $this->repository
                    ->searchByKeyword($request->get('search', null))
                    ->orderBy('id', 'DESC')
                    ->paginate(15)
                    ->appends($request->all());
        return view('admin.role.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PermissionRepositoryContract $permissionRepo)
    {
        $permissions = $permissionRepo->findAll();
        $role = collect();
        return view('admin.role.create', compact('permissions', 'role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(
        StoreRequest $request
        ) {
        $role = $this->repository->create(
            [
                'name' => $request->name,
                'display_name' => $request->display_name,
                'description' => $request->description,
            ]
        );

        $this->repository->syncPermissions($role, $request->permission);

        flash('添加新角色成功！')->success();
        
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
    public function edit($id, PermissionRepositoryContract $permissionRepo)
    {
        $role = $this->repository->find($id);
        $permissions = $permissionRepo->findAll();
        return view('admin.role.edit', compact('role', 'permissions'));
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
        $role = $this->repository->find($id);

        if (!$role) {
            abort(404);
        }

        $role = $this->repository->update(
            $role,
            [
                'name' => $request->name,
                'display_name' => $request->display_name,
                'description' => $request->description,
            ]
        );

        $this->repository->syncPermissions($role, $request->permission);

        flash('修改角色名称成功！')->success();

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
        $role = $this->repository->find($id);

        if (!$role) {
            abort(404);
        }

        $this->repository->delete($role);

        flash('删除角色成功')->success();

        return redirect()->route('roles.index');
    }
}
