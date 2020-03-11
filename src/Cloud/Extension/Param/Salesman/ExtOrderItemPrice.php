<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 计价商品价格
 * @author Baymax
 * @create Thu Dec 12 09:29:19 CST 2019
 */
class ExtOrderItemPrice implements \JsonSerializable {

    /**
     * 现商品单价
     * @var int
     */
    private $unitPrice;

    /**
     * 商品价格总价
     * @var int
     */
    private $totalPrice;

    /**
     * 原商品单价
     * @var int
     */
    private $originUnitPrice;

    /**
     * 数量
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
     * 赠品标记
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
     * 卖家shop_id
     * @var int
     */
    private $shopId;

    /**
     * 规格id
     * @var int
     */
    private $skuId;

    /**
     * 预留扩展字段
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
    public function getPresent(): int
    {
        return $this->present;
    }

    /**
     * @param int $present
     */
    public function setPresent(int $present): void
    {
        $this->present = $present;
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
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getShopId(): int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId(int $shopId): void
    {
        $this->shopId = $shopId;
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
    public function getExtra(): string
    {
        return $this->extra;
    }

    /**
     * @param string $extra
     */
    public function setExtra(string $extra): void
    {
        $this->extra = $extra;
    }

    /**
     * @return int
     */
    public function getTags(): int
    {
        return $this->tags;
    }

    /**
     * @param int $tags
     */
    public function setTags(int $tags): void
    {
        $this->tags = $tags;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}