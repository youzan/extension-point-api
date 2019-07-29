<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 
 * @author Baymax
 * @create 2019-07-29 20:50:49.0
 */
class CreateAcquireResultDTO implements \JsonSerializable {

    /**
     * 支付回单号
     * @var string
     */
    private $payId;



    /**
     * @return string
     */
    public function getPayId(): string
    {
        return $this->payId;
    }

    /**
     * @param string $payId
     */
    public function setPayId(string $payId): void
    {
        $this->payId = $payId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}