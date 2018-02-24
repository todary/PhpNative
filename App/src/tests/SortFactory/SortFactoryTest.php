<?php

use  App\Src\SortFactory\SortFactory;
use App\Src\Service\NameService;
use App\Src\Sort\NameSort;
use App\Src\Sort\PriceSort;
class SortFactoryTest extends \PHPUnit\Framework\TestCase
{
    protected $nameSortObject;
    protected $priceSortObject;

    public function setUp()
    {
        $object = new SortFactory();
        $this->nameSortObject = $object->create('name', new NameService([], ''));
        $this->priceSortObject = $object->create('price', new NameService([], ''));
    }

    public function providerMethod()
    {
        $object = new SortFactory();

        return [
            [
                new NameSort(new NameService([], ''))
                , $object->create('name', new NameService([], ''))
            ],
            [
                new PriceSort(new NameService([], ''))
                , $object->create('price', new NameService([], ''))
            ]
        ];
    }

    /**
     * @dataProvider providerMethod
     */

    public function testFactory($object, $objectFactory)
    {
        $this->assertEquals($object, $objectFactory);
    }

}
