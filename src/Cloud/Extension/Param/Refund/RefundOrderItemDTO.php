<?php

namespace Com\Youzan\Cloud\Extension\Param\Refund;



/**
 * 退款单明细
 * @author Baymax
 * @create Wed Apr 24 21:27:35 CST 2019
 */
class RefundOrderItemDTO implements \JsonSerializable {

    /**
     * 纠纷Id, 预留字段
     * @var integer
     */
    private $disputeId;

    /**
     * 主键Id
     * @var integer
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
     * @var integer
     */
    private $kdtId;

    /**
     * 订单商品ID
     * @var integer
     */
    private $itemId;

    /**
     * 退款金额
     * @var integer
     */
    private $refundFee;

    /**
     * 邮费
     * @var integer
     */
    private $postage;

    /**
     * 退款的某个商品数量
     * @var integer
     */
    private $num;

    /**
     * 商品退还的重量 (只存整数值,不关心单位)
     * @var integer
     */
    private $weight;

    /**
     * 打标
     * @var integer
     */
    private $tags;

    /**
     * 创建时间
     * @var date
     */
    private $createTime;

    /**
     * 关闭时间
     * @var date
     */
    private $updateTime;



    /**
     * @return integer
     */
    public function getDisputeId(): integer
    {
        return $this->disputeId;
    }

    /**
     * @param integer $disputeId
     */
    public function setDisputeId(integer $disputeId): void
    {
        $this->disputeId = $disputeId;
    }

    /**
     * @return integer
     */
    public function getId(): integer
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId(integer $id): void
    {
        $this->id = $id;
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
     * @return integer
     */
    public function getKdtId(): integer
    {
        return $this->kdtId;
    }

    /**
     * @param integer $kdtId
     */
    public function setKdtId(integer $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return integer
     */
    public function getItemId(): integer
    {
        return $this->itemId;
    }

    /**
     * @param integer $itemId
     */
    public function setItemId(integer $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return integer
     */
    public function getRefundFee(): integer
    {
        return $this->refundFee;
    }

    /**
     * @param integer $refundFee
     */
    public function setRefundFee(integer $refundFee): void
    {
        $this->refundFee = $refundFee;
    }

    /**
     * @return integer
     */
    public function getPostage(): integer
    {
        return $this->postage;
    }

    /**
     * @param integer $postage
     */
    public function setPostage(integer $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return integer
     */
    public function getNum(): integer
    {
        return $this->num;
    }

    /**
     * @param integer $num
     */
    public function setNum(integer $num): void
    {
        $this->num = $num;
    }

    /**
     * @return integer
     */
    public function getWeight(): integer
    {
        return $this->weight;
    }

    /**
     * @param integer $weight
     */
    public function setWeight(integer $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return integer
     */
    public function getTags(): integer
    {
        return $this->tags;
    }

    /**
     * @param integer $tags
     */
    public function setTags(integer $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @return date
     */
    public function getCreateTime(): date
    {
        return $this->createTime;
    }

    /**
     * @param date $createTime
     */
    public function setCreateTime(date $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return date
     */
    public function getUpdateTime(): date
    {
        return $this->updateTime;
    }

    /**
     * @param date $updateTime
     */
    public function setUpdateTime(date $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}