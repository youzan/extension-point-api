<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Param\BayMaxComputingItemDecrease;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 14:25:04 CST 2022
 */
class BayMaxGoodsPriceDiscountEffect implements \JsonSerializable {

    /**
     *  
     * @var int
     */
    private $totalDecrease;

    /**
     *  
     * @var array
     */
    private $computingItemDecreases;



    /**
     * @return int
     */
    public function getTotalDecrease(): ?int
    {
        return $this->totalDecrease;
    }

    /**
     * @param int $totalDecrease
     */
    public function setTotalDecrease(?int $totalDecrease): void
    {
        $this->totalDecrease = $totalDecrease;
    }

    /**
     * @return array
     */
    public function getComputingItemDecreases(): ?array
    {
        return $this->computingItemDecreases;
    }

    /**
     * @param array $computingItemDecreases
     */
    public function setComputingItemDecreases(?array $computingItemDecreases): void
    {
        $this->computingItemDecreases = $computingItemDecreases;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}