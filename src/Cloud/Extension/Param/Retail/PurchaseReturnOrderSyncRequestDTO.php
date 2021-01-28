<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use StdClass;
use DateTime;
use Com\Youzan\Cloud\Extension\Param\StockOrderItemResultDTO;

/**
 * 
 * @author Baymax
 * @create 2019-08-02 15:22:28.0
 */
class PurchaseReturnOrderSyncRequestDTO implements \JsonSerializable {

    /**
     * 鉴权参数
     * @var stdClass
     */
    private $authMap;

    /**
     * 供应商Code
     * @var string
     */
    private $supplierCode;

    /**
     * 供应商名称
     * @var string
     */
    private $supplierName;

    /**
     * 单据编号
     * @var string
     */
    private $bizBillNo;

    /**
     * 仓库编码
     * @var string
     */
    private $warehouseCode;

    /**
     * 单据日期(YYYY-MM-DD HH:MM:SS)
     * @var int
     */
    private $createTime;

    /**
     * 出库单类型
     * @var string
     */
    private $orderType;

    /**
     * 备注
     * @var string
     */
    private $remark;

    /**
     * 制单人
     * @var string
     */
    private $creator;

    /**
     * 关联单据号，如交易出库关联的订单号
     * @var string
     */
    private $sourceOrderNo;

    /**
     * 明细单
     * @var array
     */
    private $orderItems;



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
    public function getBizBillNo(): string
    {
        return $this->bizBillNo;
    }

    /**
     * @param string $bizBillNo
     */
    public function setBizBillNo(string $bizBillNo): void
    {
        $this->bizBillNo = $bizBillNo;
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
     * @return string
     */
    public function getOrderType(): string
    {
        return $this->orderType;
    }

    /**
     * @param string $orderType
     */
    public function setOrderType(string $orderType): void
    {
        $this->orderType = $orderType;
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
    public function getCreator(): string
    {
        return $this->creator;
    }

    /**
     * @param string $creator
     */
    public function setCreator(string $creator): void
    {
        $this->creator = $creator;
    }

    /**
     * @return string
     */
    public function getSourceOrderNo(): string
    {
        return $this->sourceOrderNo;
    }

    /**
     * @param string $sourceOrderNo
     */
    public function setSourceOrderNo(string $sourceOrderNo): void
    {
        $this->sourceOrderNo = $sourceOrderNo;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}