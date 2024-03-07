<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * dto
 * @author Baymax
 * @create Mon Apr 24 17:56:46 CST 2023
 */
class ExtCustomerPointsStatusDTO implements \JsonSerializable {

    /**
     * 当前积分，当会员不存在时设置为0
     * @var int
     */
    private $currentPoints;

    /**
     * 累计获得的积分数(只增不减)，当会员不存在时设置为0
     * @var int
     */
    private $totalPoints;



    /**
     * @return int
     */
    public function getCurrentPoints(): ?int
    {
        return $this->currentPoints;
    }

    /**
     * @param int $currentPoints
     */
    public function setCurrentPoints(?int $currentPoints): void
    {
        $this->currentPoints = $currentPoints;
    }

    /**
     * @return int
     */
    public function getTotalPoints(): ?int
    {
        return $this->totalPoints;
    }

    /**
     * @param int $totalPoints
     */
    public function setTotalPoints(?int $totalPoints): void
    {
        $this->totalPoints = $totalPoints;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}