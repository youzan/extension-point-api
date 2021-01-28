<?php

namespace Com\Youzan\Cloud\Extension\Param;

use DateTime;

/**
 * 预约时间
 * @author Baymax
 * @create 2018-10-22 20:30:57.0
 */
class AppointmentTimeDTO implements \JsonSerializable {

    /**
     * 结束时间
     * @var int
     */
    private $endTime;

    /**
     * 开始时间
     * @var int
     */
    private $startTime;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}