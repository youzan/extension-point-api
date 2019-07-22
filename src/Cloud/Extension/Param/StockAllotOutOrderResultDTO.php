<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\StockAllotOutOrderResultDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-21 22:31:59.0
 */
class StockAllotOutOrderResultDTO implements \JsonSerializable {

    /**
     * 总数
     * @var int
     */
    private $totalCount;

    /**
     * 
     * @var array
     */
    private $stockAllotOutOrderSyncDTOS;



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
    public function getStockAllotOutOrderSyncDTOS(): array
    {
        return $this->stockAllotOutOrderSyncDTOS;
    }

    /**
     * @param array $stockAllotOutOrderSyncDTOS
     */
    public function setStockAllotOutOrderSyncDTOS(array $stockAllotOutOrderSyncDTOS): void
    {
        $this->stockAllotOutOrderSyncDTOS = $stockAllotOutOrderSyncDTOS;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}