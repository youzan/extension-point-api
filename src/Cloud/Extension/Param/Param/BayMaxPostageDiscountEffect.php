<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Param\BayMaxComputingItemPostageDiscount;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 14:25:04 CST 2022
 */
class BayMaxPostageDiscountEffect implements \JsonSerializable {

    /**
     *  
     * @var bool
     */
    private $orderPostageFree;

    /**
     *  
     * @var array
     */
    private $computingItemPostageDiscounts;



    /**
     * @return bool
     */
    public function getOrderPostageFree(): ?bool
    {
        return $this->orderPostageFree;
    }

    /**
     * @param bool $orderPostageFree
     */
    public function setOrderPostageFree(?bool $orderPostageFree): void
    {
        $this->orderPostageFree = $orderPostageFree;
    }

    /**
     * @return array
     */
    public function getComputingItemPostageDiscounts(): ?array
    {
        return $this->computingItemPostageDiscounts;
    }

    /**
     * @param array $computingItemPostageDiscounts
     */
    public function setComputingItemPostageDiscounts(?array $computingItemPostageDiscounts): void
    {
        $this->computingItemPostageDiscounts = $computingItemPostageDiscounts;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}