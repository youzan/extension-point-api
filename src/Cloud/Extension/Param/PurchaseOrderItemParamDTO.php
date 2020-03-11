<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 单据明细
 * @author Baymax
 * @create 2019-07-20 10:12:09.0
 */
class PurchaseOrderItemParamDTO implements \JsonSerializable {

    /**
     * 含税成本价
     * @var string
     */
    private $withTaxUnitCost;

    /**
     * 不含税成本价
     * @var string
     */
    private $withoutTaxUnitCost;

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
     * sku编码
     * @var string
     */
    private $skuCode;

    /**
     * sku条码
     * @var string
     */
    private $skuNo;

    /**
     * 商品名称
     * @var string
     */
    private $productName;

    /**
     * 单位
     * @var string
     */
    private $unit;

    /**
     * 申请数量
     * @var string
     */
    private $applyNum;



    /**
     * @return string
     */
    public function getWithTaxUnitCost(): string
    {
        return $this->withTaxUnitCost;
    }

    /**
     * @param string $withTaxUnitCost
     */
    public function setWithTaxUnitCost(string $withTaxUnitCost): void
    {
        $this->withTaxUnitCost = $withTaxUnitCost;
    }

    /**
     * @return string
     */
    public function getWithoutTaxUnitCost(): string
    {
        return $this->withoutTaxUnitCost;
    }

    /**
     * @param string $withoutTaxUnitCost
     */
    public function setWithoutTaxUnitCost(string $withoutTaxUnitCost): void
    {
        $this->withoutTaxUnitCost = $withoutTaxUnitCost;
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
     * @return string
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName(string $productName): void
    {
        $this->productName = $productName;
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
    public function getApplyNum(): string
    {
        return $this->applyNum;
    }

    /**
     * @param string $applyNum
     */
    public function setApplyNum(string $applyNum): void
    {
        $this->applyNum = $applyNum;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}