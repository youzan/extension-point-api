<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 配送单明细
 * @author Baymax
 * @create 2019-08-02 14:11:52.0
 */
class DistributionOrderItemDTO implements \JsonSerializable {

    /**
     * sku编码
     * @var string
     */
    private $skuCode;

    /**
     * 商品名称
     * @var string
     */
    private $productName;

    /**
     * sku条码
     * @var string
     */
    private $skuNo;

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
     * 预发数量
     * @var string
     */
    private $preOutNum;

    /**
     * 实际出库数量
     * @var string
     */
    private $actualOutNum;

    /**
     * 实际入库数量
     * @var string
     */
    private $actualInNum;



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

    /**
     * @return string
     */
    public function getPreOutNum(): string
    {
        return $this->preOutNum;
    }

    /**
     * @param string $preOutNum
     */
    public function setPreOutNum(string $preOutNum): void
    {
        $this->preOutNum = $preOutNum;
    }

    /**
     * @return string
     */
    public function getActualOutNum(): string
    {
        return $this->actualOutNum;
    }

    /**
     * @param string $actualOutNum
     */
    public function setActualOutNum(string $actualOutNum): void
    {
        $this->actualOutNum = $actualOutNum;
    }

    /**
     * @return string
     */
    public function getActualInNum(): string
    {
        return $this->actualInNum;
    }

    /**
     * @param string $actualInNum
     */
    public function setActualInNum(string $actualInNum): void
    {
        $this->actualInNum = $actualInNum;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}