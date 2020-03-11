<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;

use Com\Youzan\Cloud\Extension\Param\Salesman\ExtItemCpsDetail;

/**
 * 
 * @author Baymax
 * @create 2019-12-12 09:29:19.0
 */
class ExtCpsCalculateResponse implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $kdtId;

    /**
     * 
     * @var string
     */
    private $orderNo;

    /**
     * 
     * @var int
     */
    private $realPay;

    /**
     * 
     * @var int
     */
    private $iRate;

    /**
     * 
     * @var int
     */
    private $cpsMoney;

    /**
     * 
     * @var int
     */
    private $iiRate;

    /**
     * 
     * @var int
     */
    private $bonusMoney;

    /**
     * 
     * @var array
     */
    private $items;



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
    public function getRealPay(): int
    {
        return $this->realPay;
    }

    /**
     * @param int $realPay
     */
    public function setRealPay(int $realPay): void
    {
        $this->realPay = $realPay;
    }

    /**
     * @return int
     */
    public function getIRate(): int
    {
        return $this->iRate;
    }

    /**
     * @param int $iRate
     */
    public function setIRate(int $iRate): void
    {
        $this->iRate = $iRate;
    }

    /**
     * @return int
     */
    public function getCpsMoney(): int
    {
        return $this->cpsMoney;
    }

    /**
     * @param int $cpsMoney
     */
    public function setCpsMoney(int $cpsMoney): void
    {
        $this->cpsMoney = $cpsMoney;
    }

    /**
     * @return int
     */
    public function getIiRate(): int
    {
        return $this->iiRate;
    }

    /**
     * @param int $iiRate
     */
    public function setIiRate(int $iiRate): void
    {
        $this->iiRate = $iiRate;
    }

    /**
     * @return int
     */
    public function getBonusMoney(): int
    {
        return $this->bonusMoney;
    }

    /**
     * @param int $bonusMoney
     */
    public function setBonusMoney(int $bonusMoney): void
    {
        $this->bonusMoney = $bonusMoney;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}