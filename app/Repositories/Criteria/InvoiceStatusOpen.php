<?php
/**
 * Samuelerwardi samuelerwardi@gmail.com
 */

namespace App\Repositories\Criteria;


use App\Repositories\Interfaces\RepositoryInterface as Repository;
use Pimcore\Model\DataObject\Invoice;

class InvoiceStatusOpen extends Criteria
{

    /**
     * @param $model
     * @param Repository $repository
     * @return mixed
     */
    public function setCondition($model, Repository $repository)
    {
        // TODO: Implement setCondition() method.
        /** @var Invoice\Listing $model */
        $model = $model->setCondition("status = ?", "OPEN");
        return $model;
    }

    public function addCondition($model, Repository $repository)
    {
        // TODO: Implement addCondition() method.
        /** @var Invoice\Listing $model */
        $model = $model->addConditionParam("status = ?", "OPEN", "AND");
        return $model;
    }

    function apply($model, \App\Repositories\Repository $param)
    {
        // TODO: Implement apply() method.
    }
}
