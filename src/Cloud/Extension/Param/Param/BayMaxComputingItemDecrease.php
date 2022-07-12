<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Model\BayMaxComputingItemIdentity;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 14:25:04 CST 2022
 */
class BayMaxComputingItemDecrease implements \JsonSerializable {

    /**
     *  
     * @var BayMaxComputingItemIdentity
     */
    private $computingItemIdentity;

    /**
     *  
     * @var int
     */
    private $unitPriceDecrease;

    /**
     *  
     * @var int
     */
    private $totalPriceDecrease;

    /**
     *  
     * @var int
     */
    private $promotionUnitPrice;

    /**
     *  
     * @var int
     */
    private $promotionTotalPrice;



    /**
     * @return BayMaxComputingItemIdentity
     */
    public function getComputingItemIdentity(): ?BayMaxComputingItemIdentity
    {
        return $this->computingItemIdentity;
    }

    /**
     * @param BayMaxComputingItemIdentity $computingItemIdentity
     */
    public function setComputingItemIdentity(?BayMaxComputingItemIdentity $computingItemIdentity): void
    {
        $this->computingItemIdentity = $computingItemIdentity;
    }

    /**
     * @return int
     */
    public function getUnitPriceDecrease(): ?int
    {
        return $this->unitPriceDecrease;
    }

    /**
     * @param int $unitPriceDecrease
     */
    public function setUnitPriceDecrease(?int $unitPriceDecrease): void
    {
        $this->unitPriceDecrease = $unitPriceDecrease;
    }

    /**
     * @return int
     */
    public function getTotalPriceDecrease(): ?int
    {
        return $this->totalPriceDecrease;
    }

    /**
     * @param int $totalPriceDecrease
     */
    public function setTotalPriceDecrease(?int $totalPriceDecrease): void
    {
        $this->totalPriceDecrease = $totalPriceDecrease;
    }

    /**
     * @return int
     */
    public function getPromotionUnitPrice(): ?int
    {
        return $this->promotionUnitPrice;
    }

    /**
     * @param int $promotionUnitPrice
     */
    public function setPromotionUnitPrice(?int $promotionUnitPrice): void
    {
        $this->promotionUnitPrice = $promotionUnitPrice;
    }

    /**
     * @return int
     */
    public function getPromotionTotalPrice(): ?int
    {
        return $this->promotionTotalPrice;
    }

    /**
     * @param int $promotionTotalPrice
     */
    public function setPromotionTotalPrice(?int $promotionTotalPrice): void
    {
        $this->promotionTotalPrice = $promotionTotalPrice;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}