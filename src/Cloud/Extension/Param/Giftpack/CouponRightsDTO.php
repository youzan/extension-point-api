<?php

namespace Com\Youzan\Cloud\Extension\Param\Giftpack;



/**
 * 
 * @author Baymax
 * @create 2020-03-24 10:56:53.0
 */
class CouponRightsDTO implements \JsonSerializable {

    /**
     * 
     * @var string
     */
    private $couponId;

    /**
     * 
     * @var string
     */
    private $couponName;

    /**
     * 
     * @var int
     */
    private $count;

    /**
     * 
     * @var int
     */
    private $status;



    /**
     * @return string
     */
    public function getCouponId(): string
    {
        return $this->couponId;
    }

    /**
     * @param string $couponId
     */
    public function setCouponId(string $couponId): void
    {
        $this->couponId = $couponId;
    }

    /**
     * @return string
     */
    public function getCouponName(): string
    {
        return $this->couponName;
    }

    /**
     * @param string $couponName
     */
    public function setCouponName(string $couponName): void
    {
        $this->couponName = $couponName;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(int $count): void
    {
        $this->count = $count;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}