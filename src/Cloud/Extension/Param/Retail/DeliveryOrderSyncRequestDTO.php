<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use StdClass;
use DateTime;
use Com\Youzan\Cloud\Extension\Param\Retail\BuyerInfoDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\ReceiverInfoDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\DeliveryOrderItemDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-23 14:49:51.0
 */
class DeliveryOrderSyncRequestDTO implements \JsonSerializable {

    /**
     * 鉴权参数
     * @var stdClass
     */
    private $authMap;

    /**
     * 发货单号
     * @var string
     */
    private $deliveryOrderNo;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 仓库编码
     * @var string
     */
    private $warehouseCode;

    /**
     * 仓库名称
     * @var string
     */
    private $warehouseName;

    /**
     * 创建日期
     * @var int
     */
    private $createTime;

    /**
     * 订单创建日期
     * @var int
     */
    private $orderCreateTime;

    /**
     * 备注
     * @var string
     */
    private $remark;

    /**
     * 发货单状态： WAIT_DELIVER&#x3D;待发货或待核销 DELIVERED&#x3D;已发货或已核销 NO_NEED_TO_DELIVER&#x3D;无需发货
     * @var string
     */
    private $status;

    /**
     * 销售渠道： ALL_SALE_WAY&#x3D;所有销售渠道 ONLINE&#x3D;网店 OFFLINE&#x3D;门店
     * @var string
     */
    private $saleWay;

    /**
     * 物流方式： EXPRESS&#x3D;快递 LOCAL_DELIVERY&#x3D;同城送 SELF_FETCH&#x3D;自提
     * @var string
     */
    private $distType;

    /**
     * 支付类型: 0&#x3D;老的方式,支付方式与支付渠道组合在一起 1&#x3D;无需支付 2&#x3D;现付 3&#x3D;部分支付 4&#x3D;货到付款 5&#x3D;线下收银 6&#x3D;单次支付 7&#x3D;阶段支付
     * @var int
     */
    private $payType;

    /**
     * 买家信息
     * @var BuyerInfoDTO
     */
    private $buyerInfo;

    /**
     * 收件人信息
     * @var ReceiverInfoDTO
     */
    private $receiverInfo;

    /**
     * 商品明细
     * @var array
     */
    private $orderItems;

    /**
     * 货单整单金额，未计任何优惠，未计邮费（计算规则：sales_price(明细1) * quantity(明细1) + sales_price(明细2) * quantity(明细2)）元
     * @var string
     */
    private $salesAmount;

    /**
     * 发货单实付邮费（元）
     * @var string
     */
    private $postage;

    /**
     * 发货单实付金额 ，包含邮费（计算规则：real_sales_amount(明细1) + real_sales_amount(明细2) + postage）元
     * @var string
     */
    private $realSalesAmount;



    /**
     * @return stdClass
     */
    public function getAuthMap(): stdClass
    {
        return $this->authMap;
    }

    /**
     * @param stdClass $authMap
     */
    public function setAuthMap(stdClass $authMap): void
    {
        $this->authMap = $authMap;
    }

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
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return string
     */
    public function getWarehouseCode(): string
    {
        return $this->warehouseCode;
    }

    /**
     * @param string $warehouseCode
     */
    public function setWarehouseCode(string $warehouseCode): void
    {
        $this->warehouseCode = $warehouseCode;
    }

    /**
     * @return string
     */
    public function getWarehouseName(): string
    {
        return $this->warehouseName;
    }

    /**
     * @param string $warehouseName
     */
    public function setWarehouseName(string $warehouseName): void
    {
        $this->warehouseName = $warehouseName;
    }

    /**
     * @return int
     */
    public function getCreateTime(): int
    {
        return $this->createTime;
    }

    /**
     * @param int $createTime
     */
    public function setCreateTime(int $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return int
     */
    public function getOrderCreateTime(): int
    {
        return $this->orderCreateTime;
    }

    /**
     * @param int $orderCreateTime
     */
    public function setOrderCreateTime(int $orderCreateTime): void
    {
        $this->orderCreateTime = $orderCreateTime;
    }

    /**
     * @return string
     */
    public function getRemark(): string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark(string $remark): void
    {
        $this->remark = $remark;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getSaleWay(): string
    {
        return $this->saleWay;
    }

    /**
     * @param string $saleWay
     */
    public function setSaleWay(string $saleWay): void
    {
        $this->saleWay = $saleWay;
    }

    /**
     * @return string
     */
    public function getDistType(): string
    {
        return $this->distType;
    }

    /**
     * @param string $distType
     */
    public function setDistType(string $distType): void
    {
        $this->distType = $distType;
    }

    /**
     * @return int
     */
    public function getPayType(): int
    {
        return $this->payType;
    }

    /**
     * @param int $payType
     */
    public function setPayType(int $payType): void
    {
        $this->payType = $payType;
    }

    /**
     * @return BuyerInfoDTO
     */
    public function getBuyerInfo(): BuyerInfoDTO
    {
        return $this->buyerInfo;
    }

    /**
     * @param BuyerInfoDTO $buyerInfo
     */
    public function setBuyerInfo(BuyerInfoDTO $buyerInfo): void
    {
        $this->buyerInfo = $buyerInfo;
    }

    /**
     * @return ReceiverInfoDTO
     */
    public function getReceiverInfo(): ReceiverInfoDTO
    {
        return $this->receiverInfo;
    }

    /**
     * @param ReceiverInfoDTO $receiverInfo
     */
    public function setReceiverInfo(ReceiverInfoDTO $receiverInfo): void
    {
        $this->receiverInfo = $receiverInfo;
    }

    /**
     * @return array
     */
    public function getOrderItems(): array
    {
        return $this->orderItems;
    }

    /**
     * @param array $orderItems
     */
    public function setOrderItems(array $orderItems): void
    {
        $this->orderItems = $orderItems;
    }

    /**
     * @return string
     */
    public function getSalesAmount(): string
    {
        return $this->salesAmount;
    }

    /**
     * @param string $salesAmount
     */
    public function setSalesAmount(string $salesAmount): void
    {
        $this->salesAmount = $salesAmount;
    }

    /**
     * @return string
     */
    public function getPostage(): string
    {
        return $this->postage;
    }

    /**
     * @param string $postage
     */
    public function setPostage(string $postage): void
    {
        $this->postage = $postage;
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