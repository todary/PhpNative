<?php

namespace App\Src\Sort;

use App\Src\Service\SearchServiceInterface;

class ArraySort implements SortInterface
{

    protected $objectSearch;

    public function __construct(SearchServiceInterface $searchObject)
    {
        $this->objectSearch = $searchObject;
    }

    public function sort(string $field): array
    {
        $arraySearch = $this->objectSearch->getAfterSearch();
        foreach ($arraySearch as $key => $hotel) {
            $vc_array_name[$key] = $hotel[$field];
        }
        array_multisort($vc_array_name, SORT_ASC, $arraySearch);
        $this->objectSearch->setAfterSort($arraySearch);
        return $arraySearch;
    }
}