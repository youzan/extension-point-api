<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create Tue Mar 24 10:55:54 CST 2020
 */
class ValueCardTakeRequest implements \JsonSerializable {

    /**
     * 领取人有赞开放ID
     * @var string
     */
    private $yzOpenId;

    /**
     * 赠送记录ID（调用方生成，取值自give扩展点返回giveId字段）
     * @var string
     */
    private $giveId;



    /**
     * @return string
     */
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return string
     */
    public function getGiveId(): string
    {
        return $this->giveId;
    }

    /**
     * @param string $giveId
     */
    public function setGiveId(string $giveId): void
    {
        $this->giveId = $giveId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}