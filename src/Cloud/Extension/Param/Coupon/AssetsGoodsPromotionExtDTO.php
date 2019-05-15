<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\PromotionInfoExtDTO;

/**
 * 
 * @author Baymax
 * @create Fri Sep 28 18:50:33 CST 2018
 */
class AssetsGoodsPromotionExtDTO implements \JsonSerializable {

    /**
     * 商品SPU级别id
     * @var int
     */
    private $goodsId;

    /**
     * 商品SKU级别id
     * @var int
     */
    private $skuId;

    /**
     * 商品级价格（商品原价：10，限时折扣后：6，商品级价格：6）
     * @var int
     */
    private $price;

    /**
     * 商品实付
     * @var int
     */
    private $realPay;

    /**
     * 数量
     * @var int
     */
    private $num;

    /**
     * 商品类型
     * @var int
     */
    private $type;

    /**
     * 优惠活动信息
     * @var array
     */
    private $applyPromotions;



    /**
     * @return int
     */
    public function getGoodsId(): int
    {
        return $this->goodsId;
    }

    /**
     * @param int $goodsId
     */
    public function setGoodsId(int $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @return int
     */
    public function getSkuId(): int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(int $skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getRealPay(): int
    {
        return $this->realPay;
    }

    /**
     * @param int $realPay
     */
    public function setRealPay(int $realPay): void
    {
        $this->realPay = $realPay;
    }

    /**
     * @return int
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(int $num): void
    {
        $this->num = $num;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return array
     */
    public function getApplyPromotions(): array
    {
        return $this->applyPromotions;
    }

    /**
     * @param array $applyPromotions
     */
    public function setApplyPromotions(array $applyPromotions): void
    {
        $this->applyPromotions = $applyPromotions;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}