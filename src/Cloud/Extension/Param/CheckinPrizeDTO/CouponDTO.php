<?php

namespace Com\Youzan\Cloud\Extension\Param\CheckinPrizeDTO;



/**
 * 
 * @author Baymax
 * @create 2021-04-13 15:16:53.0
 */
class CouponDTO implements \JsonSerializable {

    /**
     * 
     * @var int
     */
    private $couponId;

    /**
     * 
     * @var string
     */
    private $couponTitle;



    /**
     * @return int
     */
    public function getCouponId(): ?int
    {
        return $this->couponId;
    }

    /**
     * @param int $couponId
     */
    public function setCouponId(?int $couponId): void
    {
        $this->couponId = $couponId;
    }

    /**
     * @return string
     */
    public function getCouponTitle(): ?string
    {
        return $this->couponTitle;
    }

    /**
     * @param string $couponTitle
     */
    public function setCouponTitle(?string $couponTitle): void
    {
        $this->couponTitle = $couponTitle;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}