<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\ActivityResponse;

/**
 * 响应参数
 * @author Baymax
 * @create Wed Feb 08 10:55:56 CST 2023
 */
class UmpCalculateResponse implements \JsonSerializable {

    /**
     * 优惠详情（如果多个活动，需要按照执行顺序排序）
     * @var array
     */
    private $activities;

    /**
     * 外部优惠总金额（单位/分）
     * @var int
     */
    private $decrease;



    /**
     * @return array
     */
    public function getActivities(): ?array
    {
        return $this->activities;
    }

    /**
     * @param array $activities
     */
    public function setActivities(?array $activities): void
    {
        $this->activities = $activities;
    }

    /**
     * @return int
     */
    public function getDecrease(): ?int
    {
        return $this->decrease;
    }

    /**
     * @param int $decrease
     */
    public function setDecrease(?int $decrease): void
    {
        $this->decrease = $decrease;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}