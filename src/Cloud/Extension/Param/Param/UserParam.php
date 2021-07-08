<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 * 
 * @author Baymax
 * @create 2021-07-08 11:43:47.0
 */
class UserParam implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $buyerId;

    /**
     * 
     * @var int
     */
    private $fansId;

    /**
     * 
     * @var int
     */
    private $fansType;



    /**
     * @return int
     */
    public function getBuyerId(): ?int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(?int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return int
     */
    public function getFansId(): ?int
    {
        return $this->fansId;
    }

    /**
     * @param int $fansId
     */
    public function setFansId(?int $fansId): void
    {
        $this->fansId = $fansId;
    }

    /**
     * @return int
     */
    public function getFansType(): ?int
    {
        return $this->fansType;
    }

    /**
     * @param int $fansType
     */
    public function setFansType(?int $fansType): void
    {
        $this->fansType = $fansType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}