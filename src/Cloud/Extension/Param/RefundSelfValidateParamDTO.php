<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\RefundItemDTO;
use Com\Youzan\Cloud\Extension\Param\OrderItemDTO;

/**
 * 
 * @author Baymax
 * @create 2018-10-08 16:18:50.0
 */
class RefundSelfValidateParamDTO implements \JsonSerializable {

    /**
     * 客户Id（有赞用户ID，在有赞平台账号平台下唯一。)
     * @var string
     */
    private $userId;

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;

    /**
     * 退款原因
     * @var int
     */
    private $reason;

    /**
     * 有赞订单号，E开头+年月日时分秒+随机数，长度24位字母和数字组合
     * @var string
     */
    private $orderNo;

    /**
     * 用户纠纷处理的流程类型+纠纷诉求， 用户纠纷处理的流程类型DisputeFlowTypeEnum的枚举有： BUYER_REFUND_FLOW:退款 - 申请退款/退货流程；SELLER_REFUND_FLOW:退款 - 主动退款流程；ONE_KEY_REFUND_FLOW:退款 - 一键退款流程；RETAIL_STORE_EXCHANGE_GOODS_FLOW:换货 - 零售门店换货；EXCHANGE_GOODS_FLOW:换货-网店换货。 纠纷诉求disputeDemandEnum的枚举有： REFUND_ONLY:仅退款；REFUND_RETURN_GOODS:退货退款；EXCHANGE_GOODS:换货
     * @var string
     */
    private $disputeFlowType;

    /**
     * 退款商品信息
     * @var array
     */
    private $refundOrderItems;

    /**
     * 
     * @var array
     */
    private $orderItems;

    /**
     * 支付方式
     * @var int
     */
    private $payWay;



    /**
     * @return string
     */
    public function getUserId(): ?string
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId(?string $userId): void
    {
        $this->userId = $userId;
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
    public function getReason(): ?int
    {
        return $this->reason;
    }

    /**
     * @param int $reason
     */
    public function setReason(?int $reason): void
    {
        $this->reason = $reason;
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
     * @return string
     */
    public function getDisputeFlowType(): ?string
    {
        return $this->disputeFlowType;
    }

    /**
     * @param string $disputeFlowType
     */
    public function setDisputeFlowType(?string $disputeFlowType): void
    {
        $this->disputeFlowType = $disputeFlowType;
    }

    /**
     * @return array
     */
    public function getRefundOrderItems(): ?array
    {
        return $this->refundOrderItems;
    }

    /**
     * @param array $refundOrderItems
     */
    public function setRefundOrderItems(?array $refundOrderItems): void
    {
        $this->refundOrderItems = $refundOrderItems;
    }

    /**
     * @return array
     */
    public function getOrderItems(): ?array
    {
        return $this->orderItems;
    }

    /**
     * @param array $orderItems
     */
    public function setOrderItems(?array $orderItems): void
    {
        $this->orderItems = $orderItems;
    }

    /**
     * @return int
     */
    public function getPayWay(): ?int
    {
        return $this->payWay;
    }

    /**
     * @param int $payWay
     */
    public function setPayWay(?int $payWay): void
    {
        $this->payWay = $payWay;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}