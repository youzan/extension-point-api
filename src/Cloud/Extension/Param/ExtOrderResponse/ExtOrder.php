<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtOrderResponse;

use Com\Youzan\Cloud\Extension\Param\ExtOrderResponse\ExtPayInfo;
use Com\Youzan\Cloud\Extension\Param\ExtOrderResponse\ExtOrderItem;

/**
 * 订单数据集合
 * @author Baymax
 * @create Wed Jan 31 11:10:43 CST 2024
 */
class ExtOrder implements \JsonSerializable {

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺。
     * @var int
     */
    private $kdtId;

    /**
     * 外部单据号
     * @var string
     */
    private $bizNo;

    /**
     * 单据类型:1.订单,2.退款单,3.无原单退款单
     * @var int
     */
    private $bizType;

    /**
     * 关联的外部单据号，例如退款单关联订单，则为外部订单号
     * @var string
     */
    private $relationBizNo;

    /**
     * 关联的外部单据类型,如果没有关联单据,则和当前单据类型保持一致:1.订单,2.退款单,3.无原单退款单
     * @var int
     */
    private $relationBizType;

    /**
     * 单据状态：正向订单：20.已支付,30.待接单,40.已接单,50.待发货,60.已发货,70.待收货,80.已收货,99.已关闭,100.已完成; 逆向订单：35.卖家已经确认收货，等待卖家发货, 60.售后成功
     * @var int
     */
    private $status;

    /**
     * 有赞客户id，客户在有赞的唯一id，如果单据未关联具体客户，该字段可不返回，导购系统会以推送接口记录的下单客户id为准，云接口：youzan.guide.order.operate.receive:1.0.0
     * @var string
     */
    private $yzOpenID;

    /**
     * 物流方式:0.快递, 1.自提, 2.同城配送, 9.无需物流快递；无原单退款单以及订单必传
     * @var int
     */
    private $logisticsType;

    /**
     * 单据创建时间，单位:毫秒
     * @var int
     */
    private $orderTime;

    /**
     * 单据发生时间，单位:毫秒
     * @var int
     */
    private $bizFinishAt;

    /**
     * 退款诉求(退货方式): 1.仅退款、2.退货退款，3.换货；仅退款单和无原单退款单传，且必传
     * @var int
     */
    private $demand;

    /**
     * 退款原因描述；仅退款单和无原单退款单传，且必传
     * @var string
     */
    private $reasonDesc;

    /**
     * 买家备注信息
     * @var string
     */
    private $remark;

    /**
     * 支付信息
     * @var array
     */
    private $payInfos;

    /**
     * 单据明细
     * @var array
     */
    private $orderItems;



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
    public function getBizNo(): ?string
    {
        return $this->bizNo;
    }

    /**
     * @param string $bizNo
     */
    public function setBizNo(?string $bizNo): void
    {
        $this->bizNo = $bizNo;
    }

    /**
     * @return int
     */
    public function getBizType(): ?int
    {
        return $this->bizType;
    }

    /**
     * @param int $bizType
     */
    public function setBizType(?int $bizType): void
    {
        $this->bizType = $bizType;
    }

    /**
     * @return string
     */
    public function getRelationBizNo(): ?string
    {
        return $this->relationBizNo;
    }

    /**
     * @param string $relationBizNo
     */
    public function setRelationBizNo(?string $relationBizNo): void
    {
        $this->relationBizNo = $relationBizNo;
    }

    /**
     * @return int
     */
    public function getRelationBizType(): ?int
    {
        return $this->relationBizType;
    }

    /**
     * @param int $relationBizType
     */
    public function setRelationBizType(?int $relationBizType): void
    {
        $this->relationBizType = $relationBizType;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getYzOpenID(): ?string
    {
        return $this->yzOpenID;
    }

    /**
     * @param string $yzOpenID
     */
    public function setYzOpenID(?string $yzOpenID): void
    {
        $this->yzOpenID = $yzOpenID;
    }

    /**
     * @return int
     */
    public function getLogisticsType(): ?int
    {
        return $this->logisticsType;
    }

    /**
     * @param int $logisticsType
     */
    public function setLogisticsType(?int $logisticsType): void
    {
        $this->logisticsType = $logisticsType;
    }

    /**
     * @return int
     */
    public function getOrderTime(): ?int
    {
        return $this->orderTime;
    }

    /**
     * @param int $orderTime
     */
    public function setOrderTime(?int $orderTime): void
    {
        $this->orderTime = $orderTime;
    }

    /**
     * @return int
     */
    public function getBizFinishAt(): ?int
    {
        return $this->bizFinishAt;
    }

    /**
     * @param int $bizFinishAt
     */
    public function setBizFinishAt(?int $bizFinishAt): void
    {
        $this->bizFinishAt = $bizFinishAt;
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
     * @return array
     */
    public function getPayInfos(): ?array
    {
        return $this->payInfos;
    }

    /**
     * @param array $payInfos
     */
    public function setPayInfos(?array $payInfos): void
    {
        $this->payInfos = $payInfos;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}