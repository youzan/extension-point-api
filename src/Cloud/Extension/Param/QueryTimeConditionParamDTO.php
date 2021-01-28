<?php

namespace Com\Youzan\Cloud\Extension\Param;

use DateTime;

/**
 * 时间参数
 * @author Baymax
 * @create 2019-07-21 19:05:25.0
 */
class QueryTimeConditionParamDTO implements \JsonSerializable {

    /**
     * 开始时间
     * @var int
     */
    private $startTime;

    /**
     * 截止时间
     * @var int
     */
    private $endTime;



    /**
     * @return int
     */
    public function getStartTime(): int
    {
        return $this->startTime;
    }

    /**
     * @param int $startTime
     */
    public function setStartTime(int $startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * @return int
     */
    public function getEndTime(): int
    {
        return $this->endTime;
    }

    /**
     * @param int $endTime
     */
    public function setEndTime(int $endTime): void
    {
        $this->endTime = $endTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}