<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\RoleRepositoryContract;
use App\Http\Requests\Admin\Role\{
    StoreRequest,
    UpdateRequest
};

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
    public function create()
    {
        return view('admin.role.create');
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
        $role = $this->repository->find($id);

        return view('admin.role.edit', compact('role'));
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

        $this->repository->update(
            $role,
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
        $role = $this->repository->find($id);

        if (!$role) {
            abort(404);
        }

        $this->repository->delete($role);

        flash('删除权限成功')->success();

        return redirect()->route('roles.index');
    }
}
