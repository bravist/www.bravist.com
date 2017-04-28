<?php 
namespace App\Repositories\Eloquents;

use App\Repositories\Eloquents\BaseEloquentRepository;
use App\Repositories\Contracts\RoleRepositoryContract;

class RoleEloquentRepository extends BaseEloquentRepository implements RoleRepositoryContract
{
    protected $repositoryId = 'rinvex.repository.roleId';

    protected $model = 'App\Models\Role';

    /**
     * Keyword search
     * @param string $keyword 
     * @return Repository          
     */
    public function searchByKeyword($keyword = '')
    {
        return $this->createModel()
                    ->orWhere(function ($builder) use ($keyword) {
                        if ($keyword) {
                            $builder->orWhere('name', 'LIKE', '%' . $keyword . '%')
                                    ->orWhere('display_name', 'LIKE', '%' . $keyword . '%')
                                    ->orWhere('description', 'LIKE', '%' . $keyword . '%');
                        }
                    });
    }
}