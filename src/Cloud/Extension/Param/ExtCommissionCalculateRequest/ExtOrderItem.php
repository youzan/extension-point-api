<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtCommissionCalculateRequest;



/**
 * 订单商品信息
 * @author Baymax
 * @create Wed Jan 22 16:28:58 CST 2025
 */
class ExtOrderItem implements \JsonSerializable {

    /**
     * 订单明细Id
     * @var int
     */
    private $itemId;

    /**
     * 外部订单明细Id，仅无原单退款单会传入，其他场景为null
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