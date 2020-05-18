<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use DateTime;

/**
 * 
 * @author Baymax
 * @create 2020-05-18 16:24:01.0
 */
class CloudVerifyVoucherDTO implements \JsonSerializable {

    /**
     * 凭证Id
     * @var int
     */
    private $couponId;

    /**
     * 优惠凭证类型，0：优惠券，1：优惠码，2：三方券
     * @var int
     */
    private $couponType;

    /**
     * 活动Id
     * @var int
     */
    private $activityId;

    /**
     * 券归属人id
     * @var int
     */
    private $userId;

    /**
     * 凭证有效期开始时间
     * @var int
     */
    private $validStartTime;

    /**
     * 凭证有效期结束时间
     * @var int
     */
    private $validEndTime;

    /**
     * 是否可用
     * @var bool
     */
    private $available;

    /**
     * 不可用原因
     * @var string
     */
    private $reason;



    /**
     * @return int
     */
    public function getCouponId(): int
    {
        return $this->couponId;
    }

    /**
     * @param int $couponId
     */
    public function setCouponId(int $couponId): void
    {
        $this->couponId = $couponId;
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
    public function getActivityId(): int
    {
        return $this->activityId;
    }

    /**
     * @param int $activityId
     */
    public function setActivityId(int $activityId): void
    {
        $this->activityId = $activityId;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getValidStartTime(): int
    {
        return $this->validStartTime;
    }

    /**
     * @param int $validStartTime
     */
    public function setValidStartTime(int $validStartTime): void
    {
        $this->validStartTime = $validStartTime;
    }

    /**
     * @return int
     */
    public function getValidEndTime(): int
    {
        return $this->validEndTime;
    }

    /**
     * @param int $validEndTime
     */
    public function setValidEndTime(int $validEndTime): void
    {
        $this->validEndTime = $validEndTime;
    }

    /**
     * @return bool
     */
    public function getAvailable(): bool
    {
        return $this->available;
    }

    /**
     * @param bool $available
     */
    public function setAvailable(bool $available): void
    {
        $this->available = $available;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}