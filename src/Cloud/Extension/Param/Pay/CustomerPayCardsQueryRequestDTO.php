<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ItemContext;

/**
 *  
 * @author Baymax
 * @create Mon Mar 14 17:35:47 CST 2022
 */
class CustomerPayCardsQueryRequestDTO implements \JsonSerializable {

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
     * 卡类型 ： BALANCE_CARD：储值余额类型； VALUE_CARD：储值卡； ALL：全部 （默认）
     * @var string
     */
    private $cardType;

    /**
     * 店铺类型
     * @var int
     */
    private $shopType;

    /**
     *  
     * @var array
     */
    private $items;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 用户标识
     * @var string
     */
    private $yzOpenId;



    /**
     * @return int
     */
    public function getBuyerId(): ?int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     */
    public function setBuyerId(?int $buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    /**
     * @return string
     */
    public function getUserPhone(): ?string
    {
        return $this->userPhone;
    }

    /**
     * @param string $userPhone
     */
    public function setUserPhone(?string $userPhone): void
    {
        $this->userPhone = $userPhone;
    }

    /**
     * @return string
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    /**
     * @param string $cardType
     */
    public function setCardType(?string $cardType): void
    {
        $this->cardType = $cardType;
    }

    /**
     * @return int
     */
    public function getShopType(): ?int
    {
        return $this->shopType;
    }

    /**
     * @param int $shopType
     */
    public function setShopType(?int $shopType): void
    {
        $this->shopType = $shopType;
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
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}