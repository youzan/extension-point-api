<?php

namespace Com\Youzan\Cloud\Extension\Param\Plugin;

use Com\Youzan\Cloud\Extension\Param\External\CouponDTO;

/**
 * 发放优惠券权益
 * @author Baymax
 * @create 2020-03-10 15:44:13.0
 */
class ExtTemplateCouponDTO implements \JsonSerializable {

    /**
     * 发放优惠券列表
     * @var array
     */
    private $couponList;



    /**
     * @return array
     */
    public function getCouponList(): array
    {
        return $this->couponList;
    }

    /**
     * @param array $couponList
     */
    public function setCouponList(array $couponList): void
    {
        $this->couponList = $couponList;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}