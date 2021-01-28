<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2019-11-22 11:42:40.0
 */
class ValueCardExtPayRequest implements \JsonSerializable {

    /**
     * 支付明细号
     * @var string
     */
    private $payDetailNo;

    /**
     * 收单号
     * @var string
     */
    private $acquireNo;

    /**
     * 收单系统上层业务系统单据号,通常为E单号
     * @var string
     */
    private $orderNo;

    /**
     * 支付总金额
     * @var int
     */
    private $payAmount;

    /**
     * 商品信息（商品名称，多商品时为首个商品名称）
     * @var string
     */
    private $goodDesc;

    /**
     * 用户手机号
     * @var string
     */
    private $userPhone;

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
     * 店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 有赞用户开放Id
     * @var string
     */
    private $yzOpenId;

    /**
     * 总部ID
     * @var int
     */
    private $rootKdtId;

    /**
     * NORMAL_PAY 普通支付，FREEZE_PAY 冻结支付
     * @var string
     */
    private $bizType;



    /**
     * @return string
     */
    public function getPayDetailNo(): string
    {
        return $this->payDetailNo;
    }

    /**
     * @param string $payDetailNo
     */
    public function setPayDetailNo(string $payDetailNo): void
    {
        $this->payDetailNo = $payDetailNo;
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
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
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
     * @return string
     */
    public function getUserPhone(): string
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     */
    public function setUserPhone(string $userPhone): void
    {
        $this->userPhone = $userPhone;
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

    /**
     * @return int
     */
    public function getRootKdtId(): int
    {
        return $this->rootKdtId;
    }

    /**
     * @param int $rootKdtId
     */
    public function setRootKdtId(int $rootKdtId): void
    {
        $this->rootKdtId = $rootKdtId;
    }

    /**
     * @return string
     */
    public function getBizType(): string
    {
        return $this->bizType;
    }

    /**
     * @param string $bizType
     */
    public function setBizType(string $bizType): void
    {
        $this->bizType = $bizType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}