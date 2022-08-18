<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Model\ComputingItemIdentity;

/**
 * 当promotionLevel返回“order”,  需要返回的订单级别优惠减免结果
 * @author Baymax
 * @create Thu Mar 10 20:03:22 CST 2022
 */
class OrderPromotionComputeResp implements \JsonSerializable {

    /**
     * 订单总优惠金额，需大于0，单位（分）
     * @var int
     */
    private $totalDecrease;

    /**
     * 订单优惠影响的商品列表
     * @var array
     */
    private $effectItems;



    /**
     * @return int
     */
    public function getTotalDecrease(): ?int
    {
        return $this->totalDecrease;
    }

    /**
     * @param int $totalDecrease
     */
    public function setTotalDecrease(?int $totalDecrease): void
    {
        $this->totalDecrease = $totalDecrease;
    }

    /**
     * @return array
     */
    public function getEffectItems(): ?array
    {
        return $this->effectItems;
    }

    /**
     * @param array $effectItems
     */
    public function setEffectItems(?array $effectItems): void
    {
        $this->effectItems = $effectItems;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}