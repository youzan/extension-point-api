<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;

use Com\Youzan\Cloud\Extension\Param\Salesman\ExtItemCpsDetail;

/**
 *  
 * @author Baymax
 * @create Tue May 16 21:12:58 CST 2023
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}