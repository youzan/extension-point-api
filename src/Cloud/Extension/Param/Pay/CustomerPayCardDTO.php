<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2019-04-30 11:01:58.0
 */
class CustomerPayCardDTO implements \JsonSerializable {

    /**
     * 卡名称
     * @var string
     */
    private $cardName;

    /**
     * 卡号
     * @var string
     */
    private $cardNo;

    /**
     * 余额（分）
     * @var int
     */
    private $balance;

    /**
     * 使用说明
     * @var string
     */
    private $useSpecification;

    /**
     * 是否可用
     * @var bool
     */
    private $usable;

    /**
     * 不可用原因
     * @var string
     */
    private $unusableReason;

    /**
     * 到期时间
     * @var DateTime
     */
    private $expireDate;

    /**
     * 背景图
     * @var string
     */
    private $backgroundImage;

    /**
     * 卡状态 : init: 初始化; normal: 正常状态; freeze: C端冻结状态; cmpfrz: 完全冻结状态; close: 注销; receding: 退卡中; receded: 已退卡;
     * @var string
     */
    private $cardStatus;

    /**
     * 卡类型 ： BALANCE_CARD：储值余额类型； VALUE_CARD：储值卡； ALL：全部 （默认）
     * @var string
     */
    private $cardType;

    /**
     * 本金余额，单位（分）
     * @var int
     */
    private $principalDnom;

    /**
     * 赠送金余额，单位（分）
     * @var int
     */
    private $sumBonusDnom;



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
     * @return DateTime
     */
    public function getExpireDate(): DateTime
    {
        return $this->expireDate;
    }

    /**
     * @param DateTime $expireDate
     */
    public function setExpireDate(DateTime $expireDate): void
    {
        $this->expireDate = $expireDate;
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