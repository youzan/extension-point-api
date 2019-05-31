<?php

namespace Com\Youzan\Cloud\Extension\Param\Refund;

use Com\Youzan\Cloud\Extension\Param\Refund\ItemDTO;

/**
 * 退款资金变更消息体
 * @author Baymax
 * @create 2018-12-19 21:16:28.0
 */
class RefundFundChangedMessageDTO implements \JsonSerializable {

    /**
     * 退款单号（目前只有微信支付退款才有）
     * @var string
     */
    private $refundId;

    /**
     * 退款流水号
     * @var string
     */
    private $refundNo;

    /**
     * 订单商品
     * @var ItemDTO
     */
    private $items;

    /**
     * 退款金额
     * @var int
     */
    private $refundFee;

    /**
     * 支付渠道
     * @var int
     */
    private $payWay;

    /**
     * 退款资金状态（0.退款中 1.退款失败 2.退款成功）
     * @var int
     */
    private $status;

    /**
     * 错误码
     * @var string
     */
    private $errorCode;

    /**
     * 错误信息
     * @var string
     */
    private $errorMsg;

    /**
     * 创建时间
     * @var int
     */
    private $createTime;

    /**
     * 更新时间
     * @var int
     */
    private $updateTime;

    /**
     * 退款资金流类型（1.标记退款 2.店铺余额转账退款 3.支付渠道退款）
     * @var int
     */
    private $type;

    /**
     * 代付订单号，如果是代付此订单号是P开头订单号
     * @var string
     */
    private $payNo;

    /**
     * 退款阶段（1.售中 2.售后）
     * @var int
     */
    private $phaseId;

    /**
     * 买家id
     * @var int
     */
    private $buyerId;



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
    public function getRefundNo(): string
    {
        return $this->refundNo;
    }

    /**
     * @param string $refundNo
     */
    public function setRefundNo(string $refundNo): void
    {
        $this->refundNo = $refundNo;
    }

    /**
     * @return ItemDTO
     */
    public function getItems(): ItemDTO
    {
        return $this->items;
    }

    /**
     * @param ItemDTO $items
     */
    public function setItems(ItemDTO $items): void
    {
        $this->items = $items;
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
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }

    /**
     * @param string $errorCode
     */
    public function setErrorCode(string $errorCode): void
    {
        $this->errorCode = $errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMsg(): string
    {
        return $this->errorMsg;
    }

    /**
     * @param string $errorMsg
     */
    public function setErrorMsg(string $errorMsg): void
    {
        $this->errorMsg = $errorMsg;
    }

    /**
     * @return int
     */
    public function getCreateTime(): int
    {
        return $this->createTime;
    }

    /**
     * @param int $createTime
     */
    public function setCreateTime(int $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return int
     */
    public function getUpdateTime(): int
    {
        return $this->updateTime;
    }

    /**
     * @param int $updateTime
     */
    public function setUpdateTime(int $updateTime): void
    {
        $this->updateTime = $updateTime;
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
     * @return string
     */
    public function getPayNo(): string
    {
        return $this->payNo;
    }

    /**
     * @param string $payNo
     */
    public function setPayNo(string $payNo): void
    {
        $this->payNo = $payNo;
    }

    /**
     * @return int
     */
    public function getPhaseId(): int
    {
        return $this->phaseId;
    }

    /**
     * @param int $phaseId
     */
    public function setPhaseId(int $phaseId): void
    {
        $this->phaseId = $phaseId;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}