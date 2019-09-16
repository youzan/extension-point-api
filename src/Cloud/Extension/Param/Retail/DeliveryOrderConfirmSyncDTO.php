<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 
 * @author Baymax
 * @create Fri Jul 26 10:54:00 CST 2019
 */
class DeliveryOrderConfirmSyncDTO implements \JsonSerializable {

    /**
     * 销售发货单号
     * @var string
     */
    private $deliveryOrderNo;

    /**
     * 仓库编码
     * @var string
     */
    private $warehouseCode;

    /**
     * 商品明细ID
     * @var array
     */
    private $orderItemNos;

    /**
     * 物流公司编号，可以通过请求 youzan.logistics.express.get 该接口获得
     * @var string
     */
    private $logisticsId;

    /**
     * 运单号
     * @var string
     */
    private $expressCode;

    /**
     * 操作人名字
     * @var string
     */
    private $operatorName;



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
     * @return array
     */
    public function getOrderItemNos(): array
    {
        return $this->orderItemNos;
    }

    /**
     * @param array $orderItemNos
     */
    public function setOrderItemNos(array $orderItemNos): void
    {
        $this->orderItemNos = $orderItemNos;
    }

    /**
     * @return string
     */
    public function getLogisticsId(): string
    {
        return $this->logisticsId;
    }

    /**
     * @param string $logisticsId
     */
    public function setLogisticsId(string $logisticsId): void
    {
        $this->logisticsId = $logisticsId;
    }

    /**
     * @return string
     */
    public function getExpressCode(): string
    {
        return $this->expressCode;
    }

    /**
     * @param string $expressCode
     */
    public function setExpressCode(string $expressCode): void
    {
        $this->expressCode = $expressCode;
    }

    /**
     * @return string
     */
    public function getOperatorName(): string
    {
        return $this->operatorName;
    }

    /**
     * @param string $operatorName
     */
    public function setOperatorName(string $operatorName): void
    {
        $this->operatorName = $operatorName;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}