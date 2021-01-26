<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 要货申请审核商品明细
 * @author Baymax
 * @create 2019-07-21 22:31:59.0
 */
class DistributionOutOrderItemResultDTO implements \JsonSerializable {

    /**
     * 商品编码
     * @var string
     */
    private $skuCode;

    /**
     * 变更数量
     * @var string
     */
    private $quantity;

    /**
     * 含税成本单价（元）
     * @var string
     */
    private $withTaxCost;

    /**
     * 含税总金额（含税成本单价*数量）（元）
     * @var string
     */
    private $withTaxAmount;



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
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    /**
     * @param string $quantity
     */
    public function setQuantity(?string $quantity): void
    {
        $this->quantity = $quantity;
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