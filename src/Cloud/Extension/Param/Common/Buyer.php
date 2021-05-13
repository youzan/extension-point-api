<?php

namespace Com\Youzan\Cloud\Extension\Param\Common;



/**
 * 
 * @author Baymax
 * @create 2021-05-06 20:06:45.0
 */
class Buyer implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $buyerId;

    /**
     * 
     * @var int
     */
    private $fansType;

    /**
     * 
     * @var int
     */
    private $fansId;

    /**
     * 
     * @var int
     */
    private $yzFansId;

    /**
     * 
     * @var string
     */
    private $touristId;

    /**
     * 
     * @var string
     */
    private $clientIp;

    /**
     * 
     * @var string
     */
    private $buyerPhone;



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
    public function getYzFansId(): ?int
    {
        return $this->yzFansId;
    }

    /**
     * @param int $yzFansId
     */
    public function setYzFansId(?int $yzFansId): void
    {
        $this->yzFansId = $yzFansId;
    }

    /**
     * @return string
     */
    public function getTouristId(): ?string
    {
        return $this->touristId;
    }

    /**
     * @param string $touristId
     */
    public function setTouristId(?string $touristId): void
    {
        $this->touristId = $touristId;
    }

    /**
     * @return string
     */
    public function getClientIp(): ?string
    {
        return $this->clientIp;
    }

    /**
     * @param string $clientIp
     */
    public function setClientIp(?string $clientIp): void
    {
        $this->clientIp = $clientIp;
    }

    /**
     * @return string
     */
    public function getBuyerPhone(): ?string
    {
        return $this->buyerPhone;
    }

    /**
     * @param string $buyerPhone
     */
    public function setBuyerPhone(?string $buyerPhone): void
    {
        $this->buyerPhone = $buyerPhone;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}