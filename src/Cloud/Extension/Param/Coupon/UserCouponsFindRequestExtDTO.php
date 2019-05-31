<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use Com\Youzan\Cloud\Extension\Param\Coupon\CustomerIdentityDTO;

/**
 * 请求参数
 * @author Baymax
 * @create 2018-09-28 19:54:55.0
 */
class UserCouponsFindRequestExtDTO implements \JsonSerializable {

    /**
     * 用户标识信息
     * @var CustomerIdentityDTO
     */
    private $customerIdentityDTO;

    /**
     * 1. 生效2. 已使用3. 已过期4. 已失效
     * @var int
     */
    private $status;

    /**
     * 券类型 0：优惠券 1：优惠码
     * @var int
     */
    private $couponType;

    /**
     * 页数
     * @var int
     */
    private $pageNo;

    /**
     * 单页大小
     * @var int
     */
    private $pageSize;



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
    public function getCouponType(): int
    {
        return $this->couponType;
    }

    /**
     * @param int $couponType
     */
    public function setCouponType(int $couponType): void
    {
        $this->couponType = $couponType;
    }

    /**
     * @return int
     */
    public function getPageNo(): int
    {
        return $this->pageNo;
    }

    /**
     * @param int $pageNo
     */
    public function setPageNo(int $pageNo): void
    {
        $this->pageNo = $pageNo;
    }

    /**
     * @return int
     */
    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     */
    public function setPageSize(int $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}