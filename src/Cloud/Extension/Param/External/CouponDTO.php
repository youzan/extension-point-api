<?php

namespace Com\Youzan\Cloud\Extension\Param\External;



/**
 * 发放优惠券列表
 * @author Baymax
 * @create 2020-03-10 15:44:13.0
 */
class CouponDTO implements \JsonSerializable {

    /**
     * 优惠券发放id
     * @var int
     */
    private $couponId;

    /**
     * 优惠券发放数量
     * @var int
     */
    private $number;



    /**
     * @return int
     */
    public function getCouponId(): int
    {
        return $this->couponId;
    }

    /**
     * @param int $couponId
     */
    public function setCouponId(int $couponId): void
    {
        $this->couponId = $couponId;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}