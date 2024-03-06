<?php

namespace Com\Youzan\Cloud\Extension\Param\Price;

use Com\Youzan\Cloud\Extension\Param\Math\BigDecimal;
use Com\Youzan\Cloud\Extension\Param\Price\GuidePriceParam;

/**
 * 价格属性集
 * @author Baymax
 * @create Tue Apr 04 17:41:47 CST 2023
 */
class ItemPriceParam implements \JsonSerializable {

    /**
     * 价格(元)
     * @var string
     */
    private $price;

    /**
     * 成本价(元)
     * @var BigDecimal
     */
    private $costPrice;

    /**
     * 建议售价参数
     * @var GuidePriceParam
     */
    private $guidePriceParam;

    /**
     * 划线价
     * @var string
     */
    private $origin;

    /**
     * SKU最低价
     * @var BigDecimal
     */
    private $totalPrice;



    /**
     * @return string
     */
    public function getPrice(): ?string
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice(?string $price): void
    {
        $this->price = $price;
    }

    /**
     * @return BigDecimal
     */
    public function getCostPrice(): ?BigDecimal
    {
        return $this->costPrice;
    }

    /**
     * @param BigDecimal $costPrice
     */
    public function setCostPrice(?BigDecimal $costPrice): void
    {
        $this->costPrice = $costPrice;
    }

    /**
     * @return GuidePriceParam
     */
    public function getGuidePriceParam(): ?GuidePriceParam
    {
        return $this->guidePriceParam;
    }

    /**
     * @param GuidePriceParam $guidePriceParam
     */
    public function setGuidePriceParam(?GuidePriceParam $guidePriceParam): void
    {
        $this->guidePriceParam = $guidePriceParam;
    }

    /**
     * @return string
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     */
    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }

    /**
     * @return BigDecimal
     */
    public function getTotalPrice(): ?BigDecimal
    {
        return $this->totalPrice;
    }

    /**
     * @param BigDecimal $totalPrice
     */
    public function setTotalPrice(?BigDecimal $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}