<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use Com\Youzan\Cloud\Extension\Param\Model\BayMaxComputingItemIdentity;

/**
 *  
 * @author Baymax
 * @create Sat Apr 09 14:25:04 CST 2022
 */
class BayMaxComputingItemPostageDiscount implements \JsonSerializable {

    /**
     *  
     * @var BayMaxComputingItemIdentity
     */
    private $computingItemIdentity;

    /**
     *  
     * @var int
     */
    private $calculateType;

    /**
     *  
     * @var int
     */
    private $calculateValue;



    /**
     * @return BayMaxComputingItemIdentity
     */
    public function getComputingItemIdentity(): ?BayMaxComputingItemIdentity
    {
        return $this->computingItemIdentity;
    }

    /**
     * @param BayMaxComputingItemIdentity $computingItemIdentity
     */
    public function setComputingItemIdentity(?BayMaxComputingItemIdentity $computingItemIdentity): void
    {
        $this->computingItemIdentity = $computingItemIdentity;
    }

    /**
     * @return int
     */
    public function getCalculateType(): ?int
    {
        return $this->calculateType;
    }

    /**
     * @param int $calculateType
     */
    public function setCalculateType(?int $calculateType): void
    {
        $this->calculateType = $calculateType;
    }

    /**
     * @return int
     */
    public function getCalculateValue(): ?int
    {
        return $this->calculateValue;
    }

    /**
     * @param int $calculateValue
     */
    public function setCalculateValue(?int $calculateValue): void
    {
        $this->calculateValue = $calculateValue;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}