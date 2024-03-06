<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;

use DateTime;
use StdClass;

/**
 *  
 * @author Baymax
 * @create Wed Feb 16 10:43:05 CST 2022
 */
class ExtActivityParam implements \JsonSerializable {

    /**
     * 活动ID
     * @var int
     */
    private $activityId;

    /**
     * 活动插件类型，如第二件半价（115）、限时折扣（11）、满减送（101）等
     * @var int
     */
    private $activityType;

    /**
     * 活动店铺ID
     * @var int
     */
    private $kdtId;

    /**
     * 活动别名
     * @var string
     */
    private $activityAlias;

    /**
     * 活动状态，正常（0）、删除（1）、失效（2）
     * @var int
     */
    private $activityStatus;

    /**
     * 活动名称
     * @var string
     */
    private $name;

    /**
     * 活动描述
     * @var string
     */
    private $desc;

    /**
     * 活动开始时间，单位（毫秒级）时间戳
     * @var int
     */
    private $startAt;

    /**
     * 活动结束时间，单位（毫秒级）时间戳
     * @var int
     */
    private $endAt;

    /**
     * 活动特征信息
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
     * @return int
     */
    public function getActivityType(): ?int
    {
        return $this->activityType;
    }

    /**
     * @param int $activityType
     */
    public function setActivityType(?int $activityType): void
    {
        $this->activityType = $activityType;
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
     * @return string
     */
    public function getActivityAlias(): ?string
    {
        return $this->activityAlias;
    }

    /**
     * @param string $activityAlias
     */
    public function setActivityAlias(?string $activityAlias): void
    {
        $this->activityAlias = $activityAlias;
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