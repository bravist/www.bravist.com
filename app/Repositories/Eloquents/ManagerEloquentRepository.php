<?php 
namespace App\Repositories\Eloquents;

use App\Repositories\Eloquents\BaseEloquentRepository;
use App\Repositories\Contracts\ManagerRepositoryContract;

class ManagerEloquentRepository extends BaseEloquentRepository implements ManagerRepositoryContract
{
    protected $repositoryId = 'rinvex.repository.managerId';

    protected $model = 'App\Models\Manager';
}