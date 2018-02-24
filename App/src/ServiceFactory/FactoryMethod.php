<?php

namespace App\Src\ServiceFactory;
/**
 * Class FactoryMethod
 * @package Src\ServiceFactory
 */
abstract class FactoryMethod
{
    /**
     * @param string $type
     * @param array $data
     * @param array $filter
     * @return mixed
     */
    abstract protected function createRequest(string $type, array $data, array $filter);

    /**
     * @param string $type
     * @param array $data
     * @param array $filter
     * @return mixed
     */
    public function create(string $type, array $data, array $filter)
    {
        $object = $this->createRequest($type, $data, $filter);
        return $object;
    }

}