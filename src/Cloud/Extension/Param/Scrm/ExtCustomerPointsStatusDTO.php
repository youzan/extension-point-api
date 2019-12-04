<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * 
 * @author Baymax
 * @create 2018-10-11 17:21:06.0
 */
class ExtCustomerPointsStatusDTO implements \JsonSerializable {

    /**
     * 累计获得的积分数(只增不减)
     * @var int
     */
    private $totalPoints;

    /**
     * 当前积分
     * @var int
     */
    private $currentPoints;



    /**
     * @return int
     */
    public function getTotalPoints(): int
    {
        return $this->totalPoints;
    }

    /**
     * @param int $totalPoints
     */
    public function setTotalPoints(int $totalPoints): void
    {
        $this->totalPoints = $totalPoints;
    }

    /**
     * @return int
     */
    public function getCurrentPoints(): int
    {
        return $this->currentPoints;
    }

    /**
     * @param int $currentPoints
     */
    public function setCurrentPoints(int $currentPoints): void
    {
        $this->currentPoints = $currentPoints;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}