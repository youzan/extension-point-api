<?php

namespace Com\Youzan\Cloud\Extension\Param\Extpoint;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\Extpoint\GoodsResponse;

/**
 * 
 * @author Baymax
 * @create 2021-05-06 20:06:45.0
 */
class BrickExtPointResponse implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $activityId;

    /**
     * 
     * @var string
     */
    private $activityName;

    /**
     * 
     * @var string
     */
    private $promotionLevel;

    /**
     * 
     * @var stdClass
     */
    private $activityExtraInfo;

    /**
     * 
     * @var int
     */
    private $decrease;

    /**
     * 
     * @var array
     */
    private $goodsResponseList;



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
    public function getActivityName(): ?string
    {
        return $this->activityName;
    }

    /**
     * @param string $activityName
     */
    public function setActivityName(?string $activityName): void
    {
        $this->activityName = $activityName;
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
     * @return stdClass
     */
    public function getActivityExtraInfo(): ?stdClass
    {
        return $this->activityExtraInfo;
    }

    /**
     * @param stdClass $activityExtraInfo
     */
    public function setActivityExtraInfo(?stdClass $activityExtraInfo): void
    {
        $this->activityExtraInfo = $activityExtraInfo;
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
     * @return array
     */
    public function getGoodsResponseList(): ?array
    {
        return $this->goodsResponseList;
    }

    /**
     * @param array $goodsResponseList
     */
    public function setGoodsResponseList(?array $goodsResponseList): void
    {
        $this->goodsResponseList = $goodsResponseList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}