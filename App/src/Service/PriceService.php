<?php

namespace App\Src\Service;

use App\Src\Service\ServiceInterface;

/**
 * Class PriceService
 */
class PriceService implements ServiceInterface
{


    /**
     * @var array
     */
    protected $hotels;

    /**
     * @var
     */
    protected $min;

    /**
     * @var
     */
    protected $max;

    /**
     * @var
     */
    protected $afterSearch;

    /**
     * @var
     */
    protected $afterSort;

    /**
     * PriceService constructor.
     * @param array $hotels
     * @param float $filterPrice
     */
    public function __construct(array $hotels,float $filterMin,float $filterMax)
    {
        $this->hotels = $hotels;
        $this->min = $filterMin;
        $this->max = $filterMax;
    }

    /**
     * @return array
     */
    public function search() :array
    {
        $allHotels = [];
        foreach ($this->hotels as $hotel) {
            if (($hotel['price'] >= $this->min) && ($hotel['price'] <= $this->max)) {
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