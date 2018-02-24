<?php

namespace App\Src\Sort;

use App\Src\Service\ServiceInterface;

class PriceSort implements SortInterface
{

    protected $objectSearch;

    public function __construct(ServiceInterface $searchObject)
    {
        $this->objectSearch = $searchObject;
    }

    public function sort(): array
    {
        $arraySearch = $this->objectSearch->getAfterSearch();
        foreach ($arraySearch as $key => $hotel) {
            $vc_array_name[$key] = $hotel['price'];
        }
        array_multisort($vc_array_name, SORT_ASC, $arraySearch);
        $this->objectSearch->setAfterSort($arraySearch);
        return $arraySearch;
    }
}