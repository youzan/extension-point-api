<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use DateTime;

/**
 *  
 * @author Baymax
 * @create Fri Aug 22 11:41:57 CST 2025
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
     * @var string
     */
    private $yzOpenId;

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
     * 不可用原因，当available &#x3D; false时，必填
     * @var string
     */
    private $reason;

    /**
     * 发券来源，divide_coupon：瓜分券，wap_fetch：普通领取
     * @var string
     */
    private $sendSource;



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

    /**
     * @return int
     */
    public function getActivityId(): ?int
    {
        return $this->activityId;
    }

    /**
     * @param int $activityId
     */
    public function setActivityId(?int $activityId): void
    {
        $this->activityId = $activityId;
    }

    /**
     * @return string
     */
    public function getYzOpenId(): ?string
    {
        return $this->yzOpenId;
    }

    /**
     * @param string $yzOpenId
     */
    public function setYzOpenId(?string $yzOpenId): void
    {
        $this->yzOpenId = $yzOpenId;
    }

    /**
     * @return int
     */
    public function getValidStartTime(): ?int
    {
        return $this->validStartTime;
    }

    /**
     * @param int $validStartTime
     */
    public function setValidStartTime(?int $validStartTime): void
    {
        $this->validStartTime = $validStartTime;
    }

    /**
     * @return int
     */
    public function getValidEndTime(): ?int
    {
        return $this->validEndTime;
    }

    /**
     * @param int $validEndTime
     */
    public function setValidEndTime(?int $validEndTime): void
    {
        $this->validEndTime = $validEndTime;
    }

    /**
     * @return bool
     */
    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    /**
     * @param bool $available
     */
    public function setAvailable(?bool $available): void
    {
        $this->available = $available;
    }

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getSendSource(): ?string
    {
        return $this->sendSource;
    }

    /**
     * @param string $sendSource
     */
    public function setSendSource(?string $sendSource): void
    {
        $this->sendSource = $sendSource;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}