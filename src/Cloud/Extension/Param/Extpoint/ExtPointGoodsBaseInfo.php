<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;



/**
 * 活动商品信息列表
 * @author Baymax
 * @create 2021-05-06 20:06:45.0
 */
class ExtPointGoodsBaseInfo implements \JsonSerializable {

    /**
     * 商品ID
     * @var int
     */
    private $itemId;

    /**
     * 商品规格ID
     * @var int
     */
    private $skuId;

    /**
     * 交易下单时的订单条目ID，由交易在下单时生成的商品条目编号
     * @var int
     */
    private $oid;

    /**
     * 商品原始价格， 单位：分
     * @var int
     */
    private $price;

    /**
     * 商品数量
     * @var int
     */
    private $num;

    /**
     * 商品优惠金额， 单位： 分
     * @var int
     */
    private $decrease;

    /**
     * 商品在优惠均摊后，实付价格。单位： 分
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
    public function getOid(): ?int
    {
        return $this->oid;
    }

    /**
     * @param int $oid
     */
    public function setOid(?int $oid): void
    {
        $this->oid = $oid;
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
     * @return int
     */
    public function getDecrease(): ?int
    {
        return $this->decrease;
    }

    /**
     * @param int $decrease
     */
    public function setDecrease(?int $decrease): void
    {
        $this->decrease = $decrease;
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