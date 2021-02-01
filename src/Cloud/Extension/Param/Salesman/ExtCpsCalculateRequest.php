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
     * 店铺名称
     * @var string
     */
    private $shopName;

    /**
     * 分销员openId
     * @var string
     */
    private $dsOpenId;

    /**
     * 分销员上级openId
     * @var string
     */
    private $fromDsOpenId;

    /**
     * 客户openId
     * @var string
     */
    private $ctOpenId;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 订单应付金额
     * @var int
     */
    private $pay;

    /**
     * 订单实付金额
     * @var int
     */
    private $realPay;

    /**
     * 邮费
     * @var int
     */
    private $postage;

    /**
     * 是否包邮 1:包邮 0:包邮
     * @var int
     */
    private $isFreePostage;

    /**
     * 
     * @var array
     */
    private $items;

    /**
     * 优惠信息
     * @var ExtPromotionDTO
     */
    private $promotion;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;



    /**
     * @return string
     */
    public function getShopName(): ?string
    {
        return $this->shopName;
    }

    /**
     * @param string $shopName
     */
    public function setShopName(?string $shopName): void
    {
        $this->shopName = $shopName;
    }

    /**
     * @return string
     */
    public function getDsOpenId(): ?string
    {
        return $this->dsOpenId;
    }

    /**
     * @param string $dsOpenId
     */
    public function setDsOpenId(?string $dsOpenId): void
    {
        $this->dsOpenId = $dsOpenId;
    }

    /**
     * @return string
     */
    public function getFromDsOpenId(): ?string
    {
        return $this->fromDsOpenId;
    }

    /**
     * @param string $fromDsOpenId
     */
    public function setFromDsOpenId(?string $fromDsOpenId): void
    {
        $this->fromDsOpenId = $fromDsOpenId;
    }

    /**
     * @return string
     */
    public function getCtOpenId(): ?string
    {
        return $this->ctOpenId;
    }

    /**
     * @param string $ctOpenId
     */
    public function setCtOpenId(?string $ctOpenId): void
    {
        $this->ctOpenId = $ctOpenId;
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
    public function getPay(): ?int
    {
        return $this->pay;
    }

    /**
     * @param int $pay
     */
    public function setPay(?int $pay): void
    {
        $this->pay = $pay;
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
    public function getPostage(): ?int
    {
        return $this->postage;
    }

    /**
     * @param int $postage
     */
    public function setPostage(?int $postage): void
    {
        $this->postage = $postage;
    }

    /**
     * @return int
     */
    public function getIsFreePostage(): ?int
    {
        return $this->isFreePostage;
    }

    /**
     * @param int $isFreePostage
     */
    public function setIsFreePostage(?int $isFreePostage): void
    {
        $this->isFreePostage = $isFreePostage;
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
     * @return ExtPromotionDTO
     */
    public function getPromotion(): ?ExtPromotionDTO
    {
        return $this->promotion;
    }

    /**
     * @param ExtPromotionDTO $promotion
     */
    public function setPromotion(?ExtPromotionDTO $promotion): void
    {
        $this->promotion = $promotion;
    }

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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}