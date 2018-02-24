<?php


namespace App\Src\ServiceFactory;

use App\Src\Service\SearchNameService;
use App\Src\Service\SearchDestinationService;
use App\Src\Service\SearchPriceService;
use App\Src\Service\SearchDateService;


/**
 * Class ServiceFactory
 * @package Src\ServiceFactory
 */
class ServiceFactory extends FactoryMethod
{
    /**
     * @param string $type
     * @param array $data
     * @param array $filter
     * @return DisCount
     */
    protected function createRequest(string $type, array $data, array $filter)
    {

        switch ($type) {
            case 'name':
                $object = new SearchNameService($data, $filter['name']);
                return $object;
            case 'destination':
                $object = new SearchDestinationService($data, $filter['city']);
                return $object;
            case 'price':
                $object = new SearchPriceService($data, $filter['min'], $filter['max']);
                return $object;
            case 'date':
                $object = new SearchDateService($data, $filter['from'], $filter['to']);
                return $object;
            default:
                throw new \InvalidArgumentException("$type is not a valid Transport");
        }
    }
}