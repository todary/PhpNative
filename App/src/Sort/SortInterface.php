<?php

namespace App\Src\Sort;

use App\Src\Service\SearchServiceInterface;

/**
 * Interface SortInterface
 * @package App\Src\Sort
 */
interface SortInterface
{
    /**
     * SortInterface constructor.
     * @param SearchServiceInterface $searchObject
     */
    public function __construct(SearchServiceInterface $searchObject);

    /**
     * @return array
     */
    public function sort(string $field);
}