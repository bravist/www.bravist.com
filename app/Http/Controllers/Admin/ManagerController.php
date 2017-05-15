<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\ManagerRepositoryContract;
use App\Repositories\Contracts\RoleRepositoryContract;
use App\Http\Requests\Admin\Manager\UpdateRequest;

class ManagerController extends Controller
{
    protected $repository;

    public function __construct(ManagerRepositoryContract $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
        Request $request,
        RoleRepositoryContract $roleRepo
        ) {
        $managers = $this->repository
                    ->searchByKeyword($request->get('search', null))
                    ->orderBy('id', 'DESC')
                    ->paginate(15)
                    ->appends($request->all());
        $roles = $roleRepo->findAll();
        return view('admin.manager.index', compact('managers', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(UpdateRequest $request, $id)
    {
        $manager = $this->repository->find($id);

        if (!$manager) {
            abort(404);
        }
        $this->repository->syncRole($manager, $request->roles);

        flash('设置用户角色成功！')->success();
        
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
        //
    }
}
