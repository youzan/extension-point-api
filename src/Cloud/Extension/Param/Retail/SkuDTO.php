<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\SpecDTO;

/**
 * 规格信息(无规格商品可以为空)
 * @author Baymax
 * @create 2019-07-22 20:36:12.0
 */
class SkuDTO implements \JsonSerializable {

    /**
     * 建议零售价
     * @var string
     */
    private $retailPrice;

    /**
     * 规格编码
     * @var string
     */
    private $skuCode;

    /**
     * 规格条码
     * @var string
     */
    private $skuNo;

    /**
     * 额外条码
     * @var array
     */
    private $barCodes;

    /**
     * 
     * @var array
     */
    private $specs;



    /**
     * @return string
     */
    public function getRetailPrice(): string
    {
        return $this->retailPrice;
    }

    /**
     * @param string $retailPrice
     */
    public function setRetailPrice(string $retailPrice): void
    {
        $this->retailPrice = $retailPrice;
    }

    /**
     * @return string
     */
    public function getSkuCode(): string
    {
        return $this->skuCode;
    }

    /**
     * @param string $skuCode
     */
    public function setSkuCode(string $skuCode): void
    {
        $this->skuCode = $skuCode;
    }

    /**
     * @return string
     */
    public function getSkuNo(): string
    {
        return $this->skuNo;
    }

    /**
     * @param string $skuNo
     */
    public function setSkuNo(string $skuNo): void
    {
        $this->skuNo = $skuNo;
    }

    /**
     * @return array
     */
    public function getBarCodes(): array
    {
        return $this->barCodes;
    }

    /**
     * @param array $barCodes
     */
    public function setBarCodes(array $barCodes): void
    {
        $this->barCodes = $barCodes;
    }

    /**
     * @return array
     */
    public function getSpecs(): array
    {
        return $this->specs;
    }

    /**
     * @param array $specs
     */
    public function setSpecs(array $specs): void
    {
        $this->specs = $specs;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}