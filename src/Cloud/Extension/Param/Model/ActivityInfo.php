<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 活动参数
 * @author Baymax
 * @create 2020-12-14 14:49:48.0
 */
class ActivityInfo implements \JsonSerializable {

    /**
     * 活动类型码
     * @var int
     */
    private $appCode;



    /**
     * @return int
     */
    public function getAppCode(): ?int
    {
        return $this->appCode;
    }

    /**
     * @param int $appCode
     */
    public function setAppCode(?int $appCode): void
    {
        $this->appCode = $appCode;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}