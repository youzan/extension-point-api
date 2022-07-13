<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Model\PromotionSourceIdentity;
use Com\Youzan\Cloud\Extension\Param\Model\BayMaxComputingItemIdentity;
use Com\Youzan\Cloud\Extension\Param\Param\BayMaxGoodsPriceDiscountEffect;
use Com\Youzan\Cloud\Extension\Param\Param\GoodsExchangeEffect;
use Com\Youzan\Cloud\Extension\Param\Param\BayMaxPostageDiscountEffect;
use Com\Youzan\Cloud\Extension\Param\Param\GiftSendEffect;
use Com\Youzan\Cloud\Extension\Param\Param\PromotionTipsEffect;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 18:52:00 CST 2022
 */
class BayMaxPromotion implements \JsonSerializable {

    /**
     *  
     * @var string
     */
    private $promotionId;

    /**
     *  
     * @var string
     */
    private $specId;

    /**
     *  
     * @var int
     */
    private $ladderIndex;

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
     * @var GoodsExchangeEffect
     */
    private $goodsExchangeEffect;

    /**
     *  
     * @var BayMaxPostageDiscountEffect
     */
    private $postageDiscountEffect;

    /**
     *  
     * @var GiftSendEffect
     */
    private $giftSendEffect;

    /**
     *  
     * @var PromotionTipsEffect
     */
    private $promotionTipsEffect;



    /**
     * @return string
     */
    public function getPromotionId(): ?string
    {
        return $this->promotionId;
    }

    /**
     * @param string $promotionId
     */
    public function setPromotionId(?string $promotionId): void
    {
        $this->promotionId = $promotionId;
    }

    /**
     * @return string
     */
    public function getSpecId(): ?string
    {
        return $this->specId;
    }

    /**
     * @param string $specId
     */
    public function setSpecId(?string $specId): void
    {
        $this->specId = $specId;
    }

    /**
     * @return int
     */
    public function getLadderIndex(): ?int
    {
        return $this->ladderIndex;
    }

    /**
     * @param int $ladderIndex
     */
    public function setLadderIndex(?int $ladderIndex): void
    {
        $this->ladderIndex = $ladderIndex;
    }

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
     * @return GoodsExchangeEffect
     */
    public function getGoodsExchangeEffect(): ?GoodsExchangeEffect
    {
        return $this->goodsExchangeEffect;
    }

    /**
     * @param GoodsExchangeEffect $goodsExchangeEffect
     */
    public function setGoodsExchangeEffect(?GoodsExchangeEffect $goodsExchangeEffect): void
    {
        $this->goodsExchangeEffect = $goodsExchangeEffect;
    }

    /**
     * @return BayMaxPostageDiscountEffect
     */
    public function getPostageDiscountEffect(): ?BayMaxPostageDiscountEffect
    {
        return $this->postageDiscountEffect;
    }

    /**
     * @param BayMaxPostageDiscountEffect $postageDiscountEffect
     */
    public function setPostageDiscountEffect(?BayMaxPostageDiscountEffect $postageDiscountEffect): void
    {
        $this->postageDiscountEffect = $postageDiscountEffect;
    }

    /**
     * @return GiftSendEffect
     */
    public function getGiftSendEffect(): ?GiftSendEffect
    {
        return $this->giftSendEffect;
    }

    /**
     * @param GiftSendEffect $giftSendEffect
     */
    public function setGiftSendEffect(?GiftSendEffect $giftSendEffect): void
    {
        $this->giftSendEffect = $giftSendEffect;
    }

    /**
     * @return PromotionTipsEffect
     */
    public function getPromotionTipsEffect(): ?PromotionTipsEffect
    {
        return $this->promotionTipsEffect;
    }

    /**
     * @param PromotionTipsEffect $promotionTipsEffect
     */
    public function setPromotionTipsEffect(?PromotionTipsEffect $promotionTipsEffect): void
    {
        $this->promotionTipsEffect = $promotionTipsEffect;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}