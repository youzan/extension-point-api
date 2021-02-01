<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;

use Com\Youzan\Cloud\Extension\Param\Request\ExtPointPromotionDTO;

/**
 * 商品列表
 * @author Baymax
 * @create 2020-12-24 11:30:20.0
 */
class ExtCalculateTariffOrderItemRequestDTO implements \JsonSerializable {

    /**
     * 订单条目id
     * @var int
     */
    private $orderItemId;

    /**
     * goodsId
     * @var int
     */
    private $goodsId;

    /**
     * skuId
     * @var int
     */
    private $skuId;

    /**
     * 商品的税费，单位为分
     * @var int
     */
    private $goodsTariff;

    /**
     * 邮费的税费，单位为分
     * @var int
     */
    private $postageTariff;

    /**
     * 海淘商品贸易模式
     * @var string
     */
    private $crossBorderTradeMode;

    /**
     * 商品优惠
     * @var array
     */
    private $promotions;

    /**
     * 商品数量
     * @var int
     */
    private $num;

    /**
     * 商品税率
     * @var string
     */
    private $tariffRate;

    /**
     * 原商品单价
     * @var int
     */
    private $originUnitPrice;



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
    public function getGoodsTariff(): int
    {
        return $this->goodsTariff;
    }

    /**
     * @param int $goodsTariff
     */
    public function setGoodsTariff(int $goodsTariff): void
    {
        $this->goodsTariff = $goodsTariff;
    }

    /**
     * @return int
     */
    public function getPostageTariff(): int
    {
        return $this->postageTariff;
    }

    /**
     * @param int $postageTariff
     */
    public function setPostageTariff(int $postageTariff): void
    {
        $this->postageTariff = $postageTariff;
    }

    /**
     * @return string
     */
    public function getCrossBorderTradeMode(): string
    {
        return $this->crossBorderTradeMode;
    }

    /**
     * @param string $crossBorderTradeMode
     */
    public function setCrossBorderTradeMode(string $crossBorderTradeMode): void
    {
        $this->crossBorderTradeMode = $crossBorderTradeMode;
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
     * @return string
     */
    public function getTariffRate(): string
    {
        return $this->tariffRate;
    }

    /**
     * @param string $tariffRate
     */
    public function setTariffRate(string $tariffRate): void
    {
        $this->tariffRate = $tariffRate;
    }

    /**
     * @return int
     */
    public function getOriginUnitPrice(): int
    {
        return $this->originUnitPrice;
    }

    /**
     * @param int $originUnitPrice
     */
    public function setOriginUnitPrice(int $originUnitPrice): void
    {
        $this->originUnitPrice = $originUnitPrice;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}