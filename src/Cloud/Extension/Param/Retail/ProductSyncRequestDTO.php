<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use StdClass;
use DateTime;

/**
 * 
 * @author Baymax
 * @create 2019-07-22 21:01:19.0
 */
class ProductSyncRequestDTO implements \JsonSerializable {

    /**
     * 鉴权信息
     * @var stdClass
     */
    private $authMap;

    /**
     * 操作类型
     * @var string
     */
    private $operateType;

    /**
     * 仓库编码
     * @var string
     */
    private $warehouseCode;

    /**
     * 商品名称
     * @var string
     */
    private $productName;

    /**
     * 规格
     * @var string
     */
    private $specifications;

    /**
     * 库存单位
     * @var string
     */
    private $unit;

    /**
     * 商品条码
     * @var string
     */
    private $skuNo;

    /**
     * 商品编码
     * @var string
     */
    private $skuCode;

    /**
     * 外部编码（无规格时返回）
     * @var array
     */
    private $barCodes;

    /**
     * 商品建议零售价
     * @var string
     */
    private $retailPrice;

    /**
     * 销项税
     * @var string
     */
    private $outputTaxRate;

    /**
     * 进项税字符串
     * @var string
     */
    private $inputTaxRate;

    /**
     * 默认提供商编码
     * @var string
     */
    private $defaultSupplierCode;

    /**
     * 默认提供商
     * @var string
     */
    private $defaultSupplierName;

    /**
     * 规格创建时间
     * @var int
     */
    private $createTime;

    /**
     * 规格更新时间
     * @var int
     */
    private $updateTime;



    /**
     * @return stdClass
     */
    public function getAuthMap(): ?stdClass
    {
        return $this->authMap;
    }

    /**
     * @param stdClass $authMap
     */
    public function setAuthMap(?stdClass $authMap): void
    {
        $this->authMap = $authMap;
    }

    /**
     * @return string
     */
    public function getOperateType(): ?string
    {
        return $this->operateType;
    }

    /**
     * @param string $operateType
     */
    public function setOperateType(?string $operateType): void
    {
        $this->operateType = $operateType;
    }

    /**
     * @return string
     */
    public function getWarehouseCode(): ?string
    {
        return $this->warehouseCode;
    }

    /**
     * @param string $warehouseCode
     */
    public function setWarehouseCode(?string $warehouseCode): void
    {
        $this->warehouseCode = $warehouseCode;
    }

    /**
     * @return string
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string $productName
     */
    public function setProductName(?string $productName): void
    {
        $this->productName = $productName;
    }

    /**
     * @return string
     */
    public function getSpecifications(): ?string
    {
        return $this->specifications;
    }

    /**
     * @param string $specifications
     */
    public function setSpecifications(?string $specifications): void
    {
        $this->specifications = $specifications;
    }

    /**
     * @return string
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     */
    public function setUnit(?string $unit): void
    {
        $this->unit = $unit;
    }

    /**
     * @return string
     */
    public function getSkuNo(): ?string
    {
        return $this->skuNo;
    }

    /**
     * @param string $skuNo
     */
    public function setSkuNo(?string $skuNo): void
    {
        $this->skuNo = $skuNo;
    }

    /**
     * @return string
     */
    public function getSkuCode(): ?string
    {
        return $this->skuCode;
    }

    /**
     * @param string $skuCode
     */
    public function setSkuCode(?string $skuCode): void
    {
        $this->skuCode = $skuCode;
    }

    /**
     * @return array
     */
    public function getBarCodes(): ?array
    {
        return $this->barCodes;
    }

    /**
     * @param array $barCodes
     */
    public function setBarCodes(?array $barCodes): void
    {
        $this->barCodes = $barCodes;
    }

    /**
     * @return string
     */
    public function getRetailPrice(): ?string
    {
        return $this->retailPrice;
    }

    /**
     * @param string $retailPrice
     */
    public function setRetailPrice(?string $retailPrice): void
    {
        $this->retailPrice = $retailPrice;
    }

    /**
     * @return string
     */
    public function getOutputTaxRate(): ?string
    {
        return $this->outputTaxRate;
    }

    /**
     * @param string $outputTaxRate
     */
    public function setOutputTaxRate(?string $outputTaxRate): void
    {
        $this->outputTaxRate = $outputTaxRate;
    }

    /**
     * @return string
     */
    public function getInputTaxRate(): ?string
    {
        return $this->inputTaxRate;
    }

    /**
     * @param string $inputTaxRate
     */
    public function setInputTaxRate(?string $inputTaxRate): void
    {
        $this->inputTaxRate = $inputTaxRate;
    }

    /**
     * @return string
     */
    public function getDefaultSupplierCode(): ?string
    {
        return $this->defaultSupplierCode;
    }

    /**
     * @param string $defaultSupplierCode
     */
    public function setDefaultSupplierCode(?string $defaultSupplierCode): void
    {
        $this->defaultSupplierCode = $defaultSupplierCode;
    }

    /**
     * @return string
     */
    public function getDefaultSupplierName(): ?string
    {
        return $this->defaultSupplierName;
    }

    /**
     * @param string $defaultSupplierName
     */
    public function setDefaultSupplierName(?string $defaultSupplierName): void
    {
        $this->defaultSupplierName = $defaultSupplierName;
    }

    /**
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * @param int $createTime
     */
    public function setCreateTime(?int $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return int
     */
    public function getUpdateTime(): ?int
    {
        return $this->updateTime;
    }

    /**
     * @param int $updateTime
     */
    public function setUpdateTime(?int $updateTime): void
    {
        $this->updateTime = $updateTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}