<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;



/**
 *  
 * @author Baymax
 * @create Thu Jan 13 23:12:22 CST 2022
 */
class LocalDeliveryPreOrderResponseDTO implements \JsonSerializable {

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
     * 服务商订单号
     * @var string
     */
    private $thirdOrderId;



    /**
     * @return int
     */
    public function getDeliveryFee(): ?int
    {
        return $this->deliveryFee;
    }

    /**
     * @param int $deliveryFee
     */
    public function setDeliveryFee(?int $deliveryFee): void
    {
        $this->deliveryFee = $deliveryFee;
    }

    /**
     * @return int
     */
    public function getDistance(): ?int
    {
        return $this->distance;
    }

    /**
     * @param int $distance
     */
    public function setDistance(?int $distance): void
    {
        $this->distance = $distance;
    }

    /**
     * @return string
     */
    public function getThirdOrderId(): ?string
    {
        return $this->thirdOrderId;
    }

    /**
     * @param string $thirdOrderId
     */
    public function setThirdOrderId(?string $thirdOrderId): void
    {
        $this->thirdOrderId = $thirdOrderId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}