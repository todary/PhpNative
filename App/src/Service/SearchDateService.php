<?php

namespace App\Src\Service;

use App\Src\Service\SearchServiceInterface;

/**
 * Class DateService
 */
class SearchDateService implements SearchServiceInterface
{

    /**
     * @var array
     */
    protected $hotels;

    /**
     * @var
     */
    protected $from;

    /**
     * @var
     */
    protected $to;

    /**
     * @var
     */
    protected $afterSearch;

    /**
     * @var
     */
    protected $afterSort;

    /**
     * DateService constructor.
     * @param array $hotels
     * @param string $from
     * @param string $to
     */
    public function __construct(array $hotels, string $from, string $to)
    {
        $this->hotels = $hotels;
        $this->from = strtotime($from);
        $this->to = strtotime($to);
    }

    /**
     * @return array
     */
    public function search(): array
    {
        $allHotels = [];
        foreach ($this->hotels as $hotel) {
            if (isset($hotel['availability'])) {
                foreach ($hotel['availability'] as $availability) {
                    if (!empty($availability['from']) && $availability['from'] && !empty($availability['to']) && $availability['to']) {

                        if (
                            ($this->from >= strtotime($availability['from'])) &&
                            ($this->from <= strtotime($availability['to'])) &&
                            ($this->to >= strtotime($availability['from'])) &&
                            ($this->to <= strtotime($availability['to']))
                        ){
                            $allHotels [] =  $hotel;
                        }
                    }
                }
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