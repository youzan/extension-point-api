<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Model\ComputingItemIdentity;

/**
 * 商品条目前置优惠计算结果列表
 * @author Baymax
 * @create Wed Feb 16 10:43:05 CST 2022
 */
class PreComputingItemPromotionParam implements \JsonSerializable {

    /**
     * 商品条目
     * @var ComputingItemIdentity
     */
    private $computingItemIdentity;

    /**
     * 商品数量
     * @var int
     */
    private $num;

    /**
     * 商品原始单价，单位（分）
     * @var int
     */
    private $originalUnitPrice;

    /**
     * 本次计算前，此商品初始优惠总价， 单位（分）
     * @var int
     */
    private $initTotalPrice;

    /**
     * 商品前置总优惠金额，单位（分）
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