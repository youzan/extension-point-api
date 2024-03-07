<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 商品基础信息
 * @author Baymax
 * @create Wed Aug 09 16:47:39 CST 2023
 */
class GoodsInfo implements \JsonSerializable {

    /**
     * 商品统一itemId。商品不再区分总店、分店商品id，只需要统一的itemId，itemId+总店/任意分店Id即可查询商品
     * @var int
     */
    private $itemId;

    /**
     * 规格统一skuId。商品不再区分总店、分店skuid，只需要统一的skuId，skuId+总店/任意分店Id即可查询商品
     * @var int
     */
    private $skuId;

    /**
     * 明细id
     * @var int
     */
    private $orderItemId;

    /**
     * 商品原价
     * @var int
     */
    private $price;

    /**
     * 商品数量
     * @var int
     */
    private $num;

    /**
     * 商品编码
     * @var string
     */
    private $itemsNo;



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
     * @return int
     */
    public function getPrice(): ?int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(?int $price): void
    {
        $this->price = $price;
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
    public function getItemsNo(): ?string
    {
        return $this->itemsNo;
    }

    /**
     * @param string $itemsNo
     */
    public function setItemsNo(?string $itemsNo): void
    {
        $this->itemsNo = $itemsNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}