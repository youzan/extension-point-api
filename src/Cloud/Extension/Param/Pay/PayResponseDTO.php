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
    private $outTradeNo;

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
    private $timeEnd;

    /**
     * 
     * @var string
     */
    private $tradeState;

    /**
     * 
     * @var string
     */
    private $tradeStateDesc;

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
    public function getOutTradeNo(): string
    {
        return $this->outTradeNo;
    }

    /**
     * @param string $outTradeNo
     */
    public function setOutTradeNo(string $outTradeNo): void
    {
        $this->outTradeNo = $outTradeNo;
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
    public function getTimeEnd(): int
    {
        return $this->timeEnd;
    }

    /**
     * @param int $timeEnd
     */
    public function setTimeEnd(int $timeEnd): void
    {
        $this->timeEnd = $timeEnd;
    }

    /**
     * @return string
     */
    public function getTradeState(): string
    {
        return $this->tradeState;
    }

    /**
     * @param string $tradeState
     */
    public function setTradeState(string $tradeState): void
    {
        $this->tradeState = $tradeState;
    }

    /**
     * @return string
     */
    public function getTradeStateDesc(): string
    {
        return $this->tradeStateDesc;
    }

    /**
     * @param string $tradeStateDesc
     */
    public function setTradeStateDesc(string $tradeStateDesc): void
    {
        $this->tradeStateDesc = $tradeStateDesc;
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