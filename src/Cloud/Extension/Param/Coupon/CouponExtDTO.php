<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CouponGroupExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\CouponUsedInfoExtDTO;
use Com\Youzan\Cloud\Extension\Param\Coupon\CustomerIdentityDTO;
use DateTime;

/**
 * 卡券信息
 * @author Baymax
 * @create 2018-09-28 18:50:33.0
 */
class CouponExtDTO implements \JsonSerializable {

    /**
     * 
     * @var CouponGroupExtDTO
     */
    private $couponGroupExtDTO;

    /**
     * 
     * @var CouponUsedInfoExtDTO
     */
    private $couponUsedInfoExtDTO;

    /**
     * 
     * @var CustomerIdentityDTO
     */
    private $customerIdentityDTO;

    /**
     * 
     * @var int
     */
    private $id;

    /**
     * 核销码
     * @var int
     */
    private $verifyCode;

    /**
     * 核销码:0. 未使用;1. 冻结中; 2. 已使用
     * @var int
     */
    private $status;

    /**
     * 
     * @var int
     */
    private $takeAt;



    /**
     * @return CouponGroupExtDTO
     */
    public function getCouponGroupExtDTO(): CouponGroupExtDTO
    {
        return $this->couponGroupExtDTO;
    }

    /**
     * @param CouponGroupExtDTO $couponGroupExtDTO
     */
    public function setCouponGroupExtDTO(CouponGroupExtDTO $couponGroupExtDTO): void
    {
        $this->couponGroupExtDTO = $couponGroupExtDTO;
    }

    /**
     * @return CouponUsedInfoExtDTO
     */
    public function getCouponUsedInfoExtDTO(): CouponUsedInfoExtDTO
    {
        return $this->couponUsedInfoExtDTO;
    }

    /**
     * @param CouponUsedInfoExtDTO $couponUsedInfoExtDTO
     */
    public function setCouponUsedInfoExtDTO(CouponUsedInfoExtDTO $couponUsedInfoExtDTO): void
    {
        $this->couponUsedInfoExtDTO = $couponUsedInfoExtDTO;
    }

    /**
     * @return CustomerIdentityDTO
     */
    public function getCustomerIdentityDTO(): CustomerIdentityDTO
    {
        return $this->customerIdentityDTO;
    }

    /**
     * @param CustomerIdentityDTO $customerIdentityDTO
     */
    public function setCustomerIdentityDTO(CustomerIdentityDTO $customerIdentityDTO): void
    {
        $this->customerIdentityDTO = $customerIdentityDTO;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getVerifyCode(): int
    {
        return $this->verifyCode;
    }

    /**
     * @param int $verifyCode
     */
    public function setVerifyCode(int $verifyCode): void
    {
        $this->verifyCode = $verifyCode;
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

    /**
     * @return int
     */
    public function getTakeAt(): int
    {
        return $this->takeAt;
    }

    /**
     * @param int $takeAt
     */
    public function setTakeAt(int $takeAt): void
    {
        $this->takeAt = $takeAt;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}