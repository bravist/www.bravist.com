<?php 
namespace App\Repositories\Eloquents;

use App\Repositories\Eloquents\BaseEloquentRepository;
use App\Repositories\Contracts\PermissionRepositoryContract;

class PermissionEloquentRepository extends BaseEloquentRepository implements PermissionRepositoryContract
{
    protected $repositoryId = 'rinvex.repository.permissionId';

    protected $model = 'App\Models\Permission';

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