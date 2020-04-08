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
     * 不可用原因
     * @var string
     */
    private $unusableReason;

    /**
     * 有效期类型，1：永久有效，2：固定期限
     * @var int
     */
    private $strategyType;

    /**
     * 到期时间，有效期类型为固定期限时必填
     * @var int
     */
    private $expireDate;

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
     * 背景图，为空则默认填充有赞背景图
     * @var string
     */
    private $backgroundImage;

    /**
     * 卡状态
     * @var string
     */
    private $cardStatus;

    /**
     * 卡类型
     * @var string
     */
    private $cardType;

    /**
     * 卡内总余额
     * @var int
     */
    private $balance;

    /**
     * 本金余额
     * @var int
     */
    private $principalDnom;

    /**
     * 赠送金余额
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}