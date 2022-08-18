<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\GoodsResponse;

/**
 * 外部优惠详情（如果多个活动，需要按照执行顺序排序）
 * @author Baymax
 * @create Wed Apr 20 09:57:06 CST 2022
 */
class ActivityResponse implements \JsonSerializable {

    /**
     * 活动id（ &amp;gt; 0 的整数，可从1开始延续，区分不同活动）
     * @var int
     */
    private $activityId;

    /**
     * 外部优惠活动名称
     * @var string
     */
    private $activityName;

    /**
     * 活动级别（商品级优惠 &#x3D; &quot;goods&quot; / 订单级优惠 &#x3D; &quot;order&quot;），目前必须传订单级
     * @var string
     */
    private $promotionLevel;

    /**
     * 外部活动总优惠（单位/分）
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