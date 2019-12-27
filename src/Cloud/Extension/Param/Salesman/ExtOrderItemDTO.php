<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 订单商品信息
 * @author Baymax
 * @create 2019-12-12 09:29:19.0
 */
class ExtOrderItemDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $orderNo;

    /**
     * 
     * @var int
     */
    private $itemId;

    /**
     * 
     * @var int
     */
    private $skuId;

    /**
     * 商品sku
     * @var string
     */
    private $sku;

    /**
     * 商品名称
     * @var string
     */
    private $goodsName;

    /**
     * 商品数量
     * @var int
     */
    private $num;

    /**
     * 商品原单价
     * @var int
     */
    private $originUnitPrice;

    /**
     * 现商品单价，减去了商品优惠。以分为单位
     * @var int
     */
    private $unitPrice;

    /**
     * 商品实付金额。
     * @var int
     */
    private $realPay;



    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getItemId(): int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(int $itemId): void
    {
        $this->itemId = $itemId;
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
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     */
    public function setSku(string $sku): void
    {
        $this->sku = $sku;
    }

    /**
     * @return string
     */
    public function getGoodsName(): string
    {
        return $this->goodsName;
    }

    /**
     * @param string $goodsName
     */
    public function setGoodsName(string $goodsName): void
    {
        $this->goodsName = $goodsName;
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
    public function getUnitPrice(): int
    {
        return $this->unitPrice;
    }

    /**
     * @param int $unitPrice
     */
    public function setUnitPrice(int $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
    }

    /**
     * @return int
     */
    public function getRealPay(): int
    {
        return $this->realPay;
    }

    /**
     * @param int $realPay
     */
    public function setRealPay(int $realPay): void
    {
        $this->realPay = $realPay;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}