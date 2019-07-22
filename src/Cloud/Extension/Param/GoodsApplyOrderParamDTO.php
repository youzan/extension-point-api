<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\GoodsApplyOrderItemParamDTO;

/**
 * 门店要货参数
 * @author Baymax
 * @create 2019-07-21 18:21:24.0
 */
class GoodsApplyOrderParamDTO implements \JsonSerializable {

    /**
     * 鉴权参数
     * @var stdClass
     */
    private $authMap;

    /**
     * 要货申请单单号
     * @var string
     */
    private $applyBizNo;

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
     * 1-待审核 2-待出库 3-待入库 4-已驳回 5-已关闭 6-已完成 7-出库执行中 8-入库执行中
     * @var int
     */
    private $status;

    /**
     * 拒绝理由
     * @var string
     */
    private $refusedReason;

    /**
     * 入库单据编号
     * @var string
     */
    private $outBizNo;

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
     * 单据日期(YYYY-MM-DD HH:MM:SS)
     * @var string
     */
    private $createdTime;

    /**
     * 关联配送单号
     * @var array
     */
    private $disOrders;

    /**
     * 要货申请单商品明细
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
    public function getApplyBizNo(): string
    {
        return $this->applyBizNo;
    }

    /**
     * @param string $applyBizNo
     */
    public function setApplyBizNo(string $applyBizNo): void
    {
        $this->applyBizNo = $applyBizNo;
    }

    /**
     * @return string
     */
    public function getFromWarehouseCode(): string
    {
        return $this->fromWarehouseCode;
    }

    /**
     * @param string $fromWarehouseCode
     */
    public function setFromWarehouseCode(string $fromWarehouseCode): void
    {
        $this->fromWarehouseCode = $fromWarehouseCode;
    }

    /**
     * @return string
     */
    public function getToWarehouseCode(): string
    {
        return $this->toWarehouseCode;
    }

    /**
     * @param string $toWarehouseCode
     */
    public function setToWarehouseCode(string $toWarehouseCode): void
    {
        $this->toWarehouseCode = $toWarehouseCode;
    }

    /**
     * @return string
     */
    public function getFromWarehouseName(): string
    {
        return $this->fromWarehouseName;
    }

    /**
     * @param string $fromWarehouseName
     */
    public function setFromWarehouseName(string $fromWarehouseName): void
    {
        $this->fromWarehouseName = $fromWarehouseName;
    }

    /**
     * @return string
     */
    public function getToWarehouseName(): string
    {
        return $this->toWarehouseName;
    }

    /**
     * @param string $toWarehouseName
     */
    public function setToWarehouseName(string $toWarehouseName): void
    {
        $this->toWarehouseName = $toWarehouseName;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getRefusedReason(): string
    {
        return $this->refusedReason;
    }

    /**
     * @param string $refusedReason
     */
    public function setRefusedReason(string $refusedReason): void
    {
        $this->refusedReason = $refusedReason;
    }

    /**
     * @return string
     */
    public function getOutBizNo(): string
    {
        return $this->outBizNo;
    }

    /**
     * @param string $outBizNo
     */
    public function setOutBizNo(string $outBizNo): void
    {
        $this->outBizNo = $outBizNo;
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
    public function getCreatedTime(): string
    {
        return $this->createdTime;
    }

    /**
     * @param string $createdTime
     */
    public function setCreatedTime(string $createdTime): void
    {
        $this->createdTime = $createdTime;
    }

    /**
     * @return array
     */
    public function getDisOrders(): array
    {
        return $this->disOrders;
    }

    /**
     * @param array $disOrders
     */
    public function setDisOrders(array $disOrders): void
    {
        $this->disOrders = $disOrders;
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