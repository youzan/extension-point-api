<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use DateTime;
use Com\Youzan\Cloud\Extension\Param\Coupon\CustomerIdentityDTO;

/**
 * 
 * @author Baymax
 * @create 2018-09-28 18:50:33.0
 */
class CouponUsedInfoExtDTO implements \JsonSerializable {

    /**
     * 卡券使用信息id
     * @var int
     */
    private $id;

    /**
     * 使用时间
     * @var int
     */
    private $usedAt;

    /**
     * 实际优惠金额
     * @var int
     */
    private $realPreferentialValue;

    /**
     * 订单号
     * @var string
     */
    private $orderNo;

    /**
     * 
     * @var CustomerIdentityDTO
     */
    private $customerIdentityDTO;



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
    public function getUsedAt(): int
    {
        return $this->usedAt;
    }

    /**
     * @param int $usedAt
     */
    public function setUsedAt(int $usedAt): void
    {
        $this->usedAt = $usedAt;
    }

    /**
     * @return int
     */
    public function getRealPreferentialValue(): int
    {
        return $this->realPreferentialValue;
    }

    /**
     * @param int $realPreferentialValue
     */
    public function setRealPreferentialValue(int $realPreferentialValue): void
    {
        $this->realPreferentialValue = $realPreferentialValue;
    }

    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @param string $orderNo
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}