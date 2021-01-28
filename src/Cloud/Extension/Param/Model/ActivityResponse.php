<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\GoodsResponse;

/**
 * 优惠详情（如果多个活动，需要按照执行顺序排序）
 * @author Baymax
 * @create 2020-06-11 11:03:35.0
 */
class ActivityResponse implements \JsonSerializable {

    /**
     * 活动id（ &gt; 0 的整数，可从1开始延续，区分不同活动），开发者自行控制
     * @var int
     */
    private $activityId;

    /**
     * 活动名称
     * @var string
     */
    private $activityName;

    /**
     * 活动级别（商品级优惠 &#x3D; &quot;goods&quot; / 订单级优惠 &#x3D; &quot;order&quot;）
     * @var string
     */
    private $promotionLevel;

    /**
     * 活动总优惠（单位/分）
     * @var int
     */
    private $decrease;

    /**
     * 商品详细优惠
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