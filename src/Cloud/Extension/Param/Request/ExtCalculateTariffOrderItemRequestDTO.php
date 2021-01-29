<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 商品列表
 * @author Baymax
 * @create Thu Dec 24 11:30:20 CST 2020
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}