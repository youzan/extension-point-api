<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;

use Com\Youzan\Cloud\Extension\Param\Model\ComputingItemIdentity;

/**
 * 
 * @author Baymax
 * @create 2021-07-08 11:43:47.0
 */
class OrderPromotionComputeResp implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $totalDecrease;

    /**
     * 
     * @var array
     */
    private $effectItems;



    /**
     * @return int
     */
    public function getTotalDecrease(): ?int
    {
        return $this->totalDecrease;
    }

    /**
     * @param int $totalDecrease
     */
    public function setTotalDecrease(?int $totalDecrease): void
    {
        $this->totalDecrease = $totalDecrease;
    }

    /**
     * @return array
     */
    public function getEffectItems(): ?array
    {
        return $this->effectItems;
    }

    /**
     * @param array $effectItems
     */
    public function setEffectItems(?array $effectItems): void
    {
        $this->effectItems = $effectItems;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}