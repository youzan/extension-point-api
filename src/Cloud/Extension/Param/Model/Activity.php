<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 应用的活动
 * @author Baymax
 * @create Wed Feb 08 10:55:56 CST 2023
 */
class Activity implements \JsonSerializable {

    /**
     * 活动类型码
     * @var int
     */
    private $appType;

    /**
     * 活动ID
     * @var int
     */
    private $activityId;

    /**
     * 活动级别
     * @var string
     */
    private $promotionLevel;

    /**
     * 活动减价
     * @var int
     */
    private $decrease;

    /**
     * 活动拓展信息
     * @var string
     */
    private $extra;



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
    public function getPromotionLevel(): ?string
    {
        return $this->promotionLevel;
    }

    /**
     * @param string $promotionLevel
     */
    public function setPromotionLevel(?string $promotionLevel): void
    {
        $this->promotionLevel = $promotionLevel;
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

    /**
     * @return string
     */
    public function getExtra(): ?string
    {
        return $this->extra;
    }

    /**
     * @param string $extra
     */
    public function setExtra(?string $extra): void
    {
        $this->extra = $extra;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}