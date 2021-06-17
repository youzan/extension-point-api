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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}