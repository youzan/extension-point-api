<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 优惠活动详情
 * @author Baymax
 * @create 2020-06-11 11:03:35.0
 */
class Activity implements \JsonSerializable {

    /**
     * 优惠活动类型
     * @var int
     */
    private $appType;

    /**
     * 优惠活动id
     * @var int
     */
    private $activityId;

    /**
     * 优惠活动级别：order、goods
     * @var string
     */
    private $promotionLevel;

    /**
     * 活动优惠金额/分
     * @var int
     */
    private $decrease;

    /**
     * 附加信息
     * @var string
     */
    private $extra;



    /**
     * @return int
     */
    public function getAppType(): int
    {
        return $this->appType;
    }

    /**
     * @param int $appType
     */
    public function setAppType(int $appType): void
    {
        $this->appType = $appType;
    }

    /**
     * @return int
     */
    public function getActivityId(): int
    {
        return $this->activityId;
    }

    /**
     * @param int $activityId
     */
    public function setActivityId(int $activityId): void
    {
        $this->activityId = $activityId;
    }

    /**
     * @return string
     */
    public function getPromotionLevel(): string
    {
        return $this->promotionLevel;
    }

    /**
     * @param string $promotionLevel
     */
    public function setPromotionLevel(string $promotionLevel): void
    {
        $this->promotionLevel = $promotionLevel;
    }

    /**
     * @return int
     */
    public function getDecrease(): int
    {
        return $this->decrease;
    }

    /**
     * @param int $decrease
     */
    public function setDecrease(int $decrease): void
    {
        $this->decrease = $decrease;
    }

    /**
     * @return string
     */
    public function getExtra(): string
    {
        return $this->extra;
    }

    /**
     * @param string $extra
     */
    public function setExtra(string $extra): void
    {
        $this->extra = $extra;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}