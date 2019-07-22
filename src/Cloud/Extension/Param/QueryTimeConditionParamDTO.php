<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 时间参数
 * @author Baymax
 * @create 2019-07-21 19:05:25.0
 */
class QueryTimeConditionParamDTO implements \JsonSerializable {

    /**
     * 上次最后执行时间：如 2018-11-21 10:44:31
     * @var string
     */
    private $startTime;

    /**
     * 时间间隔（单位为分钟），默认值0不做时间间隔
     * @var string
     */
    private $endTime;



    /**
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     */
    public function setStartTime(string $startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * @return string
     */
    public function getEndTime(): string
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     */
    public function setEndTime(string $endTime): void
    {
        $this->endTime = $endTime;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}