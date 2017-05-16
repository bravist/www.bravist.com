<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\BaseRepositoryContract;
use Rinvex\Repository\Repositories\EloquentRepository;

class BaseEloquentRepository extends EloquentRepository implements BaseRepositoryContract
{
    public function searchByKeyword($keyword = '')
    {
    }
}
