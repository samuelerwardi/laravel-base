<?php
/**
 * Samuelerwardi samuelerwardi@gmail.com
 */

namespace App\Repositories\Criteria;


use App\Repositories\Interfaces\RepositoryInterface as Repository;
use Pimcore\Model\DataObject\PaymentCategory;

class PaymentCategoryOrderNotNull extends Criteria
{
    /**
     * @param $model
     * @param Repository $repository
     * @return mixed
     */
    public function setCondition($model, Repository $repository)
    {
        // TODO: Implement apply() method.
        /** @var PaymentCategory\Listing $model */
        $model = $model->setCondition("order = ?", 2);
        return $model;
    }

    public function addCondition($model, Repository $repository)
    {
        // TODO: Implement addCondition() method.
        /** @var PaymentCategory\Listing $model */
        $model = $model->addConditionParam("o_parentId = ?", 1527,"AND");
        return $model;
    }

    function apply($model, \App\Repositories\Repository $param)
    {
        // TODO: Implement apply() method.
    }
}
