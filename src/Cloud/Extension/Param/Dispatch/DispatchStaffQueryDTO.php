<?php

namespace Com\Youzan\Cloud\Extension\Param\Dispatch;



/**
 * 
 * @author Baymax
 * @create 2020-07-27 15:59:04.0
 */
class DispatchStaffQueryDTO implements \JsonSerializable {

    /**
     * 有赞用户id，用户在有赞的唯一id。推荐使用
     * @var string
     */
    private $yzOpenId;

    /**
     * 用户咨询渠道
     * @var string
     */
    private $channel;



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

    /**
     * @return string
     */
    public function getChannel(): ?string
    {
        return $this->channel;
    }

    /**
     * @param string $channel
     */
    public function setChannel(?string $channel): void
    {
        $this->channel = $channel;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}