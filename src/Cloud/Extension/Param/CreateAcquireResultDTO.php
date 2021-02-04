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
    private $acquireNo;



    /**
     * @return string
     */
    public function getAcquireNo(): string
    {
        return $this->acquireNo;
    }

    /**
     * @param string $acquireNo
     */
    public function setAcquireNo(string $acquireNo): void
    {
        $this->acquireNo = $acquireNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}