<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;



/**
 * 
 * @author Baymax
 * @create Thu Sep 19 18:12:19 CST 2019
 */
class LocalDeliveryFeeResponseDTO implements \JsonSerializable {

    /**
     * 配送费，单位为分
     * @var int
     */
    private $deliveryFee;

    /**
     * 距离（骑行、步行）
     * @var int
     */
    private $distance;

    /**
     * 资费状态 -1：余额异常；1：余额充足；2：余额不足
     * @var int
     */
    private $feeStatus;



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
    public function getFeeStatus(): int
    {
        return $this->feeStatus;
    }

    /**
     * @param int $feeStatus
     */
    public function setFeeStatus(int $feeStatus): void
    {
        $this->feeStatus = $feeStatus;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}