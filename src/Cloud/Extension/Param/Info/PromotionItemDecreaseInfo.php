<?php

namespace Com\Youzan\Cloud\Extension\Param\Info;

use Com\Youzan\Cloud\Extension\Param\Model\ComputingItemIdentity;

/**
 * 商品优惠减免条目信息
 * @author Baymax
 * @create 2021-07-08 11:43:47.0
 */
class PromotionItemDecreaseInfo implements \JsonSerializable {

    /**
     * 商品条目
     * @var ComputingItemIdentity
     */
    private $computingItemIdentity;

    /**
     * 减免金额，单位（分）
     * @var int
     */
    private $decrease;



    /**
     * @return ComputingItemIdentity
     */
    public function getComputingItemIdentity(): ?ComputingItemIdentity
    {
        return $this->computingItemIdentity;
    }

    /**
     * @param ComputingItemIdentity $computingItemIdentity
     */
    public function setComputingItemIdentity(?ComputingItemIdentity $computingItemIdentity): void
    {
        $this->computingItemIdentity = $computingItemIdentity;
    }

    /**
     * @return int
     */
    public function getDecrease(): ?int
    {
        return $this->decrease;
    }

    /**
     * @param int $decrease
     */
    public function setDecrease(?int $decrease): void
    {
        $this->decrease = $decrease;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}