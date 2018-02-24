<?php


namespace App\Src\Service;

use App\Src\Service\SearchServiceInterface;

/**
 * Class NameService
 */
class SearchNameService implements SearchServiceInterface
{

    /**
     * @var array
     */
    protected $hotels;

    /**
     * @var
     */
    protected $name;

    /**
     * @var
     */
    protected $afterSearch;

    /**
     * @var
     */
    protected $afterSort;


    /**
     * NameService constructor.
     * @param array $hotels
     * @param $filterName
     */
    public function __construct(array $hotels,string $filterName)
    {
        $this->hotels = $hotels;
        $this->name = $filterName;
    }

    /**
     * @return array
     */
    public function search():array
    {
        $allHotels = [];
        foreach ($this->hotels as $hotel) {
            if ($hotel['name'] == $this->name) {
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