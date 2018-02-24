<?php

namespace App\Src\SortFactory;
use App\Src\Service\ServiceInterface;

/**
 * Class FactoryMethod
 * @package App\Src\SortFactory
 */
abstract class FactoryMethod
{
    /**
     * @param string $type
     * @param ServiceInterface $object
     * @return mixed
     */
    abstract protected function createRequest(string $type, ServiceInterface $object);

    /**
     * @param string $type
     * @param ServiceInterface $object
     * @return ServiceInterface|mixed
     */
    public function create(string $type, ServiceInterface $object)
    {
        $objectSort = $this->createRequest($type, $object);
        return $objectSort;
    }

}