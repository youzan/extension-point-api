<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 成长值权益
 * @author Baymax
 * @create 2019-11-22 12:15:26.0
 */
class GrowthPointRightsDTO implements \JsonSerializable {

    /**
     * 成长值
     * @var int
     */
    private $growthPoint;



    /**
     * @return int
     */
    public function getGrowthPoint(): int
    {
        return $this->growthPoint;
    }

    /**
     * @param int $growthPoint
     */
    public function setGrowthPoint(int $growthPoint): void
    {
        $this->growthPoint = $growthPoint;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}