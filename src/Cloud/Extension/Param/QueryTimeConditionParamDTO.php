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
     * @var DateTime
     */
    private $startTime;

    /**
     * 截止时间
     * @var DateTime
     */
    private $endTime;



    /**
     * @return DateTime
     */
    public function getStartTime(): DateTime
    {
        return $this->startTime;
    }

    /**
     * @param DateTime $startTime
     */
    public function setStartTime(DateTime $startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * @return DateTime
     */
    public function getEndTime(): DateTime
    {
        return $this->endTime;
    }

    /**
     * @param DateTime $endTime
     */
    public function setEndTime(DateTime $endTime): void
    {
        $this->endTime = $endTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}