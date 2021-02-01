<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 
 * @author Baymax
 * @create Fri Nov 02 09:45:30 CST 2018
 */
class CouponCalculatedExtDTO implements \JsonSerializable {

    /**
     * 
     * @var bool
     */
    private $isAvailable;

    /**
     * 
     * @var int
     */
    private $discountAmount;

    /**
     * 
     * @var string
     */
    private $unavailableReason;



    /**
     * @return bool
     */
    public function getIsAvailable(): ?bool
    {
        return $this->isAvailable;
    }

    /**
     * @param bool $isAvailable
     */
    public function setIsAvailable(?bool $isAvailable): void
    {
        $this->isAvailable = $isAvailable;
    }

    /**
     * @return int
     */
    public function getDiscountAmount(): ?int
    {
        return $this->discountAmount;
    }

    /**
     * @param int $discountAmount
     */
    public function setDiscountAmount(?int $discountAmount): void
    {
        $this->discountAmount = $discountAmount;
    }

    /**
     * @return string
     */
    public function getUnavailableReason(): ?string
    {
        return $this->unavailableReason;
    }

    /**
     * @param string $unavailableReason
     */
    public function setUnavailableReason(?string $unavailableReason): void
    {
        $this->unavailableReason = $unavailableReason;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}