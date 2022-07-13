<?php

namespace Com\Youzan\Cloud\Extension\Param\Dispatch;



/**
 *  
 * @author Baymax
 * @create Thu Feb 24 16:08:09 CST 2022
 */
class DispatchStaffInfoDTO implements \JsonSerializable {

    /**
     * 有赞用户id，用户在有赞的唯一id。推荐使用
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