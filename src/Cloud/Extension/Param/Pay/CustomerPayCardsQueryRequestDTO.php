<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;

use Com\Youzan\Cloud\Extension\Param\Pay\ItemContext;

/**
 * 
 * @author Baymax
 * @create 2019-04-30 10:42:54.0
 */
class CustomerPayCardsQueryRequestDTO implements \JsonSerializable {

    /**
     * 有赞用户ID
     * @var int
     */
    private $buyerId;

    /**
     * 店铺id
     * @var int
     */
    private $kdtId;

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
    public function getShopType(): int
    {
        return $this->shopType;
    }

    /**
     * @param int $shopType
     */
    public function setShopType(int $shopType): void
    {
        $this->shopType = $shopType;
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