<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;



/**
 * 
 * @author Baymax
 * @create 2019-12-12 09:29:19.0
 */
class ExtItemCpsDetail implements \JsonSerializable {

    /**
     * 商品id（回传）
     * @var int
     */
    private $itemId;

    /**
     * 规格id（回传）
     * @var int
     */
    private $skuId;

    /**
     * 商品数量（回传）
     * @var int
     */
    private $num;

    /**
     * 商品实付金额（回传）
     * @var int
     */
    private $realPay;

    /**
     * 商品佣金（分）&#x3D; realPay * iRate
     * @var int
     */
    private $cpsMoney;

    /**
     * 商品佣金比例
     * @var int
     */
    private $iRate;

    /**
     * 商品邀请奖励（分）&#x3D; realPay * iiRate
     * @var int
     */
    private $bonusMoney;

    /**
     * 商品邀请比例
     * @var int
     */
    private $iiRate;



    /**
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(?int $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getSkuId(): ?int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(?int $skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * @return int
     */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(?int $num): void
    {
        $this->num = $num;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}