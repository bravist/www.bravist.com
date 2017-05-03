<?php 
namespace App\Repositories\Eloquents;

use App\Repositories\Eloquents\BaseEloquentRepository;
use App\Repositories\Contracts\ManagerRepositoryContract;

class ManagerEloquentRepository extends BaseEloquentRepository implements ManagerRepositoryContract
{
    protected $repositoryId = 'rinvex.repository.managerId';

    protected $model = 'App\Models\Manager';

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
                            $builder->orWhere('name', 'LIKE', '%' . $keyword . '%');
                        }
                    });
    }
}