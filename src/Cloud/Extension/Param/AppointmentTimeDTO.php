<?php

namespace Com\Youzan\Cloud\Extension\Param;

use DateTime;

/**
 * 预约时间
 * @author Baymax
 * @create Mon Oct 22 20:30:57 CST 2018
 */
class AppointmentTimeDTO implements \JsonSerializable {

    /**
     * 结束时间
     * @var DateTime
     */
    private $endTime;

    /**
     * 开始时间
     * @var DateTime
     */
    private $startTime;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}