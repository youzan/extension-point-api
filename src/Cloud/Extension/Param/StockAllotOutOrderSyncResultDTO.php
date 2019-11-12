<?php

namespace Com\Youzan\Cloud\Extension\Param;

use DateTime;
use Com\Youzan\Cloud\Extension\Param\DistributionOutOrderItemResultDTO;
use Com\Youzan\Cloud\Extension\Param\PluginHistoryOrderResultDTO;

/**
 * 调拨出库单信息
 * @author Baymax
 * @create 2019-07-21 22:31:59.0
 */
class StockAllotOutOrderSyncResultDTO implements \JsonSerializable {

    /**
     * 总部店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 要货申请单号
     * @var string
     */
    private $applyOrderNo;

    /**
     * 出库单号
     * @var string
     */
    private $bizBillNo;

    /**
     * 出库单对应的源单号，此处是生成的配送单号
     * @var string
     */
    private $sourceOrderNo;

    /**
     * 外部单号，比如旺店通生成的调拨单,用于记录关联关系时用
     * @var string
     */
    private $outerNo;

    /**
     * 调出仓库编码
     * @var string
     */
    private $fromWarehouseCode;

    /**
     * 单据日期
     * @var int
     */
    private $createTime;

    /**
     * 备注
     * @var string
     */
    private $remark;

    /**
     * 要货申请审核商品明细
     * @var array
     */
    private $items;

    /**
     * 关联配送单号
     * @var array
     */
    private $disOrders;

    /**
     * 用于记录单据号关联关系
     * @var PluginHistoryOrderResultDTO
     */
    private $pluginHistoryOrder;



    /**
     * @return int
     */
    public function getKdtId(): int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getApplyOrderNo(): string
    {
        return $this->applyOrderNo;
    }

    /**
     * @param string $applyOrderNo
     */
    public function setApplyOrderNo(string $applyOrderNo): void
    {
        $this->applyOrderNo = $applyOrderNo;
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
     * @return string
     */
    public function getOuterNo(): string
    {
        return $this->outerNo;
    }

    /**
     * @param string $outerNo
     */
    public function setOuterNo(string $outerNo): void
    {
        $this->outerNo = $outerNo;
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
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
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
     * @return PluginHistoryOrderResultDTO
     */
    public function getPluginHistoryOrder(): PluginHistoryOrderResultDTO
    {
        return $this->pluginHistoryOrder;
    }

    /**
     * @param PluginHistoryOrderResultDTO $pluginHistoryOrder
     */
    public function setPluginHistoryOrder(PluginHistoryOrderResultDTO $pluginHistoryOrder): void
    {
        $this->pluginHistoryOrder = $pluginHistoryOrder;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}