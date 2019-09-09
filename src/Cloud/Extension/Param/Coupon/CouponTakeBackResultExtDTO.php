<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;



/**
 * 响应参数
 * @author Baymax
 * @create 2018-09-28 19:26:29.0
 */
class CouponTakeBackResultExtDTO implements \JsonSerializable {

    /**
     * 是否收回成功
     * @var bool
     */
    private $isSuccess;



    /**
     * @return bool
     */
    public function getIsSuccess(): bool
    {
        return $this->isSuccess;
    }

    /**
     * @param bool $isSuccess
     */
    public function setIsSuccess(bool $isSuccess): void
    {
        $this->isSuccess = $isSuccess;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}