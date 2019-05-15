<?php

namespace Com\Youzan\Cloud\Extension\Param\Coupon;

use DateTime;
use Com\Youzan\Cloud\Extension\Param\Coupon\CustomerIdentityDTO;

/**
 * 
 * @author Baymax
 * @create Fri Sep 28 18:50:33 CST 2018
 */
class CouponUsedInfoExtDTO implements \JsonSerializable {

    /**
     * 卡券使用信息id
     * @var int
     */
    private $id;

    /**
     * 使用时间
     * @var DateTime
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
     * @return DateTime
     */
    public function getUsedAt(): DateTime
    {
        return $this->usedAt;
    }

    /**
     * @param DateTime $usedAt
     */
    public function setUsedAt(DateTime $usedAt): void
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