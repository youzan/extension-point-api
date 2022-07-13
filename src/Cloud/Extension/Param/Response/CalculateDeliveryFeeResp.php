<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 *  
 * @author Baymax
 * @create Thu Jan 27 16:49:25 CST 2022
 */
class CalculateDeliveryFeeResp implements \JsonSerializable {

    /**
     * 运费,分
     * @var int
     */
    private $deliveryFee;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}