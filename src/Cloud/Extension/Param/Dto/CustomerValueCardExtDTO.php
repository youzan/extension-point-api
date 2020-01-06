<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2020-01-06 12:52:32.0
 */
class CustomerValueCardExtDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $useSpecification;

    /**
     * 
     * @var bool
     */
    private $usable;

    /**
     * 
     * @var string
     */
    private $unusableReason;

    /**
     * 
     * @var int
     */
    private $expireDate;

    /**
     * 
     * @var string
     */
    private $cardName;

    /**
     * 
     * @var string
     */
    private $cardNo;

    /**
     * 
     * @var string
     */
    private $backgroundImage;

    /**
     * 
     * @var string
     */
    private $cardStatus;

    /**
     * 
     * @var string
     */
    private $cardType;

    /**
     * 
     * @var int
     */
    private $balance;

    /**
     * 
     * @var int
     */
    private $principalDnom;

    /**
     * 
     * @var int
     */
    private $sumBonusDnom;



    /**
     * @return string
     */
    public function getUseSpecification(): string
    {
        return $this->useSpecification;
    }

    /**
     * @param string $useSpecification
     */
    public function setUseSpecification(string $useSpecification): void
    {
        $this->useSpecification = $useSpecification;
    }

    /**
     * @return bool
     */
    public function getUsable(): bool
    {
        return $this->usable;
    }

    /**
     * @param bool $usable
     */
    public function setUsable(bool $usable): void
    {
        $this->usable = $usable;
    }

    /**
     * @return string
     */
    public function getUnusableReason(): string
    {
        return $this->unusableReason;
    }

    /**
     * @param string $unusableReason
     */
    public function setUnusableReason(string $unusableReason): void
    {
        $this->unusableReason = $unusableReason;
    }

    /**
     * @return int
     */
    public function getExpireDate(): int
    {
        return $this->expireDate;
    }

    /**
     * @param int $expireDate
     */
    public function setExpireDate(int $expireDate): void
    {
        $this->expireDate = $expireDate;
    }

    /**
     * @return string
     */
    public function getCardName(): string
    {
        return $this->cardName;
    }

    /**
     * @param string $cardName
     */
    public function setCardName(string $cardName): void
    {
        $this->cardName = $cardName;
    }

    /**
     * @return string
     */
    public function getCardNo(): string
    {
        return $this->cardNo;
    }

    /**
     * @param string $cardNo
     */
    public function setCardNo(string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return string
     */
    public function getBackgroundImage(): string
    {
        return $this->backgroundImage;
    }

    /**
     * @param string $backgroundImage
     */
    public function setBackgroundImage(string $backgroundImage): void
    {
        $this->backgroundImage = $backgroundImage;
    }

    /**
     * @return string
     */
    public function getCardStatus(): string
    {
        return $this->cardStatus;
    }

    /**
     * @param string $cardStatus
     */
    public function setCardStatus(string $cardStatus): void
    {
        $this->cardStatus = $cardStatus;
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
    public function getBalance(): int
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     */
    public function setBalance(int $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * @return int
     */
    public function getPrincipalDnom(): int
    {
        return $this->principalDnom;
    }

    /**
     * @param int $principalDnom
     */
    public function setPrincipalDnom(int $principalDnom): void
    {
        $this->principalDnom = $principalDnom;
    }

    /**
     * @return int
     */
    public function getSumBonusDnom(): int
    {
        return $this->sumBonusDnom;
    }

    /**
     * @param int $sumBonusDnom
     */
    public function setSumBonusDnom(int $sumBonusDnom): void
    {
        $this->sumBonusDnom = $sumBonusDnom;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}