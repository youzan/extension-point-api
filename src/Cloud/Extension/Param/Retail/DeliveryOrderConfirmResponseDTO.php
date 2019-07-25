<?php

namespace Com\Youzan\Cloud\Extension\Param\Retail;



/**
 * 
 * @author Baymax
 * @create 2019-07-25 14:17:34.0
 */
class DeliveryOrderConfirmResponseDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $totalCount;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}