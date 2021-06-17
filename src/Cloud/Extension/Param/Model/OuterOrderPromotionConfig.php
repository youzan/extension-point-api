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
    private $isDiscountZero;



    /**
     * @return bool
     */
    public function getIsDiscountZero(): ?bool
    {
        return $this->isDiscountZero;
    }

    /**
     * @param bool $isDiscountZero
     */
    public function setIsDiscountZero(?bool $isDiscountZero): void
    {
        $this->isDiscountZero = $isDiscountZero;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}