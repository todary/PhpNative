<?php

namespace App\Src\Service;

use App\Src\Service\SearchServiceInterface;

/**
 * Class DestinationService
 */
class SearchDestinationService implements SearchServiceInterface
{


    /**
     * @var array
     */
    protected $hotels;

    /**
     * @var
     */
    protected $destination;

    /**
     * @var
     */
    protected $afterSearch;

    /**
     * @var
     */
    protected $afterSort;


    /**
     * DestinationService constructor.
     * @param array $hotels
     * @param string $filterDestination
     */
    public function __construct(array $hotels,string $filterDestination)
    {
        $this->hotels = $hotels;
        $this->destination = $filterDestination;
    }

    /**
     * @return array
     */
    public function search() :array
    {
        $allHotels = [];
        foreach ($this->hotels as $hotel) {
            if (trim($hotel['city']) == $this->destination) {
                $allHotels[] = $hotel;
            }
        }
        $this->afterSearch = $allHotels;
        return $allHotels;
    }


    /**
     * @return mixed
     */
    public function getAfterSearch()
    {
        return $this->afterSearch;
    }

    /**
     * @return mixed
     */
    public function getAfterSort()
    {
        return $this->afterSort;
    }

    /**
     * @param mixed $afterSearch
     */
    public function setAfterSearch($afterSearch)
    {
        $this->afterSearch = $afterSearch;
    }

    /**
     * @param mixed $afterSort
     */
    public function setAfterSort($afterSort)
    {
        $this->afterSort = $afterSort;
    }

}