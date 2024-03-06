<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 * 订单信息
 * @author Baymax
 * @create Wed Feb 16 10:43:05 CST 2022
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