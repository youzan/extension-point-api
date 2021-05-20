<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 退款商品信息
 * @author Baymax
 * @create 2020-11-10 15:22:48.0
 */
class RefundItemDTO implements \JsonSerializable {

    /**
     * 退款商品的数量
     * @var int
     */
    private $refundGoodsNum;

    /**
     * 订单明细id，即子订单号
     * @var int
     */
    private $oid;

    /**
     * 下单的商品数量
     * @var int
     */
    private $orderGoodsNum;

    /**
     * 退款金额
     * @var int
     */
    private $refundFee;



    /**
     * @return int
     */
    public function getRefundGoodsNum(): ?int
    {
        return $this->refundGoodsNum;
    }

    /**
     * @param int $refundGoodsNum
     */
    public function setRefundGoodsNum(?int $refundGoodsNum): void
    {
        $this->refundGoodsNum = $refundGoodsNum;
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
    public function getOrderGoodsNum(): ?int
    {
        return $this->orderGoodsNum;
    }

    /**
     * @param int $orderGoodsNum
     */
    public function setOrderGoodsNum(?int $orderGoodsNum): void
    {
        $this->orderGoodsNum = $orderGoodsNum;
    }

    /**
     * @return int
     */
    public function getRefundFee(): ?int
    {
        return $this->refundFee;
    }

    /**
     * @param int $refundFee
     */
    public function setRefundFee(?int $refundFee): void
    {
        $this->refundFee = $refundFee;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}