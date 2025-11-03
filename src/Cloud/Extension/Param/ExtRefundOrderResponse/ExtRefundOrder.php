<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtRefundOrderResponse;

use DateTime;
use Com\Youzan\Cloud\Extension\Param\ExtRefundOrderResponse\ExtRefundOrderItem;

/**
 * 退款单信息列表
 * @author Baymax
 * @create Wed Nov 27 10:17:48 CST 2024
 */
class ExtRefundOrder implements \JsonSerializable {

    /**
     * 退款单号
     * @var string
     */
    private $refundId;

    /**
     * 订单所属店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 有赞客户id，客户在有赞的唯一id
     * @var string
     */
    private $yzOpenId;

    /**
     * 是否为门店渠道订单 true-是
     * @var bool
     */
    private $isOfflineOrder;

    /**
     * 退款状态 REFUND_WAIT_SELLER_AGREE(1, &quot;买家已经申请售后，等待卖家同意&quot;),REFUND_SELLER_REFUSE_BUYER(10, &quot;卖家拒绝售后申请，等待买家处理&quot;),REFUND_WAIT_BUYER_RETURN_GOODS(20, &quot;卖家同意售后申请，等待买家退货&quot;),REFUND_WAIT_SELLER_CONFIRM_GOODS(30, &quot;买家已经退货，等待卖家确认收货&quot;),REFUND_SELLER_REFUSE_RETURN_GOODS(40, &quot;卖家拒绝收货，等待买家处理&quot;),REFUND_WAIT_BUYER_CONFIRM_GOODS(45, &quot;商家已经发货，等待买家确认收货&quot;),REFUND_CLOSED(50, &quot;售后关闭&quot;),REFUND_SUCCESS(60, &quot;售后成功&quot;),
     * @var int
     */
    private $refundStatus;

    /**
     * 退款资金类型：0-原路退，1-现金退，2-标记退
     * @var int
     */
    private $refundMode;

    /**
     * 退款诉求(退货方式): 1.仅退款、2.退货退款，3.换货
     * @var int
     */
    private $demand;

    /**
     * 退款原因描述
     * @var string
     */
    private $reasonDesc;

    /**
     * 买家备注信息
     * @var string
     */
    private $remark;

    /**
     * 订单创建时间 时间格式 yyyy-MM-dd HH:mm:ss
     * @var int
     */
    private $createTime;

    /**
     * 退款完成时间 时间格式 yyyy-MM-dd HH:mm:ss
     * @var int
     */
    private $refundSuccessTime;

    /**
     * 退款商品列表
     * @var array
     */
    private $refundOrderItem;



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
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return bool
     */
    public function getIsOfflineOrder(): ?bool
    {
        return $this->isOfflineOrder;
    }

    /**
     * @param bool $isOfflineOrder
     */
    public function setIsOfflineOrder(?bool $isOfflineOrder): void
    {
        $this->isOfflineOrder = $isOfflineOrder;
    }

    /**
     * @return int
     */
    public function getRefundStatus(): ?int
    {
        return $this->refundStatus;
    }

    /**
     * @param int $refundStatus
     */
    public function setRefundStatus(?int $refundStatus): void
    {
        $this->refundStatus = $refundStatus;
    }

    /**
     * @return int
     */
    public function getRefundMode(): ?int
    {
        return $this->refundMode;
    }

    /**
     * @param int $refundMode
     */
    public function setRefundMode(?int $refundMode): void
    {
        $this->refundMode = $refundMode;
    }

    /**
     * @return int
     */
    public function getDemand(): ?int
    {
        return $this->demand;
    }

    /**
     * @param int $demand
     */
    public function setDemand(?int $demand): void
    {
        $this->demand = $demand;
    }

    /**
     * @return string
     */
    public function getReasonDesc(): ?string
    {
        return $this->reasonDesc;
    }

    /**
     * @param string $reasonDesc
     */
    public function setReasonDesc(?string $reasonDesc): void
    {
        $this->reasonDesc = $reasonDesc;
    }

    /**
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark(?string $remark): void
    {
        $this->remark = $remark;
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
    public function getRefundSuccessTime(): ?int
    {
        return $this->refundSuccessTime;
    }

    /**
     * @param int $refundSuccessTime
     */
    public function setRefundSuccessTime(?int $refundSuccessTime): void
    {
        $this->refundSuccessTime = $refundSuccessTime;
    }

    /**
     * @return array
     */
    public function getRefundOrderItem(): ?array
    {
        return $this->refundOrderItem;
    }

    /**
     * @param array $refundOrderItem
     */
    public function setRefundOrderItem(?array $refundOrderItem): void
    {
        $this->refundOrderItem = $refundOrderItem;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}