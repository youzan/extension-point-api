<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\DeliveryOrderConfirmSyncDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-25 14:17:34.0
 */
class DeliveryOrderConfirmResponseDTO implements \JsonSerializable {

    /**
     * 查询总数
     * @var int
     */
    private $totalCount;

    /**
     * 发货单确认返回信息
     * @var array
     */
    private $deliveryOrderConfirmSyncDTOList;



    /**
     * @return int
     */
    public function getTotalCount(): ?int
    {
        return $this->totalCount;
    }

    /**
     * @param int $totalCount
     */
    public function setTotalCount(?int $totalCount): void
    {
        $this->totalCount = $totalCount;
    }

    /**
     * @return array
     */
    public function getDeliveryOrderConfirmSyncDTOList(): ?array
    {
        return $this->deliveryOrderConfirmSyncDTOList;
    }

    /**
     * @param array $deliveryOrderConfirmSyncDTOList
     */
    public function setDeliveryOrderConfirmSyncDTOList(?array $deliveryOrderConfirmSyncDTOList): void
    {
        $this->deliveryOrderConfirmSyncDTOList = $deliveryOrderConfirmSyncDTOList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}