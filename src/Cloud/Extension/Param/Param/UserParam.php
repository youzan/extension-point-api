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
     * @var string
     */
    private $yzOpenId;



    /**
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}