<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;

use Com\Youzan\Cloud\Extension\Param\Trade\RefundOrderItemDTO;

/**
 * 历史退款记录列表
 * @author Baymax
 * @create 2019-07-24 13:21:39.0
 */
class RefundOrderDTO implements \JsonSerializable {

    /**
     * 退款单号
     * @var string
     */
    private $refundId;

    /**
     * 退款金额
     * @var int
     */
    private $refundFee;

    /**
     * 邮费
     * @var int
     */
    private $postage;

    /**
     * 退款流程类型
     * @var int
     */
    private $type;

    /**
     * 退款状态
     * @var int
     */
    private $status;

    /**
     * 支付类型
     * @var int
     */
    private $payType;

    /**
     * 支付方式
     * @var int
     */
    private $payway;

    /**
     * 历史退款的商品
     * @var array
     */
    private $itemList;



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
    public function getPayway(): int
    {
        return $this->payway;
    }

    /**
     * @param int $payway
     */
    public function setPayway(int $payway): void
    {
        $this->payway = $payway;
    }

    /**
     * @return array
     */
    public function getItemList(): array
    {
        return $this->itemList;
    }

    /**
     * @param array $itemList
     */
    public function setItemList(array $itemList): void
    {
        $this->itemList = $itemList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}