<?php

namespace Com\Youzan\Cloud\Extension\Param\Refund;



/**
 * 订单商品
 * @author Baymax
 * @create 2018-12-19 21:16:28.0
 */
class ItemDTO implements \JsonSerializable {

    /**
     * id
     * @var int
     */
    private $id;

    /**
     * 纠纷id，预留字段
     * @var int
     */
    private $disputeId;

    /**
     * 退款单号
     * @var string
     */
    private $refundId;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 商品id
     * @var int
     */
    private $itemId;

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
     * 退款单个商品数量
     * @var int
     */
    private $num;

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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

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
    public function getItemId(): int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(int $itemId): void
    {
        $this->itemId = $itemId;
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
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(int $num): void
    {
        $this->num = $num;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}