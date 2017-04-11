<?php 

namespace App\Repositories\Eloquents;

class ManagerRepository extends BaseRepositoryEloquent
{
	protected $repositoryId = 'rinvex.repository.managerId';

    protected $model = 'App\Models\Manager';
}