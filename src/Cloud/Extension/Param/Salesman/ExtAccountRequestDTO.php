<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create Fri Apr 12 20:40:48 CST 2019
 */
class ExtAccountRequestDTO implements \JsonSerializable {

    /**
     * 分销员uid
     * @var int
     */
    private $buyerId;

    /**
     * 邀请方buyerid
     * @var int
     */
    private $fromBuyerId;

    /**
     * 店铺id 上云用于判断业务身份
     * @var int
     */
    private $kdtId;



    /**
     * @return int
     */
    public function getBuyerId(): int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return int
     */
    public function getFromBuyerId(): int
    {
        return $this->fromBuyerId;
    }

    /**
     * @param int $fromBuyerId
     */
    public function setFromBuyerId(int $fromBuyerId): void
    {
        $this->fromBuyerId = $fromBuyerId;
    }

    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}