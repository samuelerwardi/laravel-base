<?php


namespace App\Repositories;


use App\Task;

class TaskRepository extends Repository
{

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        // TODO: Implement model() method.
        return 'App\Task';
    }
}
