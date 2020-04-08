<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 11:29:05.0
 */
class ValueCardCancelGiveRequest implements \JsonSerializable {

    /**
     * 赠送记录ID
     * @var string
     */
    private $giveId;

    /**
     * 赠送人有赞开发ID
     * @var string
     */
    private $buyerId;



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