<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\ProductSyncDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-30 10:02:54.0
 */
class ProductReverseResultDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $totalCount;

    /**
     * 
     * @var array
     */
    private $productSyncDTOS;



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
    public function getProductSyncDTOS(): ?array
    {
        return $this->productSyncDTOS;
    }

    /**
     * @param array $productSyncDTOS
     */
    public function setProductSyncDTOS(?array $productSyncDTOS): void
    {
        $this->productSyncDTOS = $productSyncDTOS;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}