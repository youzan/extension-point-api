<?php

namespace Com\Youzan\Cloud\Extension\Param\Store;

use Com\Youzan\Cloud\Extension\Param\Store\TimeSectionDTO;

/**
 * 网点营业时间
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class DayCrossTimeSectionDTO implements \JsonSerializable {

    /**
     * 星期
     * @var array
     */
    private $weekdays;

    /**
     * 
     * @var array
     */
    private $timeSections;



    /**
     * @return array
     */
    public function getWeekdays(): ?array
    {
        return $this->weekdays;
    }

    /**
     * @param array $weekdays
     */
    public function setWeekdays(?array $weekdays): void
    {
        $this->weekdays = $weekdays;
    }

    /**
     * @return array
     */
    public function getTimeSections(): ?array
    {
        return $this->timeSections;
    }

    /**
     * @param array $timeSections
     */
    public function setTimeSections(?array $timeSections): void
    {
        $this->timeSections = $timeSections;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}