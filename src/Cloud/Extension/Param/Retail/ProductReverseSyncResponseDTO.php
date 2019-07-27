<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\ProductSyncDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-27 17:14:52.0
 */
class ProductReverseSyncResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $totalCount;

    /**
     * 
     * @var array
     */
    private $productSyncDTO;



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
    public function getProductSyncDTO(): array
    {
        return $this->productSyncDTO;
    }

    /**
     * @param array $productSyncDTO
     */
    public function setProductSyncDTO(array $productSyncDTO): void
    {
        $this->productSyncDTO = $productSyncDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}