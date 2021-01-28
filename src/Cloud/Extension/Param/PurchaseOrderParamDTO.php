<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\PurchaseOrderItemParamDTO;
use StdClass;
use DateTime;

/**
 * 采购单明细
 * @author Baymax
 * @create 2019-07-20 10:12:09.0
 */
class PurchaseOrderParamDTO implements \JsonSerializable {

    /**
     * 单据明细
     * @var array
     */
    private $orderItems;

    /**
     * 鉴权信息
     * @var stdClass
     */
    private $authMap;

    /**
     * 操作者名称
     * @var string
     */
    private $operatorName;

    /**
     * 预计到达时间
     * @var int
     */
    private $estimatedArrivalTime;

    /**
     * 不含税成本价总价（元）
     * @var string
     */
    private $withoutTaxTotalCost;

    /**
     * 含税成本价总价（元）
     * @var string
     */
    private $withTaxTotalCost;

    /**
     * 备注
     * @var string
     */
    private $remark;

    /**
     * 供应商名称
     * @var string
     */
    private $supplierName;

    /**
     * 供应商编码
     * @var string
     */
    private $supplierCode;

    /**
     * 仓库名称
     * @var string
     */
    private $warehouseName;

    /**
     * 仓库编码
     * @var string
     */
    private $warehouseCode;

    /**
     * 采购单号
     * @var string
     */
    private $purchaseOrderNo;



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

    /**
     * @return int
     */
    public function getEstimatedArrivalTime(): int
    {
        return $this->estimatedArrivalTime;
    }

    /**
     * @param int $estimatedArrivalTime
     */
    public function setEstimatedArrivalTime(int $estimatedArrivalTime): void
    {
        $this->estimatedArrivalTime = $estimatedArrivalTime;
    }

    /**
     * @return string
     */
    public function getWithoutTaxTotalCost(): string
    {
        return $this->withoutTaxTotalCost;
    }

    /**
     * @param string $withoutTaxTotalCost
     */
    public function setWithoutTaxTotalCost(string $withoutTaxTotalCost): void
    {
        $this->withoutTaxTotalCost = $withoutTaxTotalCost;
    }

    /**
     * @return string
     */
    public function getWithTaxTotalCost(): string
    {
        return $this->withTaxTotalCost;
    }

    /**
     * @param string $withTaxTotalCost
     */
    public function setWithTaxTotalCost(string $withTaxTotalCost): void
    {
        $this->withTaxTotalCost = $withTaxTotalCost;
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
    public function getSupplierName(): string
    {
        return $this->supplierName;
    }

    /**
     * @param string $supplierName
     */
    public function setSupplierName(string $supplierName): void
    {
        $this->supplierName = $supplierName;
    }

    /**
     * @return string
     */
    public function getSupplierCode(): string
    {
        return $this->supplierCode;
    }

    /**
     * @param string $supplierCode
     */
    public function setSupplierCode(string $supplierCode): void
    {
        $this->supplierCode = $supplierCode;
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
    public function getPurchaseOrderNo(): string
    {
        return $this->purchaseOrderNo;
    }

    /**
     * @param string $purchaseOrderNo
     */
    public function setPurchaseOrderNo(string $purchaseOrderNo): void
    {
        $this->purchaseOrderNo = $purchaseOrderNo;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}