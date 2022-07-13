<?php

namespace Com\Youzan\Cloud\Extension\Param\Store;

use Com\Youzan\Cloud\Extension\Param\Store\TimeSectionDTO;

/**
 * 自定义营业时间段信息
 * @author Baymax
 * @create 2021-05-25 19:58:33.0
 */
class DayCrossTimeSectionDTO implements \JsonSerializable {

    /**
     * 自定义营业，具体时间段范围（单位星期），支持多段范围
     * @var array
     */
    private $weekRange;

    /**
     * 自定义营业，具体时间段范围（单位小时分钟），支持多段范围
     * @var array
     */
    private $timeRange;



    /**
     * @return array
     */
    public function getWeekRange(): ?array
    {
        return $this->weekRange;
    }

    /**
     * @param array $weekRange
     */
    public function setWeekRange(?array $weekRange): void
    {
        $this->weekRange = $weekRange;
    }

    /**
     * @return array
     */
    public function getTimeRange(): ?array
    {
        return $this->timeRange;
    }

    /**
     * @param array $timeRange
     */
    public function setTimeRange(?array $timeRange): void
    {
        $this->timeRange = $timeRange;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}