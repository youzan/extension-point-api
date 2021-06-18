<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;

use Com\Youzan\Cloud\Extension\Param\Model\ActivityResponse;

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
     * 
     * @var bool
     */
    private $supportDiscountZero;

    /**
     * 
     * @var int
     */
    private $test;



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

    /**
     * @return int
     */
    public function getTest(): ?int
    {
        return $this->test;
    }

    /**
     * @param int $test
     */
    public function setTest(?int $test): void
    {
        $this->test = $test;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}