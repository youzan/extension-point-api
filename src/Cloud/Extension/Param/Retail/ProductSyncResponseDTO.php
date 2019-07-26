<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\ProductSyncDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-22 20:36:12.0
 */
class ProductSyncResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $totalCount;

    /**
     * 
     * @var ProductSyncDTO
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
     * @return ProductSyncDTO
     */
    public function getProductSyncDTO(): ProductSyncDTO
    {
        return $this->productSyncDTO;
    }

    /**
     * @param ProductSyncDTO $productSyncDTO
     */
    public function setProductSyncDTO(ProductSyncDTO $productSyncDTO): void
    {
        $this->productSyncDTO = $productSyncDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}