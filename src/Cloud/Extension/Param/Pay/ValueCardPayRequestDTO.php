<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2019-04-22 19:16:23.0
 */
class ValueCardPayRequestDTO implements \JsonSerializable {

    /**
     * 储值支付单据号
     * @var string
     */
    private $payOrderNo;

    /**
     * 收单号
     * @var string
     */
    private $acquireNo;

    /**
     * 外部业务号,收单系统上层业务系统单据号
     * @var string
     */
    private $outBizNo;

    /**
     * 支付总金额
     * @var int
     */
    private $payAmount;

    /**
     * 商品信息
     * @var string
     */
    private $goodDesc;

    /**
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 有赞用户ID
     * @var int
     */
    private $buyerId;

    /**
     * 卡号
     * @var array
     */
    private $cardNoList;

    /**
     * 支付发起时间
     * @var int
     */
    private $tradeTime;

    /**
     * 用户标识
     * @var string
     */
    private $yzOpenId;



    /**
     * @return string
     */
    public function getPayOrderNo(): string
    {
        return $this->payOrderNo;
    }

    /**
     * @param string $payOrderNo
     */
    public function setPayOrderNo(string $payOrderNo): void
    {
        $this->payOrderNo = $payOrderNo;
    }

    /**
     * @return string
     */
    public function getAcquireNo(): string
    {
        return $this->acquireNo;
    }

    /**
     * @param string $acquireNo
     */
    public function setAcquireNo(string $acquireNo): void
    {
        $this->acquireNo = $acquireNo;
    }

    /**
     * @return string
     */
    public function getOutBizNo(): string
    {
        return $this->outBizNo;
    }

    /**
     * @param string $outBizNo
     */
    public function setOutBizNo(string $outBizNo): void
    {
        $this->outBizNo = $outBizNo;
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
    public function getGoodDesc(): string
    {
        return $this->goodDesc;
    }

    /**
     * @param string $goodDesc
     */
    public function setGoodDesc(string $goodDesc): void
    {
        $this->goodDesc = $goodDesc;
    }

    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getBuyerId(): int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return array
     */
    public function getCardNoList(): array
    {
        return $this->cardNoList;
    }

    /**
     * @param array $cardNoList
     */
    public function setCardNoList(array $cardNoList): void
    {
        $this->cardNoList = $cardNoList;
    }

    /**
     * @return int
     */
    public function getTradeTime(): int
    {
        return $this->tradeTime;
    }

    /**
     * @param int $tradeTime
     */
    public function setTradeTime(int $tradeTime): void
    {
        $this->tradeTime = $tradeTime;
    }

    /**
     * @return string
     */
    public function getYzOpenId(): string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}