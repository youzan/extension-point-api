<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\SkuDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-22 20:36:12.0
 */
class ProductSyncDTO implements \JsonSerializable {

    /**
     * 商品名称
     * @var string
     */
    private $name;

    /**
     * 类目ID
     * @var int
     */
    private $categoryId;

    /**
     * 类目名称
     * @var string
     */
    private $categoryName;

    /**
     * 单位
     * @var string
     */
    private $unit;

    /**
     * spu条码
     * @var string
     */
    private $spuNo;

    /**
     * 额外条码
     * @var array
     */
    private $barCodes;

    /**
     * spu编码
     * @var string
     */
    private $spuCode;

    /**
     * 零售价(元）
     * @var string
     */
    private $retailPrice;

    /**
     * 销项税率
     * @var string
     */
    private $outputTaxRate;

    /**
     * 进项税率
     * @var string
     */
    private $inputTaxRate;

    /**
     * 规格信息(无规格商品可以为空)
     * @var SkuDTO
     */
    private $skus;

    /**
     * 商品图片
     * @var string
     */
    private $photoUrl;



    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     */
    public function setCategoryId(int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->categoryName;
    }

    /**
     * @param string $categoryName
     */
    public function setCategoryName(string $categoryName): void
    {
        $this->categoryName = $categoryName;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     */
    public function setUnit(string $unit): void
    {
        $this->unit = $unit;
    }

    /**
     * @return string
     */
    public function getSpuNo(): string
    {
        return $this->spuNo;
    }

    /**
     * @param string $spuNo
     */
    public function setSpuNo(string $spuNo): void
    {
        $this->spuNo = $spuNo;
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
     * @return string
     */
    public function getSpuCode(): string
    {
        return $this->spuCode;
    }

    /**
     * @param string $spuCode
     */
    public function setSpuCode(string $spuCode): void
    {
        $this->spuCode = $spuCode;
    }

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
    public function getOutputTaxRate(): string
    {
        return $this->outputTaxRate;
    }

    /**
     * @param string $outputTaxRate
     */
    public function setOutputTaxRate(string $outputTaxRate): void
    {
        $this->outputTaxRate = $outputTaxRate;
    }

    /**
     * @return string
     */
    public function getInputTaxRate(): string
    {
        return $this->inputTaxRate;
    }

    /**
     * @param string $inputTaxRate
     */
    public function setInputTaxRate(string $inputTaxRate): void
    {
        $this->inputTaxRate = $inputTaxRate;
    }

    /**
     * @return SkuDTO
     */
    public function getSkus(): SkuDTO
    {
        return $this->skus;
    }

    /**
     * @param SkuDTO $skus
     */
    public function setSkus(SkuDTO $skus): void
    {
        $this->skus = $skus;
    }

    /**
     * @return string
     */
    public function getPhotoUrl(): string
    {
        return $this->photoUrl;
    }

    /**
     * @param string $photoUrl
     */
    public function setPhotoUrl(string $photoUrl): void
    {
        $this->photoUrl = $photoUrl;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}