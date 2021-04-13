<?php

namespace Com\Youzan\Cloud\Extension\Param\CheckinPrizeDTO;



/**
 * 
 * @author Baymax
 * @create 2021-04-13 15:16:53.0
 */
class PointDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $points;



    /**
     * @return int
     */
    public function getPoints(): ?int
    {
        return $this->points;
    }

    /**
     * @param int $points
     */
    public function setPoints(?int $points): void
    {
        $this->points = $points;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}