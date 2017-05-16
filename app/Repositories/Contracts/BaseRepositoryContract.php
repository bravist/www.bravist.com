<?php

namespace App\Repositories\Contracts;

use Rinvex\Repository\Contracts\CacheableContract;
use Rinvex\Repository\Contracts\RepositoryContract;

interface BaseRepositoryContract extends RepositoryContract, CacheableContract
{
    public function searchByKeyword($keyword = '');
}
