<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponGroupExtDTO;

/**
 * 返回参数
 * @author Baymax
 * @create 2018-09-29 21:40:57.0
 */
class CouponGroupListResultExtDTO implements \JsonSerializable {

    /**
     * 券组信息列表
     * @var array
     */
    private $couponGroupExtDTOList;

    /**
     * 总数
     * @var int
     */
    private $total;



    /**
     * @return array
     */
    public function getCouponGroupExtDTOList(): array
    {
        return $this->couponGroupExtDTOList;
    }

    /**
     * @param array $couponGroupExtDTOList
     */
    public function setCouponGroupExtDTOList(array $couponGroupExtDTOList): void
    {
        $this->couponGroupExtDTOList = $couponGroupExtDTOList;
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