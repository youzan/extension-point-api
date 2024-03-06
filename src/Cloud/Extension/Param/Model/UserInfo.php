<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 用户信息
 * @author Baymax
 * @create Wed Aug 09 16:47:40 CST 2023
 */
class UserInfo implements \JsonSerializable {

    /**
     * 用户id
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