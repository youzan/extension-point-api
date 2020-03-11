<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;

/**
 * 商品信息
 * @author Baymax
 * @create 2018-10-08 11:32:37.0
 */
class ItemCalcDTO implements \JsonSerializable {

    /**
     * 自定义带入数据
     * @var stdClass
     */
    private $selfDefineData;

    /**
     * 订单id
     * @var int
     */
    private $orderItemId;

    /**
     * 重量(非标品,单位克)
     * @var int
     */
    private $weight;

    /**
     * 购买数量
     * @var int
     */
    private $num;

    /**
     * 原始单价(单位分)
     * @var int
     */
    private $originUnitPrice;

    /**
     * skuId信息
     * @var int
     */
    private $skuId;

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 优惠后价格
     * @var int
     */
    private $totalPrice;



    /**
     * @return stdClass
     */
    public function getSelfDefineData(): stdClass
    {
        return $this->selfDefineData;
    }

    /**
     * @param stdClass $selfDefineData
     */
    public function setSelfDefineData(stdClass $selfDefineData): void
    {
        $this->selfDefineData = $selfDefineData;
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
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return int
     */
    public function getOriginUnitPrice(): int
    {
        return $this->originUnitPrice;
    }

    /**
     * @param int $originUnitPrice
     */
    public function setOriginUnitPrice(int $originUnitPrice): void
    {
        $this->originUnitPrice = $originUnitPrice;
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
    public function getTotalPrice(): int
    {
        return $this->totalPrice;
    }

    /**
     * @param int $totalPrice
     */
    public function setTotalPrice(int $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}