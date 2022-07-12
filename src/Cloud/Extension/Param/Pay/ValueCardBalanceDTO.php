<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 储值卡详情
 * @author Baymax
 * @create Thu Feb 10 13:06:13 CST 2022
 */
class ValueCardBalanceDTO implements \JsonSerializable {

    /**
     * 储值卡名称
     * @var string
     */
    private $cardName;

    /**
     * 储值卡卡号
     * @var string
     */
    private $cardNo;

    /**
     * 余额
     * @var int
     */
    private $balance;



    /**
     * @return string
     */
    public function getCardName(): ?string
    {
        return $this->cardName;
    }

    /**
     * @param string $cardName
     */
    public function setCardName(?string $cardName): void
    {
        $this->cardName = $cardName;
    }

    /**
     * @return string
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }

    /**
     * @param string $cardNo
     */
    public function setCardNo(?string $cardNo): void
    {
        $this->cardNo = $cardNo;
    }

    /**
     * @return int
     */
    public function getBalance(): ?int
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     */
    public function setBalance(?int $balance): void
    {
        $this->balance = $balance;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}