<?php
/**
 * Samuelerwardi samuelerwardi@gmail.com
 */

namespace App\Repositories\Criteria;


use App\Repositories\Interfaces\RepositoryInterface as Repository;
use Pimcore\Model\DataObject\PaymentCategory;

class PaymentCategoryNonAktif extends Criteria
{
    /**
     * @param $model
     * @param Repository $repository
     * @return mixed
     */
    public function setCondition($model, Repository $repository)
    {
        // TODO: Implement setCondition() method.
        /** @var PaymentCategory\Listing $model */
        $model = $model->setCondition("oo_id = ?", 1530);
        return $model;
    }

    public function addCondition($model, Repository $repository)
    {
        // TODO: Implement addCondition() method.
        /** @var PaymentCategory\Listing $model */
        $model = $model->addConditionParam("oo_id = ?", 1530,"AND");
        return $model;
    }

    function apply($model, \App\Repositories\Repository $param)
    {
        // TODO: Implement apply() method.
    }
}
