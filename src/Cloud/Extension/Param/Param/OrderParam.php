<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 * 订单信息
 * @author Baymax
 * @create 2021-07-15 10:38:30.0
 */
class OrderParam implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}