<?php

namespace Com\Youzan\Cloud\Extension\Param\Model;



/**
 * 外部优惠配置
 * @author Baymax
 * @create 2021-06-17 20:37:21.0
 */
class OuterOrderPromotionConfig implements \JsonSerializable {

    /**
     * 是否支持优惠到0元,默认false不支持
     * @var bool
     */
    private $discountZero;

    /**
     * 
     * @var int
     */
    private $test;



    /**
     * @return bool
     */
    public function getDiscountZero(): ?bool
    {
        return $this->discountZero;
    }

    /**
     * @param bool $discountZero
     */
    public function setDiscountZero(?bool $discountZero): void
    {
        $this->discountZero = $discountZero;
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