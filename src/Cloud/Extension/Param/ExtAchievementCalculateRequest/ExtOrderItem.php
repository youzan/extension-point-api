<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtAchievementCalculateRequest;



/**
 * 订单明细
 * @author Baymax
 * @create Mon Mar 31 11:21:07 CST 2025
 */
class ExtOrderItem implements \JsonSerializable {

    /**
     * 订单明细id
     * @var int
     */
    private $oid;

    /**
     * 外部订单明细Id，仅无原单退款单时传入，其他场景为null
     * @var string
     */
    private $outerOid;

    /**
     * 商品Id，在有赞平台产生的订单，该字段为店铺商品id，外部同步的订单则该字段可能为店铺商品id也可能为总部商品id，取决于同步时传入的商品id值
     * @var int
     */
    private $goodsId;

    /**
     * 商品编码
     * @var string
     */
    private $itemNo;

    /**
     * 商品规格Id，在有赞平台产生的订单，该字段为店铺商品规格id，外部同步的订单则该字段可能为店铺商品规格id也可能为总部商品规格id，取决于同步时传入的商品规格id值
     * @var int
     */
    private $skuId;

    /**
     * 商品规格编码
     * @var string
     */
    private $skuNo;

    /**
     * 本次剩余的商品金额,如果是无原单退款单,则为负数，单位：分
     * @var int
     */
    private $amount;



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
     * @return string
     */
    public function getOuterOid(): ?string
    {
        return $this->outerOid;
    }

    /**
     * @param string $outerOid
     */
    public function setOuterOid(?string $outerOid): void
    {
        $this->outerOid = $outerOid;
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
     * @return string
     */
    public function getItemNo(): ?string
    {
        return $this->itemNo;
    }

    /**
     * @param string $itemNo
     */
    public function setItemNo(?string $itemNo): void
    {
        $this->itemNo = $itemNo;
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
    public function getSkuNo(): ?string
    {
        return $this->skuNo;
    }

    /**
     * @param string $skuNo
     */
    public function setSkuNo(?string $skuNo): void
    {
        $this->skuNo = $skuNo;
    }

    /**
     * @return int
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}