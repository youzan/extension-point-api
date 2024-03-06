<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\ActivityResponse;

/**
 * 外部接口出参
 * @author Baymax
 * @create Wed Aug 09 16:47:40 CST 2023
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
     * 是否支持优惠到0元,默认false不支持
     * @var bool
     */
    private $supportDiscountZero;



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
     * @return bool
     */
    public function getSupportDiscountZero(): ?bool
    {
        return $this->supportDiscountZero;
    }

    /**
     * @param bool $supportDiscountZero
     */
    public function setSupportDiscountZero(?bool $supportDiscountZero): void
    {
        $this->supportDiscountZero = $supportDiscountZero;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}