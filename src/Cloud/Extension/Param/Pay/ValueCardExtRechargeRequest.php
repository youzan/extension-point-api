<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 
 * @author Baymax
 * @create 2019-11-22 11:54:57.0
 */
class ValueCardExtRechargeRequest implements \JsonSerializable {

    /**
     * 业务充值单号，以此做幂等
     * @var string
     */
    private $rechargeNo;

    /**
     * 收单号（退款用）
     * @var string
     */
    private $acquireNo;

    /**
     * 卡号  注：单卡场景下，可能为空，此时业务方需要自调用开卡接口
     * @var string
     */
    private $cardNo;

    /**
     * 实际支付金额，单位（分）
     * @var int
     */
    private $factDnom;

    /**
     * 充值本金金额，单位（分）
     * @var int
     */
    private $principalDnom;

    /**
     * 充值赠送金金额，单位（分）
     * @var int
     */
    private $sumBonusDnom;

    /**
     * 有赞用户ID
     * @var int
     */
    private $buyerId;

    /**
     * 用户手机号
     * @var string
     */
    private $userPhone;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 充值的时候使用的 支付方式
     * @var string
     */
    private $payMethod;

    /**
     * 支付渠道
     * @var int
     */
    private $payChannel;

    /**
     * 标记支付方式
     * @var string
     */
    private $markPayMethod;

    /**
     * 礼包号
     * @var string
     */
    private $giftPackId;

    /**
     * 礼包版本   默认：V 1.0
     * @var string
     */
    private $giftPackVersion;

    /**
     * 描述，说明, 最大120字, 不做校验默认空字符串
     * @var string
     */
    private $remark;



    /**
     * @return string
     */
    public function getRechargeNo(): string
    {
        return $this->rechargeNo;
    }

    /**
     * @param string $rechargeNo
     */
    public function setRechargeNo(string $rechargeNo): void
    {
        $this->rechargeNo = $rechargeNo;
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
    public function getFactDnom(): int
    {
        return $this->factDnom;
    }

    /**
     * @param int $factDnom
     */
    public function setFactDnom(int $factDnom): void
    {
        $this->factDnom = $factDnom;
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
    public function getPayMethod(): string
    {
        return $this->payMethod;
    }

    /**
     * @param string $payMethod
     */
    public function setPayMethod(string $payMethod): void
    {
        $this->payMethod = $payMethod;
    }

    /**
     * @return int
     */
    public function getPayChannel(): int
    {
        return $this->payChannel;
    }

    /**
     * @param int $payChannel
     */
    public function setPayChannel(int $payChannel): void
    {
        $this->payChannel = $payChannel;
    }

    /**
     * @return string
     */
    public function getMarkPayMethod(): string
    {
        return $this->markPayMethod;
    }

    /**
     * @param string $markPayMethod
     */
    public function setMarkPayMethod(string $markPayMethod): void
    {
        $this->markPayMethod = $markPayMethod;
    }

    /**
     * @return string
     */
    public function getGiftPackId(): string
    {
        return $this->giftPackId;
    }

    /**
     * @param string $giftPackId
     */
    public function setGiftPackId(string $giftPackId): void
    {
        $this->giftPackId = $giftPackId;
    }

    /**
     * @return string
     */
    public function getGiftPackVersion(): string
    {
        return $this->giftPackVersion;
    }

    /**
     * @param string $giftPackVersion
     */
    public function setGiftPackVersion(string $giftPackVersion): void
    {
        $this->giftPackVersion = $giftPackVersion;
    }

    /**
     * @return string
     */
    public function getRemark(): string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark(string $remark): void
    {
        $this->remark = $remark;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}