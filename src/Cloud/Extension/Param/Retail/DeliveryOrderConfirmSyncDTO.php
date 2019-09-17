<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use StdClass;

/**
 * 
 * @author Baymax
 * @create 2019-07-26 10:54:00.0
 */
class DeliveryOrderConfirmSyncDTO implements \JsonSerializable {

    /**
     * 销售发货单号
     * @var string
     */
    private $deliveryOrderNo;

    /**
     * 商品明细ID
     * @var array
     */
    private $orderItemNos;

    /**
     * 
     * @var string
     */
    private $logisticsNo;

    /**
     * 物流公司编号，可以通过请求 youzan.logistics.express.get 该接口获得
     * @var string
     */
    private $logisticsType;

    /**
     * 运单号
     * @var bool
     */
    private $isPartSync;

    /**
     * 操作人名字
     * @var stdClass
     */
    private $extInfo;



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
    public function getLogisticsNo(): string
    {
        return $this->logisticsNo;
    }

    /**
     * @param string $logisticsNo
     */
    public function setLogisticsNo(string $logisticsNo): void
    {
        $this->logisticsNo = $logisticsNo;
    }

    /**
     * @return string
     */
    public function getLogisticsType(): string
    {
        return $this->logisticsType;
    }

    /**
     * @param string $logisticsType
     */
    public function setLogisticsType(string $logisticsType): void
    {
        $this->logisticsType = $logisticsType;
    }

    /**
     * @return bool
     */
    public function getIsPartSync(): bool
    {
        return $this->isPartSync;
    }

    /**
     * @param bool $isPartSync
     */
    public function setIsPartSync(bool $isPartSync): void
    {
        $this->isPartSync = $isPartSync;
    }

    /**
     * @return stdClass
     */
    public function getExtInfo(): stdClass
    {
        return $this->extInfo;
    }

    /**
     * @param stdClass $extInfo
     */
    public function setExtInfo(stdClass $extInfo): void
    {
        $this->extInfo = $extInfo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}