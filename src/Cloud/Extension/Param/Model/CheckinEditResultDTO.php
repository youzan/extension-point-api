<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 
 * @author Baymax
 * @create 2021-04-13 15:16:53.0
 */
class CheckinEditResultDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $activityId;



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