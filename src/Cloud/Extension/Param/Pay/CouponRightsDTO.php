<?php

namespace Com\Youzan\Cloud\Extension\Param\Pay;



/**
 * 优惠券权益列表
 * @author Baymax
 * @create 2019-11-22 12:15:26.0
 */
class CouponRightsDTO implements \JsonSerializable {

    /**
     * 优惠券ID
     * @var string
     */
    private $couponId;

    /**
     * 优惠券名称
     * @var string
     */
    private $couponName;

    /**
     * 优惠券张数
     * @var int
     */
    private $count;

    /**
     * 活动状态
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