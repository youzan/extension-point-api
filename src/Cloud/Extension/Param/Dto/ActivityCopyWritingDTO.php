<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 优惠券活动信息
 * @author Baymax
 * @create Fri Aug 08 15:08:15 CST 2025
 */
class ActivityCopyWritingDTO implements \JsonSerializable {

    /**
     * 总店id
     * @var int
     */
    private $kdtId;

    /**
     * 优惠券活动id
     * @var int
     */
    private $activityId;

    /**
     * 优惠券活动原始门槛文案
     * @var string
     */
    private $thresholdCopywriting;



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
     * @return int
     */
    public function getActivityId(): ?int
    {
        return $this->activityId;
    }

    /**
     * @param int $activityId
     */
    public function setActivityId(?int $activityId): void
    {
        $this->activityId = $activityId;
    }

    /**
     * @return string
     */
    public function getThresholdCopywriting(): ?string
    {
        return $this->thresholdCopywriting;
    }

    /**
     * @param string $thresholdCopywriting
     */
    public function setThresholdCopywriting(?string $thresholdCopywriting): void
    {
        $this->thresholdCopywriting = $thresholdCopywriting;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}