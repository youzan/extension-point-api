<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;

use Com\Youzan\Cloud\Extension\Param\Retail\SupplierSyncDTO;

/**
 * 
 * @author Baymax
 * @create 2019-07-23 10:46:51.0
 */
class SupplierInfoSyncResponseDTO implements \JsonSerializable {

    /**
     * 查询总数
     * @var int
     */
    private $totalCount;

    /**
     * 供应商信息
     * @var array
     */
    private $supplierOrderSyncDTOList;



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
    public function getSupplierOrderSyncDTOList(): array
    {
        return $this->supplierOrderSyncDTOList;
    }

    /**
     * @param array $supplierOrderSyncDTOList
     */
    public function setSupplierOrderSyncDTOList(array $supplierOrderSyncDTOList): void
    {
        $this->supplierOrderSyncDTOList = $supplierOrderSyncDTOList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}