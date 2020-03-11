<?php

namespace Com\Youzan\Cloud\Extension\Param\Salesman;

use Com\Youzan\Cloud\Extension\Param\Salesman\ExtOrderItemDTO;
use Com\Youzan\Cloud\Extension\Param\Salesman\ExtPromotionDTO;

/**
 * 
 * @author Baymax
 * @create 2019-12-12 09:29:19.0
 */
class ExtCpsCalculateRequest implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $shopName;

    /**
     * 
     * @var int
     */
    private $dsOpenId;

    /**
     * 
     * @var int
     */
    private $fromDsOpenId;

    /**
     * 
     * @var int
     */
    private $ctOpenId;

    /**
     * 
     * @var string
     */
    private $orderNo;

    /**
     * 
     * @var int
     */
    private $pay;

    /**
     * 
     * @var int
     */
    private $realPay;

    /**
     * 
     * @var int
     */
    private $postage;

    /**
     * 
     * @var int
     */
    private $isFreePostage;

    /**
     * 
     * @var array
     */
    private $items;

    /**
     * 
     * @var ExtPromotionDTO
     */
    private $promotion;

    /**
     * 
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getShopName(): string
    {
        return $this->shopName;
    }

    /**
     * @param string $shopName
     */
    public function setShopName(string $shopName): void
    {
        $this->shopName = $shopName;
    }

    /**
     * @return int
     */
    public function getDsOpenId(): int
    {
        return $this->dsOpenId;
    }

    /**
     * @param int $dsOpenId
     */
    public function setDsOpenId(int $dsOpenId): void
    {
        $this->dsOpenId = $dsOpenId;
    }

    /**
     * @return int
     */
    public function getFromDsOpenId(): int
    {
        return $this->fromDsOpenId;
    }

    /**
     * @param int $fromDsOpenId
     */
    public function setFromDsOpenId(int $fromDsOpenId): void
    {
        $this->fromDsOpenId = $fromDsOpenId;
    }

    /**
     * @return int
     */
    public function getCtOpenId(): int
    {
        return $this->ctOpenId;
    }

    /**
     * @param int $ctOpenId
     */
    public function setCtOpenId(int $ctOpenId): void
    {
        $this->ctOpenId = $ctOpenId;
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
    public function getPay(): int
    {
        return $this->pay;
    }

    /**
     * @param int $pay
     */
    public function setPay(int $pay): void
    {
        $this->pay = $pay;
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
    public function getPostage(): int
    {
        return $this->postage;
    }

    /**
     * @param int $postage
     */
    public function setPostage(int $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return int
     */
    public function getIsFreePostage(): int
    {
        return $this->isFreePostage;
    }

    /**
     * @param int $isFreePostage
     */
    public function setIsFreePostage(int $isFreePostage): void
    {
        $this->isFreePostage = $isFreePostage;
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

    /**
     * @return ExtPromotionDTO
     */
    public function getPromotion(): ExtPromotionDTO
    {
        return $this->promotion;
    }

    /**
     * @param ExtPromotionDTO $promotion
     */
    public function setPromotion(ExtPromotionDTO $promotion): void
    {
        $this->promotion = $promotion;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}