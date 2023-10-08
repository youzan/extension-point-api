<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;

use Com\Youzan\Cloud\Extension\Param\Salesman\ExtItemCpsDetail;

/**
 *  
 * @author Baymax
 * @create Thu Sep 14 17:32:55 CST 2023
 */
class ExtCpsCalculateResponse implements \JsonSerializable {

    /**
     * 店铺id（回传）
     * @var int
     */
    private $kdtId;

    /**
     * 订单号（回传）
     * @var string
     */
    private $orderNo;

    /**
     * 订单实付金额（回传）
     * @var int
     */
    private $realPay;

    /**
     * 订单佣金比例 5% — 500，10.5% - 1050，如果订单包含多个商品且佣金比例不同，传 0
     * @var int
     */
    private $iRate;

    /**
     * 订单佣金 （分）
     * @var int
     */
    private $cpsMoney;

    /**
     * 订单邀请比例 5% — 500，10.5% - 1050，如果订单包含多个商品且邀请比例不同，传 0
     * @var int
     */
    private $iiRate;

    /**
     * 订单邀请奖励（分）
     * @var int
     */
    private $bonusMoney;

    /**
     *  
     * @var array
     */
    private $items;

    /**
     * 是否扩展点自定义佣金
     * @var bool
     */
    private $customCpsMoney;

    /**
     * 是否允许佣金大于实付金额，默认不允许
     * @var bool
     */
    private $cpsMoneyMoreThanRealPay;

    /**
     * 邀请单对应的 订单实付金额（分），一般和 realPay 一致，当佣金单已结算，邀请单待结算的场景下，发生退款，bonusRealPay 需要定制方回传，如果不传以 realPay 为准。
     * @var int
     */
    private $bonusRealPay;

    /**
     * 退款佣金计算是否由扩展点自己计算，默认false。true 表示退款时计算佣金会以扩展点返回为准；false 表示按计费时的佣金比例折算退款的佣金
     * @var bool
     */
    private $refundSupportExtend;



    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(?string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return int
     */
    public function getRealPay(): ?int
    {
        return $this->realPay;
    }

    /**
     * @param int $realPay
     */
    public function setRealPay(?int $realPay): void
    {
        $this->realPay = $realPay;
    }

    /**
     * @return int
     */
    public function getIRate(): ?int
    {
        return $this->iRate;
    }

    /**
     * @param int $iRate
     */
    public function setIRate(?int $iRate): void
    {
        $this->iRate = $iRate;
    }

    /**
     * @return int
     */
    public function getCpsMoney(): ?int
    {
        return $this->cpsMoney;
    }

    /**
     * @param int $cpsMoney
     */
    public function setCpsMoney(?int $cpsMoney): void
    {
        $this->cpsMoney = $cpsMoney;
    }

    /**
     * @return int
     */
    public function getIiRate(): ?int
    {
        return $this->iiRate;
    }

    /**
     * @param int $iiRate
     */
    public function setIiRate(?int $iiRate): void
    {
        $this->iiRate = $iiRate;
    }

    /**
     * @return int
     */
    public function getBonusMoney(): ?int
    {
        return $this->bonusMoney;
    }

    /**
     * @param int $bonusMoney
     */
    public function setBonusMoney(?int $bonusMoney): void
    {
        $this->bonusMoney = $bonusMoney;
    }

    /**
     * @return array
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(?array $items): void
    {
        $this->items = $items;
    }

    /**
     * @return bool
     */
    public function getCustomCpsMoney(): ?bool
    {
        return $this->customCpsMoney;
    }

    /**
     * @param bool $customCpsMoney
     */
    public function setCustomCpsMoney(?bool $customCpsMoney): void
    {
        $this->customCpsMoney = $customCpsMoney;
    }

    /**
     * @return bool
     */
    public function getCpsMoneyMoreThanRealPay(): ?bool
    {
        return $this->cpsMoneyMoreThanRealPay;
    }

    /**
     * @param bool $cpsMoneyMoreThanRealPay
     */
    public function setCpsMoneyMoreThanRealPay(?bool $cpsMoneyMoreThanRealPay): void
    {
        $this->cpsMoneyMoreThanRealPay = $cpsMoneyMoreThanRealPay;
    }

    /**
     * @return int
     */
    public function getBonusRealPay(): ?int
    {
        return $this->bonusRealPay;
    }

    /**
     * @param int $bonusRealPay
     */
    public function setBonusRealPay(?int $bonusRealPay): void
    {
        $this->bonusRealPay = $bonusRealPay;
    }

    /**
     * @return bool
     */
    public function getRefundSupportExtend(): ?bool
    {
        return $this->refundSupportExtend;
    }

    /**
     * @param bool $refundSupportExtend
     */
    public function setRefundSupportExtend(?bool $refundSupportExtend): void
    {
        $this->refundSupportExtend = $refundSupportExtend;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}