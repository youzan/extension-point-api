<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-08-15 11:23:21.0
 */
class PayRequestDTO implements \JsonSerializable {

    /**
     * 有赞商户号
     * @var string
     */
    private $mchId;

    /**
     * 有赞支付单号
     * @var string
     */
    private $yzTradeNo;

    /**
     * 支付方式
     * @var string
     */
    private $tradeType;

    /**
     * 支付总金额（单位为分）
     * @var int
     */
    private $payAmount;

    /**
     * 币种信息，默认为CNY
     * @var string
     */
    private $payCurrency;

    /**
     * 通知地址
     * @var string
     */
    private $notifyUrl;

    /**
     * 终端IP
     * @var string
     */
    private $clientIp;

    /**
     * 支付渠道，同PAY_CHANNEL
     * @var string
     */
    private $payChannel;

    /**
     * 场景信息，例如微商城、微小店，同PAY_ENV
     * @var string
     */
    private $payEnv;

    /**
     * 交易起始时间
     * @var int
     */
    private $timeStart;

    /**
     * 交易结束时间
     * @var int
     */
    private $timeExpired;

    /**
     * 附加数据（需原路返回）
     * @var string
     */
    private $attach;

    /**
     * 特定渠道发起交易时需要的额外参数，见文档
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