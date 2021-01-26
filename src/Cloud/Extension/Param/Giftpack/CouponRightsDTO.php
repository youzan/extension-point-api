<?php

namespace Com\Youzan\Cloud\Extension\Param\Giftpack;



/**
 * 优惠券权益列表
 * @author Baymax
 * @create 2020-03-24 10:56:53.0
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
     * 活动状态 1.有效 2.无库存 3.已过期 4.已失效 -1.已删除
     * @var int
     */
    private $status;



    /**
     * @return string
     */
    public function getCouponId(): ?string
    {
        return $this->couponId;
    }

    /**
     * @param string $couponId
     */
    public function setCouponId(?string $couponId): void
    {
        $this->couponId = $couponId;
    }

    /**
     * @return string
     */
    public function getCouponName(): ?string
    {
        return $this->couponName;
    }

    /**
     * @param string $couponName
     */
    public function setCouponName(?string $couponName): void
    {
        $this->couponName = $couponName;
    }

    /**
     * @return int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}