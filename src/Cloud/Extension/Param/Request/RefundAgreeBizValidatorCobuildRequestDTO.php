<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 业务校验请求
 * @author Baymax
 * @create Wed Jan 14 15:26:18 CST 2026
 */
class RefundAgreeBizValidatorCobuildRequestDTO implements \JsonSerializable {

    /**
     * 退款单号
     * @var string
     */
    private $refundId;

    /**
     * 订单编号
     * @var string
     */
    private $orderNo;

    /**
     * 店铺kdtId
     * @var int
     */
    private $kdtId;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}