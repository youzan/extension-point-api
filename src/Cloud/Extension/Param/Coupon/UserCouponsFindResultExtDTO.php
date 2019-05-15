<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponExtDTO;

/**
 * 返回参数
 * @author Baymax
 * @create Fri Sep 28 19:54:55 CST 2018
 */
class UserCouponsFindResultExtDTO implements \JsonSerializable {

    /**
     * 卡券信息
     * @var array
     */
    private $couponExtDTO;

    /**
     * 
     * @var int
     */
    private $total;



    /**
     * @return array
     */
    public function getCouponExtDTO(): array
    {
        return $this->couponExtDTO;
    }

    /**
     * @param array $couponExtDTO
     */
    public function setCouponExtDTO(array $couponExtDTO): void
    {
        $this->couponExtDTO = $couponExtDTO;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     */
    public function setTotal(int $total): void
    {
        $this->total = $total;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}