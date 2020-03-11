<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-08-15 11:23:21.0
 */
class PayResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $yzTradeNo;

    /**
     * 
     * @var string
     */
    private $tradeNo;

    /**
     * 
     * @var string
     */
    private $mchId;

    /**
     * 
     * @var string
     */
    private $tradeType;

    /**
     * 
     * @var int
     */
    private $payTime;

    /**
     * 
     * @var string
     */
    private $tradeStatus;

    /**
     * 
     * @var string
     */
    private $tradeStatusDesc;

    /**
     * 
     * @var string
     */
    private $payChannel;

    /**
     * 
     * @var int
     */
    private $payAmount;

    /**
     * 
     * @var string
     */
    private $payCurrency;

    /**
     * 
     * @var string
     */
    private $attach;

    /**
     * 
     * @var stdClass
     */
    private $extra;



    /**
     * @return string
     */
    public function getYzTradeNo(): string
    {
        return $this->yzTradeNo;
    }

    /**
     * @param string $yzTradeNo
     */
    public function setYzTradeNo(string $yzTradeNo): void
    {
        $this->yzTradeNo = $yzTradeNo;
    }

    /**
     * @return string
     */
    public function getTradeNo(): string
    {
        return $this->tradeNo;
    }

    /**
     * @param string $tradeNo
     */
    public function setTradeNo(string $tradeNo): void
    {
        $this->tradeNo = $tradeNo;
    }

    /**
     * @return string
     */
    public function getMchId(): string
    {
        return $this->mchId;
    }

    /**
     * @param string $mchId
     */
    public function setMchId(string $mchId): void
    {
        $this->mchId = $mchId;
    }

    /**
     * @return string
     */
    public function getTradeType(): string
    {
        return $this->tradeType;
    }

    /**
     * @param string $tradeType
     */
    public function setTradeType(string $tradeType): void
    {
        $this->tradeType = $tradeType;
    }

    /**
     * @return int
     */
    public function getPayTime(): int
    {
        return $this->payTime;
    }

    /**
     * @param int $payTime
     */
    public function setPayTime(int $payTime): void
    {
        $this->payTime = $payTime;
    }

    /**
     * @return string
     */
    public function getTradeStatus(): string
    {
        return $this->tradeStatus;
    }

    /**
     * @param string $tradeStatus
     */
    public function setTradeStatus(string $tradeStatus): void
    {
        $this->tradeStatus = $tradeStatus;
    }

    /**
     * @return string
     */
    public function getTradeStatusDesc(): string
    {
        return $this->tradeStatusDesc;
    }

    /**
     * @param string $tradeStatusDesc
     */
    public function setTradeStatusDesc(string $tradeStatusDesc): void
    {
        $this->tradeStatusDesc = $tradeStatusDesc;
    }

    /**
     * @return string
     */
    public function getPayChannel(): string
    {
        return $this->payChannel;
    }

    /**
     * @param string $payChannel
     */
    public function setPayChannel(string $payChannel): void
    {
        $this->payChannel = $payChannel;
    }

    /**
     * @return int
     */
    public function getPayAmount(): int
    {
        return $this->payAmount;
    }

    /**
     * @param int $payAmount
     */
    public function setPayAmount(int $payAmount): void
    {
        $this->payAmount = $payAmount;
    }

    /**
     * @return string
     */
    public function getPayCurrency(): string
    {
        return $this->payCurrency;
    }

    /**
     * @param string $payCurrency
     */
    public function setPayCurrency(string $payCurrency): void
    {
        $this->payCurrency = $payCurrency;
    }

    /**
     * @return string
     */
    public function getAttach(): string
    {
        return $this->attach;
    }

    /**
     * @param string $attach
     */
    public function setAttach(string $attach): void
    {
        $this->attach = $attach;
    }

    /**
     * @return stdClass
     */
    public function getExtra(): stdClass
    {
        return $this->extra;
    }

    /**
     * @param stdClass $extra
     */
    public function setExtra(stdClass $extra): void
    {
        $this->extra = $extra;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}