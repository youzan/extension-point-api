<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;

use DateTime;
use StdClass;

/**
 * 活动信息
 * @author Baymax
 * @create 2021-05-06 20:06:45.0
 */
class ExtPointActivityBaseInfo implements \JsonSerializable {

    /**
     * 活动ID，调用youzan.ump.activity.add.common接口获取
     * @var int
     */
    private $activityId;

    /**
     * 活动alias别名，调用youzan.ump.activity.add.common接口获取
     * @var string
     */
    private $alias;

    /**
     * 活动插件类型，唯一插件识别码，联系营销中心注册插件时获取
     * @var int
     */
    private $appType;

    /**
     * 活动状态，活动有效（0），活动已删除（1），活动已失效（2）
     * @var int
     */
    private $status;

    /**
     * 活动开始时间，格式：毫秒级时间戳
     * @var int
     */
    private $startAt;

    /**
     * 活动结束时间，格式：毫秒级时间戳
     * @var int
     */
    private $endAt;

    /**
     * 活动扩展信息，如活动创建时候的扩展属性值，如满减送送的赠品信息等
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