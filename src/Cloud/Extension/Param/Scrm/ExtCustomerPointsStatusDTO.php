<?php

namespace Com\Youzan\Cloud\Extension\Param\Scrm;



/**
 * dto
 * @author Baymax
 * @create Tue Dec 02 17:31:16 CST 2025
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
     * 即将过期积分，即将过期积分应小于或等于当前可用积分
     * @var int
     */
    private $nearlyExpiredPoints;



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

    /**
     * @return int
     */
    public function getNearlyExpiredPoints(): ?int
    {
        return $this->nearlyExpiredPoints;
    }

    /**
     * @param int $nearlyExpiredPoints
     */
    public function setNearlyExpiredPoints(?int $nearlyExpiredPoints): void
    {
        $this->nearlyExpiredPoints = $nearlyExpiredPoints;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}