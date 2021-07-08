<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2021-07-08 11:43:47.0
 */
class ExtActivityParam implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $activityId;

    /**
     * 
     * @var int
     */
    private $appType;

    /**
     * 
     * @var string
     */
    private $appBusinessName;

    /**
     * 
     * @var int
     */
    private $shopId;

    /**
     * 
     * @var string
     */
    private $alias;

    /**
     * 
     * @var int
     */
    private $activityStatus;

    /**
     * 
     * @var string
     */
    private $name;

    /**
     * 
     * @var string
     */
    private $desc;

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
     * @var string
     */
    private $feature;

    /**
     * 
     * @var string
     */
    private $activityParamsJson;



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
     * @return string
     */
    public function getAppBusinessName(): ?string
    {
        return $this->appBusinessName;
    }

    /**
     * @param string $appBusinessName
     */
    public function setAppBusinessName(?string $appBusinessName): void
    {
        $this->appBusinessName = $appBusinessName;
    }

    /**
     * @return int
     */
    public function getShopId(): ?int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId(?int $shopId): void
    {
        $this->shopId = $shopId;
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
    public function getActivityStatus(): ?int
    {
        return $this->activityStatus;
    }

    /**
     * @param int $activityStatus
     */
    public function setActivityStatus(?int $activityStatus): void
    {
        $this->activityStatus = $activityStatus;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     */
    public function setDesc(?string $desc): void
    {
        $this->desc = $desc;
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
     * @return string
     */
    public function getFeature(): ?string
    {
        return $this->feature;
    }

    /**
     * @param string $feature
     */
    public function setFeature(?string $feature): void
    {
        $this->feature = $feature;
    }

    /**
     * @return string
     */
    public function getActivityParamsJson(): ?string
    {
        return $this->activityParamsJson;
    }

    /**
     * @param string $activityParamsJson
     */
    public function setActivityParamsJson(?string $activityParamsJson): void
    {
        $this->activityParamsJson = $activityParamsJson;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}