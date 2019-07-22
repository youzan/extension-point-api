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
     * 上次最后执行时间：如 2018-11-21 10:44:31
     * @var DateTime
     */
    private $startTime;

    /**
     * 时间间隔（单位为分钟），默认值0不做时间间隔
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