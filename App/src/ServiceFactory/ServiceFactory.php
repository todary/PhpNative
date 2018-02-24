<?php


namespace App\Src\ServiceFactory;

use App\Src\Service\NameService;
use App\Src\Service\DestinationService;
use App\Src\Service\PriceService;
use App\Src\Service\DateService;


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
                $object = new NameService($data, $filter['name']);
                return $object;
            case 'destination':
                $object = new DestinationService($data, $filter['city']);
                return $object;
            case 'price':
                $object = new PriceService($data, $filter['min'], $filter['max']);
                return $object;
            case 'date':
                $object = new DateService($data, $filter['from'], $filter['to']);
                return $object;
            default:
                throw new \InvalidArgumentException("$type is not a valid Transport");
        }
    }
}