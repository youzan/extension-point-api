<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 凭证对象
 * @author Baymax
 * @create 2021-07-21 23:20:35.0
 */
class VoucherIdentityExtPointDTO implements \JsonSerializable {

    /**
     * 外部凭证id
     * @var int
     */
    private $thirdVoucherId;

    /**
     * 内部凭证id
     * @var int
     */
    private $innerCouponId;

    /**
     * 凭证类型
     * @var int
     */
    private $couponType;



    /**
     * @return int
     */
    public function getThirdVoucherId(): ?int
    {
        return $this->thirdVoucherId;
    }

    /**
     * @param int $thirdVoucherId
     */
    public function setThirdVoucherId(?int $thirdVoucherId): void
    {
        $this->thirdVoucherId = $thirdVoucherId;
    }

    /**
     * @return int
     */
    public function getInnerCouponId(): ?int
    {
        return $this->innerCouponId;
    }

    /**
     * @param int $innerCouponId
     */
    public function setInnerCouponId(?int $innerCouponId): void
    {
        $this->innerCouponId = $innerCouponId;
    }

    /**
     * @return int
     */
    public function getCouponType(): ?int
    {
        return $this->couponType;
    }

    /**
     * @param int $couponType
     */
    public function setCouponType(?int $couponType): void
    {
        $this->couponType = $couponType;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}