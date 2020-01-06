<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2020-01-06 12:52:32.0
 */
class CustomerExtValueCardsQueryRequest implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $buyerId;

    /**
     * 
     * @var string
     */
    private $userPhone;

    /**
     * 
     * @var string
     */
    private $cardType;

    /**
     * 
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
     * @return string
     */
    public function getUserPhone(): string
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     */
    public function setUserPhone(string $userPhone): void
    {
        $this->userPhone = $userPhone;
    }

    /**
     * @return string
     */
    public function getCardType(): string
    {
        return $this->cardType;
    }

    /**
     * @param string $cardType
     */
    public function setCardType(string $cardType): void
    {
        $this->cardType = $cardType;
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