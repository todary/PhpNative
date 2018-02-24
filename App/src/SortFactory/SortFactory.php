<?php

namespace App\Src\SortFactory;

use App\Src\Sort\NameSort;
use App\Src\Sort\PriceSort;
use App\Src\Service\ServiceInterface;

/**
 * Class SortFactory
 * @package App\Src\SortFactory
 */
class SortFactory extends FactoryMethod
{
    /**
     * @param string $type
     * @param ServiceInterface $object
     * @return ServiceInterface|NameSort|PriceSort|DateService|PriceService
     */
    protected function createRequest(string $type, ServiceInterface $object)
    {

        switch ($type) {
            case 'name':
                $object = new NameSort($object);
                return $object;
            case 'price':
                $object = new PriceSort($object);
                return $object;
            default:
                throw new \InvalidArgumentException("$type is not a valid Transport");
        }
    }
}