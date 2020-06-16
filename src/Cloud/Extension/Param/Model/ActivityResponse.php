<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\GoodsResponse;

/**
 * 外部优惠活动详情
 * @author Baymax
 * @create Thu Jun 11 11:03:35 CST 2020
 */
class ActivityResponse implements \JsonSerializable {

    /**
     * 外部优惠活动id
     * @var int
     */
    private $activityId;

    /**
     * 外部优惠活动名称
     * @var string
     */
    private $activityName;

    /**
     * 外部优惠活动级别：order、goods（目前仅支持order）
     * @var string
     */
    private $promotionLevel;

    /**
     * 外部活动优惠金额/分
     * @var int
     */
    private $decrease;

    /**
     * 外部活动涉及的商品优惠详情
     * @var array
     */
    private $goodsResponseList;



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
    public function getActivityName(): string
    {
        return $this->activityName;
    }

    /**
     * @param string $activityName
     */
    public function setActivityName(string $activityName): void
    {
        $this->activityName = $activityName;
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
     * @return array
     */
    public function getGoodsResponseList(): array
    {
        return $this->goodsResponseList;
    }

    /**
     * @param array $goodsResponseList
     */
    public function setGoodsResponseList(array $goodsResponseList): void
    {
        $this->goodsResponseList = $goodsResponseList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}