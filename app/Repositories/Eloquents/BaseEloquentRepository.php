<?php 

namespace App\Repositories\Eloquents;

use Rinvex\Repository\Repositories\EloquentRepository;
use App\Repositories\Contracts\BaseRepositoryContract;

class BaseEloquentRepository extends EloquentRepository implements BaseRepositoryContract
{
    public function searchByKeyword($keyword = '')
    {
    }
}
