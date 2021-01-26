<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponGroupExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\CouponCalculatedExtDTO;

/**
 * 
 * @author Baymax
 * @create Fri Nov 02 09:43:02 CST 2018
 */
class CalculatedCouponExtDTO implements \JsonSerializable {

    /**
     * 卡券id
     * @var int
     */
    private $id;

    /**
     * 券组信息
     * @var CouponGroupExtDTO
     */
    private $couponGroupExtDTO;

    /**
     * 
     * @var CouponCalculatedExtDTO
     */
    private $calculatedExtDTO;



    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return CouponGroupExtDTO
     */
    public function getCouponGroupExtDTO(): ?CouponGroupExtDTO
    {
        return $this->couponGroupExtDTO;
    }

    /**
     * @param CouponGroupExtDTO $couponGroupExtDTO
     */
    public function setCouponGroupExtDTO(?CouponGroupExtDTO $couponGroupExtDTO): void
    {
        $this->couponGroupExtDTO = $couponGroupExtDTO;
    }

    /**
     * @return CouponCalculatedExtDTO
     */
    public function getCalculatedExtDTO(): ?CouponCalculatedExtDTO
    {
        return $this->calculatedExtDTO;
    }

    /**
     * @param CouponCalculatedExtDTO $calculatedExtDTO
     */
    public function setCalculatedExtDTO(?CouponCalculatedExtDTO $calculatedExtDTO): void
    {
        $this->calculatedExtDTO = $calculatedExtDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}