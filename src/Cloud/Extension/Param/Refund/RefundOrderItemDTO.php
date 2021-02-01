<?php

namespace Com\Youzan\Cloud\Extension\Param\Refund;

use DateTime;

/**
 * 退款单明细
 * @author Baymax
 * @create 2019-04-24 21:27:35.0
 */
class RefundOrderItemDTO implements \JsonSerializable {

    /**
     * 纠纷Id, 预留字段
     * @var int
     */
    private $disputeId;

    /**
     * 主键Id
     * @var int
     */
    private $id;

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
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 订单商品ID
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
     * 退款的某个商品数量
     * @var int
     */
    private $num;

    /**
     * 商品退还的重量 (只存整数值,不关心单位)
     * @var int
     */
    private $weight;

    /**
     * 打标
     * @var int
     */
    private $tags;

    /**
     * 创建时间
     * @var int
     */
    private $createTime;

    /**
     * 关闭时间
     * @var int
     */
    private $updateTime;



    /**
     * @return int
     */
    public function getDisputeId(): ?int
    {
        return $this->disputeId;
    }

    /**
     * @param int $disputeId
     */
    public function setDisputeId(?int $disputeId): void
    {
        $this->disputeId = $disputeId;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

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

    /**
     * @return int
     */
    public function getPostage(): ?int
    {
        return $this->postage;
    }

    /**
     * @param int $postage
     */
    public function setPostage(?int $postage): void
    {
        $this->postage = $postage;
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
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(?int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getTags(): ?int
    {
        return $this->tags;
    }

    /**
     * @param int $tags
     */
    public function setTags(?int $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * @param int $createTime
     */
    public function setCreateTime(?int $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return int
     */
    public function getUpdateTime(): ?int
    {
        return $this->updateTime;
    }

    /**
     * @param int $updateTime
     */
    public function setUpdateTime(?int $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}