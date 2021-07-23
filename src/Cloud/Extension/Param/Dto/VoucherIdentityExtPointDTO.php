<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;



/**
 * 凭证对象
 * @author Baymax
 * @create 2021-07-21 23:20:35.0
 */
class VoucherIdentityExtPointDTO implements \JsonSerializable {

    /**
     * 内部凭证id
     * @var int
     */
    private $couponId;

    /**
     * 凭证类型
     * @var int
     */
    private $couponType;



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