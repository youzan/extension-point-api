<?php

namespace Com\Youzan\Cloud\Extension\Param\Delivery;



/**
 * 
 * @author Baymax
 * @create 2019-09-19 19:38:10.0
 */
class LocalDeliveryOrderIdDTO implements \JsonSerializable {

    /**
     * 物流订单号
     * @var string
     */
    private $orderOriginalId;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getOrderOriginalId(): ?string
    {
        return $this->orderOriginalId;
    }

    /**
     * @param string $orderOriginalId
     */
    public function setOrderOriginalId(?string $orderOriginalId): void
    {
        $this->orderOriginalId = $orderOriginalId;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}