<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use DateTime;

/**
 *  
 * @author Baymax
 * @create Mon May 22 15:27:33 CST 2023
 */
class ValueCardExchangeResponse implements \JsonSerializable {

    /**
     * 卡号，兑换成功时(兑换状态为2、3)必填
     * @var string
     */
    private $cardNo;

    /**
     * 兑换状态，2(兑换成功，且是首次被兑换成功) 3(兑换成功，卡已经被兑换过，且是当前用户兑换的) 4(卡已经被兑换过，且是被他人兑换的) 5(卡已被失效，无法兑换) 6(卡因其他原因无法被兑换)
     * @var int
     */
    private $exchangeStatus;

    /**
     * 其他兑换失败原因，exchangeStatus&#x3D;6时，此原因会展示给用户
     * @var string
     */
    private $exchangeFailReason;

    /**
     * 兑换成功的日期，兑换成功(兑换状态为2、3)时必填，毫秒级时间戳
     * @var int
     */
    private $exchangeDate;



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
    public function getExchangeStatus(): ?int
    {
        return $this->exchangeStatus;
    }

    /**
     * @param int $exchangeStatus
     */
    public function setExchangeStatus(?int $exchangeStatus): void
    {
        $this->exchangeStatus = $exchangeStatus;
    }

    /**
     * @return string
     */
    public function getExchangeFailReason(): ?string
    {
        return $this->exchangeFailReason;
    }

    /**
     * @param string $exchangeFailReason
     */
    public function setExchangeFailReason(?string $exchangeFailReason): void
    {
        $this->exchangeFailReason = $exchangeFailReason;
    }

    /**
     * @return int
     */
    public function getExchangeDate(): ?int
    {
        return $this->exchangeDate;
    }

    /**
     * @param int $exchangeDate
     */
    public function setExchangeDate(?int $exchangeDate): void
    {
        $this->exchangeDate = $exchangeDate;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}