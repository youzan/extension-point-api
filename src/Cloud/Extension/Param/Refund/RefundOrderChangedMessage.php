<?php

namespace Com\Youzan\Cloud\Extension\Param\Refund;

use DateTime;
use Com\Youzan\Cloud\Extension\Param\Refund\RefundOrderItemDTO;

/**
 * refundOrder发生创建，修改等变更  消息体
 * @author Baymax
 * @create Wed Apr 24 21:27:35 CST 2019
 */
class RefundOrderChangedMessage implements \JsonSerializable {

    /**
     * 纠纷Id, 预留字段
     * @var int
     */
    private $disputeId;

    /**
     * 款单号，业务幂等字段
     * @var string
     */
    private $refundId;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 口袋通id
     * @var int
     */
    private $kdtId;

    /**
     * 是总的订单退款金额
     * @var int
     */
    private $refundFee;

    /**
     * 邮费
     * @var int
     */
    private $postage;

    /**
     * 退款阶段。1&quot;售中&quot;，2&quot;售后&quot;
     * @var int
     */
    private $phase;

    /**
     * 退款流程类型
     * @var int
     */
    private $type;

    /**
     * 退款流程类型。60表示成功
     * @var int
     */
    private $status;

    /**
     * 支付方式。
     * @var int
     */
    private $payType;

    /**
     * 支付系统的payWay。
     * @var int
     */
    private $payWay;

    /**
     * 支付收单号-对应老系统的内部交易单号
     * @var string
     */
    private $payId;

    /**
     * 退款诉求。1&quot;仅退款&quot;，2&quot;退货退款&quot;
     * @var int
     */
    private $demand;

    /**
     * 退款原因
     * @var int
     */
    private $reason;

    /**
     * 客满介入状态
     * @var int
     */
    private $csStatus;

    /**
     * 买家ID
     * @var int
     */
    private $buyerId;

    /**
     * 买家手机号
     * @var string
     */
    private $buyerPhone;

    /**
     * 买家备注信息
     * @var string
     */
    private $remark;

    /**
     * 扩展信息
     * @var string
     */
    private $extension;

    /**
     * 添加时间
     * @var DateTime
     */
    private $createTime;

    /**
     * 更新时间
     * @var DateTime
     */
    private $updateTime;

    /**
     * 是否为无效的退款单。true为有效，false为无效
     * @var bool
     */
    private $invalid;

    /**
     * 退款单明细
     * @var array
     */
    private $refundOrderItems;



    /**
     * @return int
     */
    public function getDisputeId(): int
    {
        return $this->disputeId;
    }

    /**
     * @param int $disputeId
     */
    public function setDisputeId(int $disputeId): void
    {
        $this->disputeId = $disputeId;
    }

    /**
     * @return string
     */
    public function getRefundId(): string
    {
        return $this->refundId;
    }

    /**
     * @param string $refundId
     */
    public function setRefundId(string $refundId): void
    {
        $this->refundId = $refundId;
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
    public function getPostage(): int
    {
        return $this->postage;
    }

    /**
     * @param int $postage
     */
    public function setPostage(int $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return int
     */
    public function getPhase(): int
    {
        return $this->phase;
    }

    /**
     * @param int $phase
     */
    public function setPhase(int $phase): void
    {
        $this->phase = $phase;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getPayType(): int
    {
        return $this->payType;
    }

    /**
     * @param int $payType
     */
    public function setPayType(int $payType): void
    {
        $this->payType = $payType;
    }

    /**
     * @return int
     */
    public function getPayWay(): int
    {
        return $this->payWay;
    }

    /**
     * @param int $payWay
     */
    public function setPayWay(int $payWay): void
    {
        $this->payWay = $payWay;
    }

    /**
     * @return string
     */
    public function getPayId(): string
    {
        return $this->payId;
    }

    /**
     * @param string $payId
     */
    public function setPayId(string $payId): void
    {
        $this->payId = $payId;
    }

    /**
     * @return int
     */
    public function getDemand(): int
    {
        return $this->demand;
    }

    /**
     * @param int $demand
     */
    public function setDemand(int $demand): void
    {
        $this->demand = $demand;
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
     * @return int
     */
    public function getCsStatus(): int
    {
        return $this->csStatus;
    }

    /**
     * @param int $csStatus
     */
    public function setCsStatus(int $csStatus): void
    {
        $this->csStatus = $csStatus;
    }

    /**
     * @return int
     */
    public function getBuyerId(): int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return string
     */
    public function getBuyerPhone(): string
    {
        return $this->buyerPhone;
    }

    /**
     * @param string $buyerPhone
     */
    public function setBuyerPhone(string $buyerPhone): void
    {
        $this->buyerPhone = $buyerPhone;
    }

    /**
     * @return string
     */
    public function getRemark(): string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark(string $remark): void
    {
        $this->remark = $remark;
    }

    /**
     * @return string
     */
    public function getExtension(): string
    {
        return $this->extension;
    }

    /**
     * @param string $extension
     */
    public function setExtension(string $extension): void
    {
        $this->extension = $extension;
    }

    /**
     * @return DateTime
     */
    public function getCreateTime(): DateTime
    {
        return $this->createTime;
    }

    /**
     * @param DateTime $createTime
     */
    public function setCreateTime(DateTime $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return DateTime
     */
    public function getUpdateTime(): DateTime
    {
        return $this->updateTime;
    }

    /**
     * @param DateTime $updateTime
     */
    public function setUpdateTime(DateTime $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return bool
     */
    public function getInvalid(): bool
    {
        return $this->invalid;
    }

    /**
     * @param bool $invalid
     */
    public function setInvalid(bool $invalid): void
    {
        $this->invalid = $invalid;
    }

    /**
     * @return array
     */
    public function getRefundOrderItems(): array
    {
        return $this->refundOrderItems;
    }

    /**
     * @param array $refundOrderItems
     */
    public function setRefundOrderItems(array $refundOrderItems): void
    {
        $this->refundOrderItems = $refundOrderItems;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}