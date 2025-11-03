<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 优惠券活动信息
 * @author Baymax
 * @create Fri Aug 08 15:08:15 CST 2025
 */
class ActivityCopyWritingCustomDTO implements \JsonSerializable {

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
     * 客户定制门槛文案信息
     * @var string
     */
    private $customThresholdCopywriting;



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
    public function getCustomThresholdCopywriting(): ?string
    {
        return $this->customThresholdCopywriting;
    }

    /**
     * @param string $customThresholdCopywriting
     */
    public function setCustomThresholdCopywriting(?string $customThresholdCopywriting): void
    {
        $this->customThresholdCopywriting = $customThresholdCopywriting;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}