<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\ActivityResponse;

/**
 * 外部接口出参
 * @author Baymax
 * @create 2020-06-11 11:03:35.0
 */
class UmpCalculateResponse implements \JsonSerializable {

    /**
     * 外部优惠活动详情
     * @var ActivityResponse
     */
    private $activities;

    /**
     * 外部优惠总优惠金额/分
     * @var int
     */
    private $decrease;



    /**
     * @return ActivityResponse
     */
    public function getActivities(): ActivityResponse
    {
        return $this->activities;
    }

    /**
     * @param ActivityResponse $activities
     */
    public function setActivities(ActivityResponse $activities): void
    {
        $this->activities = $activities;
    }

    /**
     * @return int
     */
    public function getDecrease(): int
    {
        return $this->decrease;
    }

    /**
     * @param int $decrease
     */
    public function setDecrease(int $decrease): void
    {
        $this->decrease = $decrease;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}