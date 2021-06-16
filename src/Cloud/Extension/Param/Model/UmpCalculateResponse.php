<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\ActivityResponse;
use Com\Youzan\Cloud\Extension\Param\Model\OuterPromotionConfig;

/**
 * 外部接口出参
 * @author Baymax
 * @create 2020-06-11 11:03:35.0
 */
class UmpCalculateResponse implements \JsonSerializable {

    /**
     * 外部优惠详情（如果多个活动，需要按照执行顺序排序）
     * @var array
     */
    private $activities;

    /**
     * 外部优惠总金额（单位/分）
     * @var int
     */
    private $decrease;

    /**
     * 外部优惠配置
     * @var OuterPromotionConfig
     */
    private $outerPromotionConfig;



    /**
     * @return array
     */
    public function getActivities(): ?array
    {
        return $this->activities;
    }

    /**
     * @param array $activities
     */
    public function setActivities(?array $activities): void
    {
        $this->activities = $activities;
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
     * @return OuterPromotionConfig
     */
    public function getOuterPromotionConfig(): ?OuterPromotionConfig
    {
        return $this->outerPromotionConfig;
    }

    /**
     * @param OuterPromotionConfig $outerPromotionConfig
     */
    public function setOuterPromotionConfig(?OuterPromotionConfig $outerPromotionConfig): void
    {
        $this->outerPromotionConfig = $outerPromotionConfig;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}