<?php

namespace App\Src\Sort;

use App\Src\Service\ServiceInterface;

/**
 * Interface SortInterface
 * @package App\Src\Sort
 */
interface SortInterface
{
    /**
     * SortInterface constructor.
     * @param ServiceInterface $searchObject
     */
    public function __construct(ServiceInterface $searchObject);

    /**
     * @return array
     */
    public function sort();
}