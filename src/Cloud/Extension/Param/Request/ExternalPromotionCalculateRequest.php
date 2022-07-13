<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\Model\PromotionSourceIdentity;
use Com\Youzan\Cloud\Extension\Param\Param\Shop;
use Com\Youzan\Cloud\Extension\Param\Param\User;
use Com\Youzan\Cloud\Extension\Param\Param\BayMaxComputingItemPromotion;
use Com\Youzan\Cloud\Extension\Param\Param\Goods;
use Com\Youzan\Cloud\Extension\Param\Param\BayMaxPromotion;
use StdClass;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 18:52:00 CST 2022
 */
class ExternalPromotionCalculateRequest implements \JsonSerializable {

    /**
     *  
     * @var string
     */
    private $currentBizScene;

    /**
     *  
     * @var PromotionSourceIdentity
     */
    private $promotionSourceId;

    /**
     *  
     * @var Shop
     */
    private $shop;

    /**
     *  
     * @var User
     */
    private $user;

    /**
     *  
     * @var array
     */
    private $computingItemPromotions;

    /**
     *  
     * @var array
     */
    private $goods;

    /**
     *  
     * @var array
     */
    private $effectivePromotions;

    /**
     *  
     * @var stdClass
     */
    private $extra;



    /**
     * @return string
     */
    public function getCurrentBizScene(): ?string
    {
        return $this->currentBizScene;
    }

    /**
     * @param string $currentBizScene
     */
    public function setCurrentBizScene(?string $currentBizScene): void
    {
        $this->currentBizScene = $currentBizScene;
    }

    /**
     * @return PromotionSourceIdentity
     */
    public function getPromotionSourceId(): ?PromotionSourceIdentity
    {
        return $this->promotionSourceId;
    }

    /**
     * @param PromotionSourceIdentity $promotionSourceId
     */
    public function setPromotionSourceId(?PromotionSourceIdentity $promotionSourceId): void
    {
        $this->promotionSourceId = $promotionSourceId;
    }

    /**
     * @return Shop
     */
    public function getShop(): ?Shop
    {
        return $this->shop;
    }

    /**
     * @param Shop $shop
     */
    public function setShop(?Shop $shop): void
    {
        $this->shop = $shop;
    }

    /**
     * @return User
     */
    public function getUser(): ?User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(?User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function getComputingItemPromotions(): ?array
    {
        return $this->computingItemPromotions;
    }

    /**
     * @param array $computingItemPromotions
     */
    public function setComputingItemPromotions(?array $computingItemPromotions): void
    {
        $this->computingItemPromotions = $computingItemPromotions;
    }

    /**
     * @return array
     */
    public function getGoods(): ?array
    {
        return $this->goods;
    }

    /**
     * @param array $goods
     */
    public function setGoods(?array $goods): void
    {
        $this->goods = $goods;
    }

    /**
     * @return array
     */
    public function getEffectivePromotions(): ?array
    {
        return $this->effectivePromotions;
    }

    /**
     * @param array $effectivePromotions
     */
    public function setEffectivePromotions(?array $effectivePromotions): void
    {
        $this->effectivePromotions = $effectivePromotions;
    }

    /**
     * @return stdClass
     */
    public function getExtra(): ?stdClass
    {
        return $this->extra;
    }

    /**
     * @param stdClass $extra
     */
    public function setExtra(?stdClass $extra): void
    {
        $this->extra = $extra;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}