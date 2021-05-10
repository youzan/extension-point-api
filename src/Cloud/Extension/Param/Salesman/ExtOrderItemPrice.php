<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 商品明细
 * @author Baymax
 * @create 2019-12-12 09:29:19.0
 */
class ExtOrderItemPrice implements \JsonSerializable {

    /**
     * 商品现单价（优惠后）
     * @var int
     */
    private $unitPrice;

    /**
     * 商品总价 &#x3D; 商品单价 * 数量
     * @var int
     */
    private $totalPrice;

    /**
     * 商品原单价（优惠前）
     * @var int
     */
    private $originUnitPrice;

    /**
     * 商品数量
     * @var int
     */
    private $num;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单商品id
     * @var int
     */
    private $itemId;

    /**
     * 是否赠品 1：是赠品 0：不是赠品
     * @var int
     */
    private $present;

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 卖家店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 卖家店铺id（老字段可以忽略）
     * @var int
     */
    private $shopId;

    /**
     * 商品规格id
     * @var int
     */
    private $skuId;

    /**
     * 扩展信息
     * @var string
     */
    private $extra;

    /**
     * 标记字段
     * @var int
     */
    private $tags;



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
    public function getTotalPrice(): ?int
    {
        return $this->totalPrice;
    }

    /**
     * @param int $totalPrice
     */
    public function setTotalPrice(?int $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
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
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

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
    public function getPresent(): ?int
    {
        return $this->present;
    }

    /**
     * @param int $present
     */
    public function setPresent(?int $present): void
    {
        $this->present = $present;
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
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getShopId(): ?int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId(?int $shopId): void
    {
        $this->shopId = $shopId;
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
     * @return string
     */
    public function getExtra(): ?string
    {
        return $this->extra;
    }

    /**
     * @param string $extra
     */
    public function setExtra(?string $extra): void
    {
        $this->extra = $extra;
    }

    /**
     * @return int
     */
    public function getTags(): ?int
    {
        return $this->tags;
    }

    /**
     * @param int $tags
     */
    public function setTags(?int $tags): void
    {
        $this->tags = $tags;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}