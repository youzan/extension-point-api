<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;

use Com\Youzan\Cloud\Extension\Param\Delivery\LogisticInfoDTO;

/**
 * 
 * @author Baymax
 * @create 2019-09-19 19:38:10.0
 */
class LocalDeliveryLocusDetailDTO implements \JsonSerializable {

    /**
     * 物流订单id，保证唯一
     * @var string
     */
    private $orderOriginalId;

    /**
     * 订单详情状态 1 —&gt; 待接单; 2 —&gt; 待取货|已接单; 3 —&gt; 配送中; 4 —&gt; 已完成; 5 —&gt; 已取消;
     * @var int
     */
    private $orderStatus;

    /**
     * 最后一次状态更新时间
     * @var int
     */
    private $timeStatusUpdate;

    /**
     * 异常原因
     * @var string
     */
    private $abnormalReason;

    /**
     * 骑手编号
     * @var string
     */
    private $riderCode;

    /**
     * 骑手姓名
     * @var string
     */
    private $riderName;

    /**
     * 骑手联系方式
     * @var string
     */
    private $riderPhone;

    /**
     * 骑手经度
     * @var string
     */
    private $riderLng;

    /**
     * 骑手纬度
     * @var string
     */
    private $riderLat;

    /**
     * 
     * @var array
     */
    private $logisticInfo;

    /**
     * 小费,单位为分
     * @var int
     */
    private $tipFee;

    /**
     * 配送费,单位为分
     * @var int
     */
    private $deliveryFee;

    /**
     * 配送距离,单位为米
     * @var int
     */
    private $distance;

    /**
     * 退款违约金，单位为分
     * @var int
     */
    private $deductFee;



    /**
     * @return string
     */
    public function getOrderOriginalId(): string
    {
        return $this->orderOriginalId;
    }

    /**
     * @param string $orderOriginalId
     */
    public function setOrderOriginalId(string $orderOriginalId): void
    {
        $this->orderOriginalId = $orderOriginalId;
    }

    /**
     * @return int
     */
    public function getOrderStatus(): int
    {
        return $this->orderStatus;
    }

    /**
     * @param int $orderStatus
     */
    public function setOrderStatus(int $orderStatus): void
    {
        $this->orderStatus = $orderStatus;
    }

    /**
     * @return int
     */
    public function getTimeStatusUpdate(): int
    {
        return $this->timeStatusUpdate;
    }

    /**
     * @param int $timeStatusUpdate
     */
    public function setTimeStatusUpdate(int $timeStatusUpdate): void
    {
        $this->timeStatusUpdate = $timeStatusUpdate;
    }

    /**
     * @return string
     */
    public function getAbnormalReason(): string
    {
        return $this->abnormalReason;
    }

    /**
     * @param string $abnormalReason
     */
    public function setAbnormalReason(string $abnormalReason): void
    {
        $this->abnormalReason = $abnormalReason;
    }

    /**
     * @return string
     */
    public function getRiderCode(): string
    {
        return $this->riderCode;
    }

    /**
     * @param string $riderCode
     */
    public function setRiderCode(string $riderCode): void
    {
        $this->riderCode = $riderCode;
    }

    /**
     * @return string
     */
    public function getRiderName(): string
    {
        return $this->riderName;
    }

    /**
     * @param string $riderName
     */
    public function setRiderName(string $riderName): void
    {
        $this->riderName = $riderName;
    }

    /**
     * @return string
     */
    public function getRiderPhone(): string
    {
        return $this->riderPhone;
    }

    /**
     * @param string $riderPhone
     */
    public function setRiderPhone(string $riderPhone): void
    {
        $this->riderPhone = $riderPhone;
    }

    /**
     * @return string
     */
    public function getRiderLng(): string
    {
        return $this->riderLng;
    }

    /**
     * @param string $riderLng
     */
    public function setRiderLng(string $riderLng): void
    {
        $this->riderLng = $riderLng;
    }

    /**
     * @return string
     */
    public function getRiderLat(): string
    {
        return $this->riderLat;
    }

    /**
     * @param string $riderLat
     */
    public function setRiderLat(string $riderLat): void
    {
        $this->riderLat = $riderLat;
    }

    /**
     * @return array
     */
    public function getLogisticInfo(): array
    {
        return $this->logisticInfo;
    }

    /**
     * @param array $logisticInfo
     */
    public function setLogisticInfo(array $logisticInfo): void
    {
        $this->logisticInfo = $logisticInfo;
    }

    /**
     * @return int
     */
    public function getTipFee(): int
    {
        return $this->tipFee;
    }

    /**
     * @param int $tipFee
     */
    public function setTipFee(int $tipFee): void
    {
        $this->tipFee = $tipFee;
    }

    /**
     * @return int
     */
    public function getDeliveryFee(): int
    {
        return $this->deliveryFee;
    }

    /**
     * @param int $deliveryFee
     */
    public function setDeliveryFee(int $deliveryFee): void
    {
        $this->deliveryFee = $deliveryFee;
    }

    /**
     * @return int
     */
    public function getDistance(): int
    {
        return $this->distance;
    }

    /**
     * @param int $distance
     */
    public function setDistance(int $distance): void
    {
        $this->distance = $distance;
    }

    /**
     * @return int
     */
    public function getDeductFee(): int
    {
        return $this->deductFee;
    }

    /**
     * @param int $deductFee
     */
    public function setDeductFee(int $deductFee): void
    {
        $this->deductFee = $deductFee;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}