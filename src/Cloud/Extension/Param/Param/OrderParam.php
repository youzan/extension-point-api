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
    private $tid;



    /**
     * @return string
     */
    public function getTid(): ?string
    {
        return $this->tid;
    }

    /**
     * @param string $tid
     */
    public function setTid(?string $tid): void
    {
        $this->tid = $tid;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}