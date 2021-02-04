<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\StockAllotOutOrderSyncResultDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-21 22:31:59.0
 */
class StockAllotOutOrderResultDTO implements \JsonSerializable {

    /**
     * 查询总数
     * @var int
     */
    private $totalCount;

    /**
     * 调拨出库单信息
     * @var array
     */
    private $stockAllotOutOrderSyncDTOS;



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
    public function getStockAllotOutOrderSyncDTOS(): ?array
    {
        return $this->stockAllotOutOrderSyncDTOS;
    }

    /**
     * @param array $stockAllotOutOrderSyncDTOS
     */
    public function setStockAllotOutOrderSyncDTOS(?array $stockAllotOutOrderSyncDTOS): void
    {
        $this->stockAllotOutOrderSyncDTOS = $stockAllotOutOrderSyncDTOS;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}