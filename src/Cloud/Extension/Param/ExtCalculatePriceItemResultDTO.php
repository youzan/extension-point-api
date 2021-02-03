<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\ExtPromotionCoreResultDTO;

/**
 * 商品级优惠信息
 * @author Baymax
 * @create 2019-08-01 11:46:51.0
 */
class ExtCalculatePriceItemResultDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $orderItemId;

    /**
     * 
     * @var array
     */
    private $promotions;



    /**
     * @return int
     */
    public function getOrderItemId(): int
    {
        return $this->orderItemId;
    }

    /**
     * @param int $orderItemId
     */
    public function setOrderItemId(int $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return array
     */
    public function getPromotions(): array
    {
        return $this->promotions;
    }

    /**
     * @param array $promotions
     */
    public function setPromotions(array $promotions): void
    {
        $this->promotions = $promotions;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}