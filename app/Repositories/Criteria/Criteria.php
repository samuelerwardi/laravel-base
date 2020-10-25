<?php
/**
 * Samuelerwardi samuelerwardi@gmail.com
 */

namespace App\Repositories\Criteria;

use App\Repositories\Interfaces\RepositoryInterface as Repository;


abstract class Criteria {

    /**
     * @param $model
     * @param Repository $repository
     * @return mixed
     */
    abstract public function setCondition($model, Repository $repository);

    abstract public function addCondition($model, Repository $repository);

    abstract function apply($model, \App\Repositories\Repository $param);
}
