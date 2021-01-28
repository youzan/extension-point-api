<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 商品明细
 * @author Baymax
 * @create 2019-08-06 10:42:46.0
 */
class DeliveryOrderItemDTO implements \JsonSerializable {

    /**
     * 发货单号
     * @var string
     */
    private $deliveryOrderNo;

    /**
     * 商品明细ID
     * @var string
     */
    private $orderItemNo;

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
     * 商品类型
     * @var int
     */
    private $itemType;

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
     * 出库数量
     * @var string
     */
    private $quantity;

    /**
     * 销项税率
     * @var string
     */
    private $outputTaxRate;

    /**
     * 含税销售单价（定价，直接销售的价格）
     * @var string
     */
    private $salesPrice;

    /**
     * 单个商品实付金额，已减去均摊的订单优惠
     * @var string
     */
    private $realSalesAmount;



    /**
     * @return string
     */
    public function getDeliveryOrderNo(): string
    {
        return $this->deliveryOrderNo;
    }

    /**
     * @param string $deliveryOrderNo
     */
    public function setDeliveryOrderNo(string $deliveryOrderNo): void
    {
        $this->deliveryOrderNo = $deliveryOrderNo;
    }

    /**
     * @return string
     */
    public function getOrderItemNo(): string
    {
        return $this->orderItemNo;
    }

    /**
     * @param string $orderItemNo
     */
    public function setOrderItemNo(string $orderItemNo): void
    {
        $this->orderItemNo = $orderItemNo;
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
     * @return int
     */
    public function getItemType(): int
    {
        return $this->itemType;
    }

    /**
     * @param int $itemType
     */
    public function setItemType(int $itemType): void
    {
        $this->itemType = $itemType;
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
    public function getSalesPrice(): string
    {
        return $this->salesPrice;
    }

    /**
     * @param string $salesPrice
     */
    public function setSalesPrice(string $salesPrice): void
    {
        $this->salesPrice = $salesPrice;
    }

    /**
     * @return string
     */
    public function getRealSalesAmount(): string
    {
        return $this->realSalesAmount;
    }

    /**
     * @param string $realSalesAmount
     */
    public function setRealSalesAmount(string $realSalesAmount): void
    {
        $this->realSalesAmount = $realSalesAmount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}