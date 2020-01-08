<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 
 * @author Baymax
 * @create 2020-01-06 12:52:32.0
 */
class CustomerExtValueCardsQueryRequest implements \JsonSerializable {

    /**
     * 用户标识
     * @var int
     */
    private $yzOpenId;

    /**
     * 用户手机
     * @var string
     */
    private $userPhone;

    /**
     * 卡类型 BALANCE_CARD: 储值余额类型 VALUE_CARD：储值卡 ALL:全部
     * @var string
     */
    private $cardType;

    /**
     * 店铺标识
     * @var int
     */
    private $kdtId;



    /**
     * @return int
     */
    public function getYzOpenId(): int
    {
        return $this->yzOpenId;
    }

    /**
     * @param int $yzOpenId
     */
    public function setYzOpenId(int $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
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