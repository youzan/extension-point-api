<?php

namespace Com\Youzan\Cloud\Extension\Param\CheckinActivityParam;



/**
 * 
 * @author Baymax
 * @create 2021-04-13 15:16:53.0
 */
class CycleParam implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $cycle;



    /**
     * @return int
     */
    public function getCycle(): ?int
    {
        return $this->cycle;
    }

    /**
     * @param int $cycle
     */
    public function setCycle(?int $cycle): void
    {
        $this->cycle = $cycle;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}