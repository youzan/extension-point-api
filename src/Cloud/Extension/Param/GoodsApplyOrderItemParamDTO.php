<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 要货申请单商品明细
 * @author Baymax
 * @create 2019-07-21 18:21:24.0
 */
class GoodsApplyOrderItemParamDTO implements \JsonSerializable {

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
     * 配送价
     * @var string
     */
    private $deliveryCost;

    /**
     * 审核配送价
     * @var string
     */
    private $checkedDeliveryCost;

    /**
     * 商品编码
     * @var string
     */
    private $skuCode;

    /**
     * 商品名称
     * @var string
     */
    private $productName;

    /**
     * 商品条码
     * @var string
     */
    private $skuNo;

    /**
     * 单位
     * @var string
     */
    private $unit;

    /**
     * 含税成本单价（元）
     * @var string
     */
    private $withTaxCost;

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
     * 含税总金额（含税成本单价*数量）
     * @var string
     */
    private $withTaxAmount;



    /**
     * @return string
     */
    public function getApplyNum(): ?string
    {
        return $this->applyNum;
    }

    /**
     * @param string $applyNum
     */
    public function setApplyNum(?string $applyNum): void
    {
        $this->applyNum = $applyNum;
    }

    /**
     * @return string
     */
    public function getPreOutNum(): ?string
    {
        return $this->preOutNum;
    }

    /**
     * @param string $preOutNum
     */
    public function setPreOutNum(?string $preOutNum): void
    {
        $this->preOutNum = $preOutNum;
    }

    /**
     * @return string
     */
    public function getActualOutNum(): ?string
    {
        return $this->actualOutNum;
    }

    /**
     * @param string $actualOutNum
     */
    public function setActualOutNum(?string $actualOutNum): void
    {
        $this->actualOutNum = $actualOutNum;
    }

    /**
     * @return string
     */
    public function getActualInNum(): ?string
    {
        return $this->actualInNum;
    }

    /**
     * @param string $actualInNum
     */
    public function setActualInNum(?string $actualInNum): void
    {
        $this->actualInNum = $actualInNum;
    }

    /**
     * @return string
     */
    public function getDeliveryCost(): ?string
    {
        return $this->deliveryCost;
    }

    /**
     * @param string $deliveryCost
     */
    public function setDeliveryCost(?string $deliveryCost): void
    {
        $this->deliveryCost = $deliveryCost;
    }

    /**
     * @return string
     */
    public function getCheckedDeliveryCost(): ?string
    {
        return $this->checkedDeliveryCost;
    }

    /**
     * @param string $checkedDeliveryCost
     */
    public function setCheckedDeliveryCost(?string $checkedDeliveryCost): void
    {
        $this->checkedDeliveryCost = $checkedDeliveryCost;
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
    public function getWithTaxCost(): ?string
    {
        return $this->withTaxCost;
    }

    /**
     * @param string $withTaxCost
     */
    public function setWithTaxCost(?string $withTaxCost): void
    {
        $this->withTaxCost = $withTaxCost;
    }

    /**
     * @return string
     */
    public function getWithoutTaxCost(): ?string
    {
        return $this->withoutTaxCost;
    }

    /**
     * @param string $withoutTaxCost
     */
    public function setWithoutTaxCost(?string $withoutTaxCost): void
    {
        $this->withoutTaxCost = $withoutTaxCost;
    }

    /**
     * @return string
     */
    public function getWithoutTaxAmount(): ?string
    {
        return $this->withoutTaxAmount;
    }

    /**
     * @param string $withoutTaxAmount
     */
    public function setWithoutTaxAmount(?string $withoutTaxAmount): void
    {
        $this->withoutTaxAmount = $withoutTaxAmount;
    }

    /**
     * @return string
     */
    public function getWithTaxAmount(): ?string
    {
        return $this->withTaxAmount;
    }

    /**
     * @param string $withTaxAmount
     */
    public function setWithTaxAmount(?string $withTaxAmount): void
    {
        $this->withTaxAmount = $withTaxAmount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}