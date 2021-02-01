<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create 2019-07-23 20:24:20.0
 */
class SubmitPayResultDTO implements \JsonSerializable {

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 支付回单号
     * @var string
     */
    private $acquireNo;



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
    public function getAcquireNo(): ?string
    {
        return $this->acquireNo;
    }

    /**
     * @param string $acquireNo
     */
    public function setAcquireNo(?string $acquireNo): void
    {
        $this->acquireNo = $acquireNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}