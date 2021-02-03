<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\PurchaseOrderSyncResultDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-22 02:41:17.0
 */
class PurchaseOrderResponseDTO implements \JsonSerializable {

    /**
     * 总数
     * @var int
     */
    private $totalCount;

    /**
     * 
     * @var array
     */
    private $purchaseOrderSyncDTOS;



    /**
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    /**
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount): void
    {
        $this->totalCount = $totalCount;
    }

    /**
     * @return array
     */
    public function getPurchaseOrderSyncDTOS(): array
    {
        return $this->purchaseOrderSyncDTOS;
    }

    /**
     * @param array $purchaseOrderSyncDTOS
     */
    public function setPurchaseOrderSyncDTOS(array $purchaseOrderSyncDTOS): void
    {
        $this->purchaseOrderSyncDTOS = $purchaseOrderSyncDTOS;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}