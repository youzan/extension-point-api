<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create 2019-04-12 20:40:48.0
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
     * 分销员用户标识
     * @var string
     */
    private $yzOpenId;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}