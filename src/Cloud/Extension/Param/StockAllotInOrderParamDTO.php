<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;
use DateTime;
use Com\Youzan\Cloud\Extension\Param\StockOrderItemResultDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-21 22:04:37.0
 */
class StockAllotInOrderParamDTO implements \JsonSerializable {

    /**
     * 鉴权信息
     * @var stdClass
     */
    private $authMap;

    /**
     * 供应商编码
     * @var string
     */
    private $supplierCode;

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
     * 单据日期
     * @var int
     */
    private $createTime;

    /**
     * 出库单类型(BSCK&#x3D;报损出库;PKCK&#x3D;盘亏出库;CGTC&#x3D;采购退厂;XSCK&#x3D;销售出库;DBCK&#x3D;调拨出库;PSCK&#x3D;配送出库)
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
     * 外部单号
     * @var string
     */
    private $outerNo;

    /**
     * 明细单
     * @var array
     */
    private $orderItems;



    /**
     * @return stdClass
     */
    public function getAuthMap(): ?stdClass
    {
        return $this->authMap;
    }

    /**
     * @param stdClass $authMap
     */
    public function setAuthMap(?stdClass $authMap): void
    {
        $this->authMap = $authMap;
    }

    /**
     * @return string
     */
    public function getSupplierCode(): ?string
    {
        return $this->supplierCode;
    }

    /**
     * @param string $supplierCode
     */
    public function setSupplierCode(?string $supplierCode): void
    {
        $this->supplierCode = $supplierCode;
    }

    /**
     * @return string
     */
    public function getBizBillNo(): ?string
    {
        return $this->bizBillNo;
    }

    /**
     * @param string $bizBillNo
     */
    public function setBizBillNo(?string $bizBillNo): void
    {
        $this->bizBillNo = $bizBillNo;
    }

    /**
     * @return string
     */
    public function getWarehouseCode(): ?string
    {
        return $this->warehouseCode;
    }

    /**
     * @param string $warehouseCode
     */
    public function setWarehouseCode(?string $warehouseCode): void
    {
        $this->warehouseCode = $warehouseCode;
    }

    /**
     * @return int
     */
    public function getCreateTime(): ?int
    {
        return $this->createTime;
    }

    /**
     * @param int $createTime
     */
    public function setCreateTime(?int $createTime): void
    {
        $this->createTime = $createTime;
    }

    /**
     * @return string
     */
    public function getOrderType(): ?string
    {
        return $this->orderType;
    }

    /**
     * @param string $orderType
     */
    public function setOrderType(?string $orderType): void
    {
        $this->orderType = $orderType;
    }

    /**
     * @return string
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @param string $remark
     */
    public function setRemark(?string $remark): void
    {
        $this->remark = $remark;
    }

    /**
     * @return string
     */
    public function getCreator(): ?string
    {
        return $this->creator;
    }

    /**
     * @param string $creator
     */
    public function setCreator(?string $creator): void
    {
        $this->creator = $creator;
    }

    /**
     * @return string
     */
    public function getSourceOrderNo(): ?string
    {
        return $this->sourceOrderNo;
    }

    /**
     * @param string $sourceOrderNo
     */
    public function setSourceOrderNo(?string $sourceOrderNo): void
    {
        $this->sourceOrderNo = $sourceOrderNo;
    }

    /**
     * @return string
     */
    public function getOuterNo(): ?string
    {
        return $this->outerNo;
    }

    /**
     * @param string $outerNo
     */
    public function setOuterNo(?string $outerNo): void
    {
        $this->outerNo = $outerNo;
    }

    /**
     * @return array
     */
    public function getOrderItems(): ?array
    {
        return $this->orderItems;
    }

    /**
     * @param array $orderItems
     */
    public function setOrderItems(?array $orderItems): void
    {
        $this->orderItems = $orderItems;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}