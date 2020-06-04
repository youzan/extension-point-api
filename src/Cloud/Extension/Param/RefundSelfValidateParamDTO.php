<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create 2018-10-08 16:18:50.0
 */
class RefundSelfValidateParamDTO implements \JsonSerializable {

    /**
     * 买家标识
     * @var string
     */
    private $userId;

    /**
     * 商户店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 退款原因
     * @var int
     */
    private $reason;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 用户退款类型
     * @var string
     */
    private $disputeFlowType;

    /**
     * 买家标识
     * @var string
     */
    private $yzOpenId;

    /**
     * 本次退款申请的总退款金额 单位:分
     * @var int
     */
    private $refundFee;

    /**
     * 失效卡券数量
     * @var int
     */
    private $disabledCouponCount;



    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(string $userId): void
    {
        $this->userId = $userId;
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
    public function getReason(): int
    {
        return $this->reason;
    }

    /**
     * @param int $reason
     */
    public function setReason(int $reason): void
    {
        $this->reason = $reason;
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
     * @return string
     */
    public function getDisputeFlowType(): string
    {
        return $this->disputeFlowType;
    }

    /**
     * @param string $disputeFlowType
     */
    public function setDisputeFlowType(string $disputeFlowType): void
    {
        $this->disputeFlowType = $disputeFlowType;
    }

    /**
     * @return string
     */
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return int
     */
    public function getRefundFee(): int
    {
        return $this->refundFee;
    }

    /**
     * @param int $refundFee
     */
    public function setRefundFee(int $refundFee): void
    {
        $this->refundFee = $refundFee;
    }

    /**
     * @return int
     */
    public function getDisabledCouponCount(): int
    {
        return $this->disabledCouponCount;
    }

    /**
     * @param int $disabledCouponCount
     */
    public function setDisabledCouponCount(int $disabledCouponCount): void
    {
        $this->disabledCouponCount = $disabledCouponCount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}