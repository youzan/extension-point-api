<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 明细单
 * @author Baymax
 * @create 2019-07-21 19:05:25.0
 */
class StockOrderItemResultDTO implements \JsonSerializable {

    /**
     * 商品编码
     * @var string
     */
    private $skuCode;

    /**
     * 商品条码
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
     * 出库数量
     * @var string
     */
    private $quantity;

    /**
     * 含税成本单价（元）
     * @var string
     */
    private $withTaxCost;

    /**
     * 含税总金额（含税成本单价*数量）
     * @var string
     */
    private $withTaxAmount;

    /**
     * 不含税成本单价（元）
     * @var string
     */
    private $withoutTaxCost;

    /**
     * 不含税总金额（不含税成本单价*数量）
     * @var string
     */
    private $withoutTaxAmount;

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
     * 成交单价（单个商品的实付单价，销售出库单中才存在）（元）
     * @var string
     */
    private $realSalesPrice;

    /**
     * 含税总收入（用户实付金额，销售出库单中才存在）（元）
     * @var string
     */
    private $withTaxIncome;



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
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     */
    public function setQuantity(string $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getWithTaxCost(): string
    {
        return $this->withTaxCost;
    }

    /**
     * @param string $withTaxCost
     */
    public function setWithTaxCost(string $withTaxCost): void
    {
        $this->withTaxCost = $withTaxCost;
    }

    /**
     * @return string
     */
    public function getWithTaxAmount(): string
    {
        return $this->withTaxAmount;
    }

    /**
     * @param string $withTaxAmount
     */
    public function setWithTaxAmount(string $withTaxAmount): void
    {
        $this->withTaxAmount = $withTaxAmount;
    }

    /**
     * @return string
     */
    public function getWithoutTaxCost(): string
    {
        return $this->withoutTaxCost;
    }

    /**
     * @param string $withoutTaxCost
     */
    public function setWithoutTaxCost(string $withoutTaxCost): void
    {
        $this->withoutTaxCost = $withoutTaxCost;
    }

    /**
     * @return string
     */
    public function getWithoutTaxAmount(): string
    {
        return $this->withoutTaxAmount;
    }

    /**
     * @param string $withoutTaxAmount
     */
    public function setWithoutTaxAmount(string $withoutTaxAmount): void
    {
        $this->withoutTaxAmount = $withoutTaxAmount;
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
    public function getRealSalesPrice(): string
    {
        return $this->realSalesPrice;
    }

    /**
     * @param string $realSalesPrice
     */
    public function setRealSalesPrice(string $realSalesPrice): void
    {
        $this->realSalesPrice = $realSalesPrice;
    }

    /**
     * @return string
     */
    public function getWithTaxIncome(): string
    {
        return $this->withTaxIncome;
    }

    /**
     * @param string $withTaxIncome
     */
    public function setWithTaxIncome(string $withTaxIncome): void
    {
        $this->withTaxIncome = $withTaxIncome;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}