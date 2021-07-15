<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 * 用户信息
 * @author Baymax
 * @create 2021-07-08 11:43:47.0
 */
class UserParam implements \JsonSerializable {

    /**
     * 用户ID
     * @var int
     */
    private $buyerId;



    /**
     * @return int
     */
    public function getBuyerId(): ?int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(?int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}