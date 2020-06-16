<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 用户信息
 * @author Baymax
 * @create Thu Jun 11 11:03:35 CST 2020
 */
class UserInfo implements \JsonSerializable {

    /**
     * 用户id
     * @var int
     */
    private $buyerId;



    /**
     * @return int
     */
    public function getBuyerId(): int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}