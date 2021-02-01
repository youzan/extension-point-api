<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\StockCheckOrderSyncResultDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-22 02:19:47.0
 */
class StockCheckOrderResponseDTO implements \JsonSerializable {

    /**
     * 查询总数
     * @var int
     */
    private $totalCount;

    /**
     * 库存盘点信息
     * @var array
     */
    private $stockCheckOrderSyncDTOS;



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
    public function getStockCheckOrderSyncDTOS(): ?array
    {
        return $this->stockCheckOrderSyncDTOS;
    }

    /**
     * @param array $stockCheckOrderSyncDTOS
     */
    public function setStockCheckOrderSyncDTOS(?array $stockCheckOrderSyncDTOS): void
    {
        $this->stockCheckOrderSyncDTOS = $stockCheckOrderSyncDTOS;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}