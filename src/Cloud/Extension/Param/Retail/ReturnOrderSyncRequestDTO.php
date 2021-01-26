<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use StdClass;
use DateTime;
use Com\Youzan\Cloud\Extension\Param\Retail\YZReturnOrderItemDTO;
use Com\Youzan\Cloud\Extension\Param\Retail\YZLogisticsDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-25 12:03:44.0
 */
class ReturnOrderSyncRequestDTO implements \JsonSerializable {

    /**
     * 鉴权参数
     * @var stdClass
     */
    private $authMap;

    /**
     * 退货单号
     * @var string
     */
    private $returnOrderNo;

    /**
     * 销售渠道 ONLINE:网店 OFFLINE: 门店
     * @var string
     */
    private $saleWay;

    /**
     * 仓库编码
     * @var string
     */
    private $warehouseCode;

    /**
     * 备注
     * @var string
     */
    private $remark;

    /**
     * 退货单状态 WAIT_RECEIVED：卖家待收货 RECEIVED：卖家已收货 SELLER_REFUSE：卖家未收到货，拒绝退款 RETURN_STOCK_SUCCESS：已入库
     * @var string
     */
    private $status;

    /**
     * 退款申请时间
     * @var int
     */
    private $createTime;

    /**
     * 退款金额
     * @var string
     */
    private $refundAmount;

    /**
     * 退款原因
     * @var string
     */
    private $reason;

    /**
     * 退货单版本
     * @var int
     */
    private $version;

    /**
     * 
     * @var array
     */
    private $returnItems;

    /**
     * 
     * @var YZLogisticsDTO
     */
    private $yzLogisticsDTO;



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
    public function getReturnOrderNo(): ?string
    {
        return $this->returnOrderNo;
    }

    /**
     * @param string $returnOrderNo
     */
    public function setReturnOrderNo(?string $returnOrderNo): void
    {
        $this->returnOrderNo = $returnOrderNo;
    }

    /**
     * @return string
     */
    public function getSaleWay(): ?string
    {
        return $this->saleWay;
    }

    /**
     * @param string $saleWay
     */
    public function setSaleWay(?string $saleWay): void
    {
        $this->saleWay = $saleWay;
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
    public function getRefundAmount(): ?string
    {
        return $this->refundAmount;
    }

    /**
     * @param string $refundAmount
     */
    public function setRefundAmount(?string $refundAmount): void
    {
        $this->refundAmount = $refundAmount;
    }

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @return int
     */
    public function getVersion(): ?int
    {
        return $this->version;
    }

    /**
     * @param int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @return array
     */
    public function getReturnItems(): ?array
    {
        return $this->returnItems;
    }

    /**
     * @param array $returnItems
     */
    public function setReturnItems(?array $returnItems): void
    {
        $this->returnItems = $returnItems;
    }

    /**
     * @return YZLogisticsDTO
     */
    public function getYzLogisticsDTO(): ?YZLogisticsDTO
    {
        return $this->yzLogisticsDTO;
    }

    /**
     * @param YZLogisticsDTO $yzLogisticsDTO
     */
    public function setYzLogisticsDTO(?YZLogisticsDTO $yzLogisticsDTO): void
    {
        $this->yzLogisticsDTO = $yzLogisticsDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}