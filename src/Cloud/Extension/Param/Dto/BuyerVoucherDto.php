<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 
 * @author Baymax
 * @create 2021-10-25 11:04:48.0
 */
class BuyerVoucherDto implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $thresholdCopywriting;

    /**
     * 
     * @var int
     */
    private $kdtId;

    /**
     * 
     * @var int
     */
    private $activityId;



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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}