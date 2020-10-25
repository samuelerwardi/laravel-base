<?php
/**
 * Class ${NAME}
 * @author Luqman Hakim <luqman.4lhakim@gmail.com>
 */
namespace App\Repositories\Interfaces;
use Pimcore\Model\DataObject\Concrete;

interface RepositoryInterface
{

    public function all($columns = array('*'));

    public function paginate($perPage = 15, $columns = array('*'));

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id, $columns = array('*'));

    public function findBy($field, $value, $columns = array('*'));
}
