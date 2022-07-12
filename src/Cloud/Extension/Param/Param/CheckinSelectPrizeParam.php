<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use DateTime;
use Com\Youzan\Cloud\Extension\Param\CheckinSelectPrizeParam\CheckinSelectPrizeRule;

/**
 * {}
 * @author Baymax
 * @create Thu Jan 13 20:34:38 CST 2022
 */
class CheckinSelectPrizeParam implements \JsonSerializable {

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
     * 店铺id
     * @var int
     */
    private $kdtId;

    /**
     * 用户openId
     * @var string
     */
    private $yzOpenId;

    /**
     * {}
     * @var array
     */
    private $checkinSelectPrizeRules;



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

    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return array
     */
    public function getCheckinSelectPrizeRules(): ?array
    {
        return $this->checkinSelectPrizeRules;
    }

    /**
     * @param array $checkinSelectPrizeRules
     */
    public function setCheckinSelectPrizeRules(?array $checkinSelectPrizeRules): void
    {
        $this->checkinSelectPrizeRules = $checkinSelectPrizeRules;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}