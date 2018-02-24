<?php

namespace App\Src\Sort;

use App\Src\Service\ServiceInterface;

class NameSort implements SortInterface
{

    /**
     * @var ServiceInterface
     */
    protected $objectSearch;

    /**
     * NameSort constructor.
     * @param ServiceInterface $searchObject
     */
    public function __construct(ServiceInterface $searchObject)
    {
        $this->objectSearch = $searchObject;
    }

    /**
     * @return array
     */
    public function sort(): array
    {
        $arraySearch = $this->objectSearch->getAfterSearch();
        foreach ($arraySearch as $key => $hotel) {
            $vc_array_name[$key] = $hotel['name'];
        }
        array_multisort($vc_array_name, SORT_ASC, $arraySearch);
        $this->objectSearch->setAfterSort($arraySearch);
        return $arraySearch;
    }
}