<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 用户信息
 * @author Baymax
 * @create Wed Feb 08 10:55:56 CST 2023
 */
class UserInfo implements \JsonSerializable {

    /**
     * 用户ID
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