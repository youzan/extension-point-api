<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\Activity;

/**
 * 商品优惠详情
 * @author Baymax
 * @create 2020-06-11 11:03:35.0
 */
class Goods implements \JsonSerializable {

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 规格id
     * @var int
     */
    private $skuId;

    /**
     * 明细id
     * @var int
     */
    private $orderItemId;

    /**
     * 优惠活动详情
     * @var array
     */
    private $appliedActivities;

    /**
     * 商品实付金额
     * @var array
     */
    private $realPay;



    /**
     * @return int
     */
    public function getGoodsId(): int
    {
        return $this->goodsId;
    }

    /**
     * @param int $goodsId
     */
    public function setGoodsId(int $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @return int
     */
    public function getSkuId(): int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(int $skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * @return int
     */
    public function getOrderItemId(): int
    {
        return $this->orderItemId;
    }

    /**
     * @param int $orderItemId
     */
    public function setOrderItemId(int $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return array
     */
    public function getAppliedActivities(): array
    {
        return $this->appliedActivities;
    }

    /**
     * @param array $appliedActivities
     */
    public function setAppliedActivities(array $appliedActivities): void
    {
        $this->appliedActivities = $appliedActivities;
    }

    /**
     * @return array
     */
    public function getRealPay(): array
    {
        return $this->realPay;
    }

    /**
     * @param array $realPay
     */
    public function setRealPay(array $realPay): void
    {
        $this->realPay = $realPay;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}