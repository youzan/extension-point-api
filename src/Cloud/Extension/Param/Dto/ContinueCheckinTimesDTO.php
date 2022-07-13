<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use DateTime;

/**
 * {}
 * @author Baymax
 * @create Thu Jan 13 20:33:20 CST 2022
 */
class ContinueCheckinTimesDTO implements \JsonSerializable {

    /**
     * 签到周期开始时间，时间格式：yyyy-MM-dd-HH-mm-ss
     * @var int
     */
    private $cycleStartTime;

    /**
     * 签到周期结束时间，时间格式：yyyy-MM-dd-HH-mm-ss
     * @var int
     */
    private $cycleEndTime;

    /**
     * 周期内连续签到次数
     * @var int
     */
    private $continueCheckinTimes;



    /**
     * @return int
     */
    public function getCycleStartTime(): ?int
    {
        return $this->cycleStartTime;
    }

    /**
     * @param int $cycleStartTime
     */
    public function setCycleStartTime(?int $cycleStartTime): void
    {
        $this->cycleStartTime = $cycleStartTime;
    }

    /**
     * @return int
     */
    public function getCycleEndTime(): ?int
    {
        return $this->cycleEndTime;
    }

    /**
     * @param int $cycleEndTime
     */
    public function setCycleEndTime(?int $cycleEndTime): void
    {
        $this->cycleEndTime = $cycleEndTime;
    }

    /**
     * @return int
     */
    public function getContinueCheckinTimes(): ?int
    {
        return $this->continueCheckinTimes;
    }

    /**
     * @param int $continueCheckinTimes
     */
    public function setContinueCheckinTimes(?int $continueCheckinTimes): void
    {
        $this->continueCheckinTimes = $continueCheckinTimes;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}