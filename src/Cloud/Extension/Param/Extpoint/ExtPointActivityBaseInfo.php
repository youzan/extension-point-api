<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;

use DateTime;
use StdClass;

/**
 * 
 * @author Baymax
 * @create 2021-05-06 20:06:45.0
 */
class ExtPointActivityBaseInfo implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $activityId;

    /**
     * 
     * @var string
     */
    private $alias;

    /**
     * 
     * @var int
     */
    private $appType;

    /**
     * 
     * @var int
     */
    private $status;

    /**
     * 
     * @var int
     */
    private $startAt;

    /**
     * 
     * @var int
     */
    private $endAt;

    /**
     * 
     * @var stdClass
     */
    private $featureMap;



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
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     */
    public function setAlias(?string $alias): void
    {
        $this->alias = $alias;
    }

    /**
     * @return int
     */
    public function getAppType(): ?int
    {
        return $this->appType;
    }

    /**
     * @param int $appType
     */
    public function setAppType(?int $appType): void
    {
        $this->appType = $appType;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getStartAt(): ?int
    {
        return $this->startAt;
    }

    /**
     * @param int $startAt
     */
    public function setStartAt(?int $startAt): void
    {
        $this->startAt = $startAt;
    }

    /**
     * @return int
     */
    public function getEndAt(): ?int
    {
        return $this->endAt;
    }

    /**
     * @param int $endAt
     */
    public function setEndAt(?int $endAt): void
    {
        $this->endAt = $endAt;
    }

    /**
     * @return stdClass
     */
    public function getFeatureMap(): ?stdClass
    {
        return $this->featureMap;
    }

    /**
     * @param stdClass $featureMap
     */
    public function setFeatureMap(?stdClass $featureMap): void
    {
        $this->featureMap = $featureMap;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}