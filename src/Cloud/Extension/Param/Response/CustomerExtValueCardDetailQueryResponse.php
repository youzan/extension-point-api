<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2020-03-24 11:28:49.0
 */
class CustomerExtValueCardDetailQueryResponse implements \JsonSerializable {

    /**
     * 使用说明
     * @var string
     */
    private $useSpecification;

    /**
     * 是否可用，true:可用，false:不可用
     * @var bool
     */
    private $usable;

    /**
     * 不可用原因，当usable字段为不可用时必填
     * @var string
     */
    private $unusableReason;

    /**
     * 有效期类型，1：永久有效，2：固定期限
     * @var int
     */
    private $strategyType;

    /**
     * 到期时间，有效期类型为固定期限时必填,Unix毫秒时间类型
     * @var int
     */
    private $expireDate;

    /**
     * 卡名称
     * @var string
     */
    private $cardName;

    /**
     * 卡号（调用方生成，总长度不得大于24）
     * @var string
     */
    private $cardNo;

    /**
     * 背景图（http全路径,总长度不得大于225）
     * @var string
     */
    private $backgroundImage;

    /**
     * 卡状态：INIT:初始化,NORMAL:正常,CFREEZE:冻结,CLOSE:已注销,RECEDING:退卡处理中,RECEDED:已退卡
     * @var string
     */
    private $cardStatus;

    /**
     * 卡类型 BALANCE_CARD: 储值余额类型 VALUE_CARD：储值卡 ALL:全部
     * @var string
     */
    private $cardType;

    /**
     * 卡内总余额（分）
     * @var int
     */
    private $balance;

    /**
     * 本金余额（分）
     * @var int
     */
    private $principalDnom;

    /**
     * 赠送金余额（分）
     * @var int
     */
    private $sumBonusDnom;

    /**
     * 是否支持充值，true：支持，false：不支持
     * @var bool
     */
    private $needRecharge;



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
    public function getStrategyType(): int
    {
        return $this->strategyType;
    }

    /**
     * @param int $strategyType
     */
    public function setStrategyType(int $strategyType): void
    {
        $this->strategyType = $strategyType;
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

    /**
     * @return bool
     */
    public function getNeedRecharge(): bool
    {
        return $this->needRecharge;
    }

    /**
     * @param bool $needRecharge
     */
    public function setNeedRecharge(bool $needRecharge): void
    {
        $this->needRecharge = $needRecharge;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}