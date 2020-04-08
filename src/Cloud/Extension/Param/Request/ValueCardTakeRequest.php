<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 10:55:54.0
 */
class ValueCardTakeRequest implements \JsonSerializable {

    /**
     * 领取人有赞开放ID
     * @var string
     */
    private $buyerId;

    /**
     * 赠送记录ID
     * @var string
     */
    private $giveId;



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