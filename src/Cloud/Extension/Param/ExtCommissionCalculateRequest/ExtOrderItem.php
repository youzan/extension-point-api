<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtCommissionCalculateRequest;



/**
 * 订单商品信息
 * @author Baymax
 * @create Thu Nov 30 17:41:09 CST 2023
 */
class ExtOrderItem implements \JsonSerializable {

    /**
     * 订单商品Id
     * @var int
     */
    private $itemId;

    /**
     * 店铺商品Id
     * @var int
     */
    private $goodsId;

    /**
     * 商品skuId
     * @var int
     */
    private $skuId;

    /**
     * 商品数量(个)
     * @var int
     */
    private $num;

    /**
     * 商品原单价(单位:分)
     * @var int
     */
    private $originUnitPrice;

    /**
     * 现商品单价(单位:分)，减去了商品优惠。
     * @var int
     */
    private $unitPrice;

    /**
     * 商品实付金额(单位:分), 如果发生过退款，值是减完退款的金额
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
    public function getGoodsId(): ?int
    {
        return $this->goodsId;
    }

    /**
     * @param int $goodsId
     */
    public function setGoodsId(?int $goodsId): void
    {
        $this->goodsId = $goodsId;
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
    public function getOriginUnitPrice(): ?int
    {
        return $this->originUnitPrice;
    }

    /**
     * @param int $originUnitPrice
     */
    public function setOriginUnitPrice(?int $originUnitPrice): void
    {
        $this->originUnitPrice = $originUnitPrice;
    }

    /**
     * @return int
     */
    public function getUnitPrice(): ?int
    {
        return $this->unitPrice;
    }

    /**
     * @param int $unitPrice
     */
    public function setUnitPrice(?int $unitPrice): void
    {
        $this->unitPrice = $unitPrice;
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