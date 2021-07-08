<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Model\ComputingItemIdentity;

/**
 * 
 * @author Baymax
 * @create 2021-07-08 11:43:47.0
 */
class PreComputingItemPromotionParam implements \JsonSerializable {

    /**
     * 
     * @var ComputingItemIdentity
     */
    private $computingItemIdentity;

    /**
     * 
     * @var int
     */
    private $num;

    /**
     * 
     * @var int
     */
    private $originalUnitPrice;

    /**
     * 
     * @var int
     */
    private $initUnitPrice;

    /**
     * 
     * @var int
     */
    private $initTotalPrice;

    /**
     * 
     * @var int
     */
    private $totalDecreaseAmount;



    /**
     * @return ComputingItemIdentity
     */
    public function getComputingItemIdentity(): ?ComputingItemIdentity
    {
        return $this->computingItemIdentity;
    }

    /**
     * @param ComputingItemIdentity $computingItemIdentity
     */
    public function setComputingItemIdentity(?ComputingItemIdentity $computingItemIdentity): void
    {
        $this->computingItemIdentity = $computingItemIdentity;
    }

    /**
     * @return int
     */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(?int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return int
     */
    public function getOriginalUnitPrice(): ?int
    {
        return $this->originalUnitPrice;
    }

    /**
     * @param int $originalUnitPrice
     */
    public function setOriginalUnitPrice(?int $originalUnitPrice): void
    {
        $this->originalUnitPrice = $originalUnitPrice;
    }

    /**
     * @return int
     */
    public function getInitUnitPrice(): ?int
    {
        return $this->initUnitPrice;
    }

    /**
     * @param int $initUnitPrice
     */
    public function setInitUnitPrice(?int $initUnitPrice): void
    {
        $this->initUnitPrice = $initUnitPrice;
    }

    /**
     * @return int
     */
    public function getInitTotalPrice(): ?int
    {
        return $this->initTotalPrice;
    }

    /**
     * @param int $initTotalPrice
     */
    public function setInitTotalPrice(?int $initTotalPrice): void
    {
        $this->initTotalPrice = $initTotalPrice;
    }

    /**
     * @return int
     */
    public function getTotalDecreaseAmount(): ?int
    {
        return $this->totalDecreaseAmount;
    }

    /**
     * @param int $totalDecreaseAmount
     */
    public function setTotalDecreaseAmount(?int $totalDecreaseAmount): void
    {
        $this->totalDecreaseAmount = $totalDecreaseAmount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}