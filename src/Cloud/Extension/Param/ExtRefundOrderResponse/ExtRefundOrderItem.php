<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtRefundOrderResponse;

use Com\Youzan\Cloud\Extension\Param\ExtRefundOrderResponse\AmountDetail;

/**
 * 退款商品列表
 * @author Baymax
 * @create Mon Jan 08 17:01:22 CST 2024
 */
class ExtRefundOrderItem implements \JsonSerializable {

    /**
     * 退款单号
     * @var string
     */
    private $refundId;

    /**
     * 订单明细id，即子订单号，19位随机数字组合，用于判断判断子订单是否发货，退款场景等。对应父级字段tid。一笔订单多种商品对应多个子订单号，按照订单中商品种类生成，不根据商品数量生成（例：一笔订单有3种商品数量6个分别是：香蕉1个，苹果2个，橙子3个，会生成3个子订单号），用于判断判断子订单是否发货，退款场景等。请使用订单api【youzan.trades.sold.get】【youzan.trade.get.4.0.0】获取该字段。
     * @var int
     */
    private $oid;

    /**
     * 退款数量  不能为负数
     * @var int
     */
    private $num;

    /**
     * 退款金额  不能为负数  单位：分 
     * @var int
     */
    private $amount;

    /**
     * 分店的商品id
     * @var int
     */
    private $itemId;

    /**
     * 商品规格id
     * @var int
     */
    private $skuId;

    /**
     * 商品名称
     * @var string
     */
    private $itemTitle;

    /**
     * 商品编码
     * @var string
     */
    private $itemNo;

    /**
     * 商品原价 不能为负数  单位：分 
     * @var int
     */
    private $itemPrice;

    /**
     * 金额明细-基于支付方式
     * @var array
     */
    private $amountDetails;



    /**
     * @return string
     */
    public function getRefundId(): ?string
    {
        return $this->refundId;
    }

    /**
     * @param string $refundId
     */
    public function setRefundId(?string $refundId): void
    {
        $this->refundId = $refundId;
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
     * @return string
     */
    public function getItemTitle(): ?string
    {
        return $this->itemTitle;
    }

    /**
     * @param string $itemTitle
     */
    public function setItemTitle(?string $itemTitle): void
    {
        $this->itemTitle = $itemTitle;
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
    public function getItemPrice(): ?int
    {
        return $this->itemPrice;
    }

    /**
     * @param int $itemPrice
     */
    public function setItemPrice(?int $itemPrice): void
    {
        $this->itemPrice = $itemPrice;
    }

    /**
     * @return array
     */
    public function getAmountDetails(): ?array
    {
        return $this->amountDetails;
    }

    /**
     * @param array $amountDetails
     */
    public function setAmountDetails(?array $amountDetails): void
    {
        $this->amountDetails = $amountDetails;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}