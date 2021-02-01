<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use StdClass;
use DateTime;
use Com\Youzan\Cloud\Extension\Param\Retail\ApplyOrderReturnItemDTO;

/**
 * 
 * @author Baymax
 * @create 2019-08-02 15:55:17.0
 */
class ApplyReturnOrderSyncRequestDTO implements \JsonSerializable {

    /**
     * 鉴权信息
     * @var stdClass
     */
    private $authMap;

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
     * 出库单类型
     * @var string
     */
    private $orderType;

    /**
     * 日期格式
     * @var int
     */
    private $orderCreateTime;

    /**
     * 明细
     * @var array
     */
    private $yzApplyOrderReturnItemDTOs;



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
     * @return int
     */
    public function getOrderCreateTime(): ?int
    {
        return $this->orderCreateTime;
    }

    /**
     * @param int $orderCreateTime
     */
    public function setOrderCreateTime(?int $orderCreateTime): void
    {
        $this->orderCreateTime = $orderCreateTime;
    }

    /**
     * @return array
     */
    public function getYzApplyOrderReturnItemDTOs(): ?array
    {
        return $this->yzApplyOrderReturnItemDTOs;
    }

    /**
     * @param array $yzApplyOrderReturnItemDTOs
     */
    public function setYzApplyOrderReturnItemDTOs(?array $yzApplyOrderReturnItemDTOs): void
    {
        $this->yzApplyOrderReturnItemDTOs = $yzApplyOrderReturnItemDTOs;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}