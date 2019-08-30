<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 退款明细
 * @author Baymax
 * @create 2019-07-26 10:35:03.0
 */
class YZRefundOrderItemDTO implements \JsonSerializable {

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
     * 商品类型：0:普通类型商品; 1:拍卖商品; 5:餐饮商品; 10:分销商品; 20:会员卡商品; 21:礼品卡商品; 23:有赞会议商品; 24:周期购; 30:收银台商品; 31:知识付费商品; 35:酒店商品; 40:普通服务类商品; 182:普通虚拟商品; 183:电子卡券商品; 201:外部会员卡商品; 202:外部直接收款商品; 203:外部普通商品; 205:mock不存在商品; 206:小程序二维码
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
     * 实际价格，包含邮费
     * @var string
     */
    private $realSalesPrice;

    /**
     * 退款金额 单位元
     * @var string
     */
    private $refundFee;



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
    public function getRefundFee(): string
    {
        return $this->refundFee;
    }

    /**
     * @param string $refundFee
     */
    public function setRefundFee(string $refundFee): void
    {
        $this->refundFee = $refundFee;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}