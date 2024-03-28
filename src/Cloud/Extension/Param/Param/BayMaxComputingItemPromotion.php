<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Model\BayMaxComputingItemIdentity;

use Com\Youzan\Cloud\Extension\Param\Model\PromotionSourceIdentity;
use Com\Youzan\Cloud\Extension\Param\Param\BaseSelectedPromotion;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 18:52:00 CST 2022
 */
class BayMaxComputingItemPromotion implements \JsonSerializable {

    /**
     *  
     * @var BayMaxComputingItemIdentity
     */
    private $computingItemIdentity;

    /**
     *  
     * @var int
     */
    private $num;

    /**
     *  
     * @var int
     */
    private $unitOriginPrice;

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
     *  
     * @var array
     */
    private $promotionSpecIds;

    /**
     *  
     * @var array
     */
    private $promotionSourceIdentities;

    /**
     *  
     * @var array
     */
    private $selectedPromotions;



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
    public function getUnitOriginPrice(): ?int
    {
        return $this->unitOriginPrice;
    }

    /**
     * @param int $unitOriginPrice
     */
    public function setUnitOriginPrice(?int $unitOriginPrice): void
    {
        $this->unitOriginPrice = $unitOriginPrice;
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

    /**
     * @return array
     */
    public function getPromotionSpecIds(): ?array
    {
        return $this->promotionSpecIds;
    }

    /**
     * @param array $promotionSpecIds
     */
    public function setPromotionSpecIds(?array $promotionSpecIds): void
    {
        $this->promotionSpecIds = $promotionSpecIds;
    }

    /**
     * @return array
     */
    public function getPromotionSourceIdentities(): ?array
    {
        return $this->promotionSourceIdentities;
    }

    /**
     * @param array $promotionSourceIdentities
     */
    public function setPromotionSourceIdentities(?array $promotionSourceIdentities): void
    {
        $this->promotionSourceIdentities = $promotionSourceIdentities;
    }

    /**
     * @return array
     */
    public function getSelectedPromotions(): ?array
    {
        return $this->selectedPromotions;
    }

    /**
     * @param array $selectedPromotions
     */
    public function setSelectedPromotions(?array $selectedPromotions): void
    {
        $this->selectedPromotions = $selectedPromotions;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}