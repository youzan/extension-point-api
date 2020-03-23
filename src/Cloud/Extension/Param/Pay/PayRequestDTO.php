<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;
use StdClass;

/**
 * 
 * @author Baymax
 * @create Thu Aug 15 11:23:21 CST 2019
 */
class PayRequestDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $mchId;

    /**
     * 
     * @var string
     */
    private $yzTradeNo;

    /**
     * 
     * @var string
     */
    private $tradeType;

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
    private $notifyUrl;

    /**
     * 
     * @var string
     */
    private $clientIp;

    /**
     * 
     * @var string
     */
    private $payChannel;

    /**
     * 
     * @var string
     */
    private $payEnv;

    /**
     * 
     * @var int
     */
    private $timeStart;

    /**
     * 
     * @var int
     */
    private $timeExpired;

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
    public function getNotifyUrl(): string
    {
        return $this->notifyUrl;
    }

    /**
     * @param string $notifyUrl
     */
    public function setNotifyUrl(string $notifyUrl): void
    {
        $this->notifyUrl = $notifyUrl;
    }

    /**
     * @return string
     */
    public function getClientIp(): string
    {
        return $this->clientIp;
    }

    /**
     * @param string $clientIp
     */
    public function setClientIp(string $clientIp): void
    {
        $this->clientIp = $clientIp;
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
     * @return string
     */
    public function getPayEnv(): string
    {
        return $this->payEnv;
    }

    /**
     * @param string $payEnv
     */
    public function setPayEnv(string $payEnv): void
    {
        $this->payEnv = $payEnv;
    }

    /**
     * @return int
     */
    public function getTimeStart(): int
    {
        return $this->timeStart;
    }

    /**
     * @param int $timeStart
     */
    public function setTimeStart(int $timeStart): void
    {
        $this->timeStart = $timeStart;
    }

    /**
     * @return int
     */
    public function getTimeExpired(): int
    {
        return $this->timeExpired;
    }

    /**
     * @param int $timeExpired
     */
    public function setTimeExpired(int $timeExpired): void
    {
        $this->timeExpired = $timeExpired;
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