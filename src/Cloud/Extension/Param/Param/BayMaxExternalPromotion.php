<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Model\PromotionSourceIdentity;
use Com\Youzan\Cloud\Extension\Param\Model\BayMaxComputingItemIdentity;
use Com\Youzan\Cloud\Extension\Param\Param\BayMaxGoodsPriceDiscountEffect;
use Java\Lang\Integer;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 14:25:04 CST 2022
 */
class BayMaxExternalPromotion implements \JsonSerializable {

    /**
     *  
     * @var PromotionSourceIdentity
     */
    private $promotionSourceIdentity;

    /**
     *  
     * @var string
     */
    private $status;

    /**
     *  
     * @var array
     */
    private $affectComputingItems;

    /**
     *  
     * @var BayMaxGoodsPriceDiscountEffect
     */
    private $goodsPriceDiscountEffect;

    /**
     *  
     * @var array
     */
    private $overlayAppTypes;



    /**
     * @return PromotionSourceIdentity
     */
    public function getPromotionSourceIdentity(): ?PromotionSourceIdentity
    {
        return $this->promotionSourceIdentity;
    }

    /**
     * @param PromotionSourceIdentity $promotionSourceIdentity
     */
    public function setPromotionSourceIdentity(?PromotionSourceIdentity $promotionSourceIdentity): void
    {
        $this->promotionSourceIdentity = $promotionSourceIdentity;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return array
     */
    public function getAffectComputingItems(): ?array
    {
        return $this->affectComputingItems;
    }

    /**
     * @param array $affectComputingItems
     */
    public function setAffectComputingItems(?array $affectComputingItems): void
    {
        $this->affectComputingItems = $affectComputingItems;
    }

    /**
     * @return BayMaxGoodsPriceDiscountEffect
     */
    public function getGoodsPriceDiscountEffect(): ?BayMaxGoodsPriceDiscountEffect
    {
        return $this->goodsPriceDiscountEffect;
    }

    /**
     * @param BayMaxGoodsPriceDiscountEffect $goodsPriceDiscountEffect
     */
    public function setGoodsPriceDiscountEffect(?BayMaxGoodsPriceDiscountEffect $goodsPriceDiscountEffect): void
    {
        $this->goodsPriceDiscountEffect = $goodsPriceDiscountEffect;
    }

    /**
     * @return array
     */
    public function getOverlayAppTypes(): ?array
    {
        return $this->overlayAppTypes;
    }

    /**
     * @param array $overlayAppTypes
     */
    public function setOverlayAppTypes(?array $overlayAppTypes): void
    {
        $this->overlayAppTypes = $overlayAppTypes;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}