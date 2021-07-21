<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 * 用户信息
 * @author Baymax
 * @create 2021-07-08 11:43:47.0
 */
class UserParam implements \JsonSerializable {

    /**
     * 微信open_id
     * @var int
     */
    private $yzOpenId;



    /**
     * @return int
     */
    public function getYzOpenId(): ?int
    {
        return $this->yzOpenId;
    }

    /**
     * @param int $yzOpenId
     */
    public function setYzOpenId(?int $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}