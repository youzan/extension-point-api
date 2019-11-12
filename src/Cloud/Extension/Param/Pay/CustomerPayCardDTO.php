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
     * @var int
     */
    private $expireDate;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}