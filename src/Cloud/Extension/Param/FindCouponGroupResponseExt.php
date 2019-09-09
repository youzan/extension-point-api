<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\CouponGroupBaseExt;

/**
 * 返回参数
 * @author Baymax
 * @create 2018-09-26 19:40:59.0
 */
class FindCouponGroupResponseExt implements \JsonSerializable {

    /**
     * 优惠券组信息
     * @var array
     */
    private $couponGroupBaseExt;



    /**
     * @return array
     */
    public function getCouponGroupBaseExt(): array
    {
        return $this->couponGroupBaseExt;
    }

    /**
     * @param array $couponGroupBaseExt
     */
    public function setCouponGroupBaseExt(array $couponGroupBaseExt): void
    {
        $this->couponGroupBaseExt = $couponGroupBaseExt;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}