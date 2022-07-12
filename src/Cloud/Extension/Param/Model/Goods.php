<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\Activity;

/**
 * 商品及均摊优惠详情
 * @author Baymax
 * @create Wed Apr 20 09:57:08 CST 2022
 */
class Goods implements \JsonSerializable {

    /**
     * 商品统一itemId
     * @var int
     */
    private $itemId;

    /**
     * 规格统一skuId
     * @var int
     */
    private $skuId;

    /**
     * 明细id
     * @var int
     */
    private $orderItemId;

    /**
     * 商品级活动优惠 / 订单级优惠活动均摊优惠
     * @var array
     */
    private $appliedActivities;

    /**
     * 优惠后价格（单位/分）
     * @var int
     */
    private $realPay;



    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(?int $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getSkuId(): ?int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(?int $skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * @return int
     */
    public function getOrderItemId(): ?int
    {
        return $this->orderItemId;
    }

    /**
     * @param int $orderItemId
     */
    public function setOrderItemId(?int $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return array
     */
    public function getAppliedActivities(): ?array
    {
        return $this->appliedActivities;
    }

    /**
     * @param array $appliedActivities
     */
    public function setAppliedActivities(?array $appliedActivities): void
    {
        $this->appliedActivities = $appliedActivities;
    }

    /**
     * @return int
     */
    public function getRealPay(): ?int
    {
        return $this->realPay;
    }

    /**
     * @param int $realPay
     */
    public function setRealPay(?int $realPay): void
    {
        $this->realPay = $realPay;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}