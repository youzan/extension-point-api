<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 用户信息
 * @author Baymax
 * @create 2020-06-11 11:03:35.0
 */
class UserInfo implements \JsonSerializable {

    /**
     * 用户id
     * @var string
     */
    private $buyerId;



    /**
     * @return string
     */
    public function getBuyerId(): string
    {
        return $this->buyerId;
    }

    /**
     * @param string $buyerId
     */
    public function setBuyerId(string $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}