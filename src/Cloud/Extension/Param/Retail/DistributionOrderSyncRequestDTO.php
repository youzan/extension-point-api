<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\Retail\DistributionOrderItemDTO;
use DateTime;

/**
 * 
 * @author Baymax
 * @create 2019-08-02 11:53:03.0
 */
class DistributionOrderSyncRequestDTO implements \JsonSerializable {

    /**
     * 鉴权参数
     * @var stdClass
     */
    private $authMap;

    /**
     * 配送单号
     * @var string
     */
    private $bizBillNo;

    /**
     * 出库仓库编码
     * @var string
     */
    private $fromWarehouseCode;

    /**
     * 入库仓库编码
     * @var string
     */
    private $toWarehouseCode;

    /**
     * 出库仓库名称
     * @var string
     */
    private $fromWarehouseName;

    /**
     * 入库仓库名称
     * @var string
     */
    private $toWarehouseName;

    /**
     * 单据状态
     * @var string
     */
    private $status;

    /**
     * 制单人
     * @var string
     */
    private $creator;

    /**
     * 备注
     * @var string
     */
    private $remark;

    /**
     * 驳回原因
     * @var string
     */
    private $refusedReason;

    /**
     * 配送单明细
     * @var array
     */
    private $businessOrderItems;

    /**
     * 关联出库单据号
     * @var string
     */
    private $outBizBillNo;

    /**
     * 关联入库单据号
     * @var string
     */
    private $inBizBillNo;

    /**
     * 配送出库时间
     * @var int
     */
    private $distributedOutTime;



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
    public function getFromWarehouseCode(): ?string
    {
        return $this->fromWarehouseCode;
    }

    /**
     * @param string $fromWarehouseCode
     */
    public function setFromWarehouseCode(?string $fromWarehouseCode): void
    {
        $this->fromWarehouseCode = $fromWarehouseCode;
    }

    /**
     * @return string
     */
    public function getToWarehouseCode(): ?string
    {
        return $this->toWarehouseCode;
    }

    /**
     * @param string $toWarehouseCode
     */
    public function setToWarehouseCode(?string $toWarehouseCode): void
    {
        $this->toWarehouseCode = $toWarehouseCode;
    }

    /**
     * @return string
     */
    public function getFromWarehouseName(): ?string
    {
        return $this->fromWarehouseName;
    }

    /**
     * @param string $fromWarehouseName
     */
    public function setFromWarehouseName(?string $fromWarehouseName): void
    {
        $this->fromWarehouseName = $fromWarehouseName;
    }

    /**
     * @return string
     */
    public function getToWarehouseName(): ?string
    {
        return $this->toWarehouseName;
    }

    /**
     * @param string $toWarehouseName
     */
    public function setToWarehouseName(?string $toWarehouseName): void
    {
        $this->toWarehouseName = $toWarehouseName;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
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
    public function getRefusedReason(): ?string
    {
        return $this->refusedReason;
    }

    /**
     * @param string $refusedReason
     */
    public function setRefusedReason(?string $refusedReason): void
    {
        $this->refusedReason = $refusedReason;
    }

    /**
     * @return array
     */
    public function getBusinessOrderItems(): ?array
    {
        return $this->businessOrderItems;
    }

    /**
     * @param array $businessOrderItems
     */
    public function setBusinessOrderItems(?array $businessOrderItems): void
    {
        $this->businessOrderItems = $businessOrderItems;
    }

    /**
     * @return string
     */
    public function getOutBizBillNo(): ?string
    {
        return $this->outBizBillNo;
    }

    /**
     * @param string $outBizBillNo
     */
    public function setOutBizBillNo(?string $outBizBillNo): void
    {
        $this->outBizBillNo = $outBizBillNo;
    }

    /**
     * @return string
     */
    public function getInBizBillNo(): ?string
    {
        return $this->inBizBillNo;
    }

    /**
     * @param string $inBizBillNo
     */
    public function setInBizBillNo(?string $inBizBillNo): void
    {
        $this->inBizBillNo = $inBizBillNo;
    }

    /**
     * @return int
     */
    public function getDistributedOutTime(): ?int
    {
        return $this->distributedOutTime;
    }

    /**
     * @param int $distributedOutTime
     */
    public function setDistributedOutTime(?int $distributedOutTime): void
    {
        $this->distributedOutTime = $distributedOutTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}