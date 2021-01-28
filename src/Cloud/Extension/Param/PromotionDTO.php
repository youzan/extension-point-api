<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 优惠信息
 * @author Baymax
 * @create 2018-10-22 20:30:57.0
 */
class PromotionDTO implements \JsonSerializable {

    /**
     * 不参与优惠金额
     * @var int
     */
    private $canNotUsePromotionAmount;

    /**
     * 参与优惠的商品
     * @var array
     */
    private $joinedGoodsId;

    /**
     * 优惠名称
     * @var string
     */
    private $promotionName;

    /**
     * 优惠券,码类型 优惠券:7; 优惠码:9,10
     * @var int
     */
    private $couponType;

    /**
     * 是否外部优惠券,0 内部优惠券,1 外部优惠券
     * @var int
     */
    private $outerCoupon;

    /**
     * 
     * @var string
     */
    private $promotionAlias;

    /**
     * 
     * @var int
     */
    private $promotionTypeId;

    /**
     * 
     * @var string
     */
    private $promotionTypeName;

    /**
     * 优惠类型
     * @var string
     */
    private $promotionType;

    /**
     * 优惠ID
     * @var int
     */
    private $promotionId;

    /**
     * 优惠级别
     * @var string
     */
    private $changeType;

    /**
     * 使用优惠之后的价格
     * @var int
     */
    private $newValue;

    /**
     * 使用优惠之前的价格
     * @var int
     */
    private $oldValue;

    /**
     * 不可用原因
     * @var string
     */
    private $reason;

    /**
     * 券失效日期
     * @var string
     */
    private $endAt;

    /**
     * 券有效开始时间
     * @var string
     */
    private $startAt;

    /**
     * 优惠券面额, 单位为分
     * @var int
     */
    private $value;

    /**
     * 满减条件（0为无门槛，满XX元可用）
     * @var string
     */
    private $condition;

    /**
     * 满减条件（0为无门槛，满XX元可用中的数字）
     * @var string
     */
    private $originCondition;

    /**
     * 面值
     * @var int
     */
    private $denominations;

    /**
     * 折扣
     * @var int
     */
    private $discount;

    /**
     * 是否可用{
     * @var bool
     */
    private $isAvailable;

    /**
     * 优惠码(券)名称
     * @var string
     */
    private $activityAlias;

    /**
     * 优惠id
     * @var int
     */
    private $activityId;

    /**
     * 活动类型
     * @var string
     */
    private $activityType;

    /**
     * 优惠码
     * @var string
     */
    private $code;



    /**
     * @return int
     */
    public function getCanNotUsePromotionAmount(): int
    {
        return $this->canNotUsePromotionAmount;
    }

    /**
     * @param int $canNotUsePromotionAmount
     */
    public function setCanNotUsePromotionAmount(int $canNotUsePromotionAmount): void
    {
        $this->canNotUsePromotionAmount = $canNotUsePromotionAmount;
    }

    /**
     * @return array
     */
    public function getJoinedGoodsId(): array
    {
        return $this->joinedGoodsId;
    }

    /**
     * @param array $joinedGoodsId
     */
    public function setJoinedGoodsId(array $joinedGoodsId): void
    {
        $this->joinedGoodsId = $joinedGoodsId;
    }

    /**
     * @return string
     */
    public function getPromotionName(): string
    {
        return $this->promotionName;
    }

    /**
     * @param string $promotionName
     */
    public function setPromotionName(string $promotionName): void
    {
        $this->promotionName = $promotionName;
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
    public function getOuterCoupon(): int
    {
        return $this->outerCoupon;
    }

    /**
     * @param int $outerCoupon
     */
    public function setOuterCoupon(int $outerCoupon): void
    {
        $this->outerCoupon = $outerCoupon;
    }

    /**
     * @return string
     */
    public function getPromotionAlias(): string
    {
        return $this->promotionAlias;
    }

    /**
     * @param string $promotionAlias
     */
    public function setPromotionAlias(string $promotionAlias): void
    {
        $this->promotionAlias = $promotionAlias;
    }

    /**
     * @return int
     */
    public function getPromotionTypeId(): int
    {
        return $this->promotionTypeId;
    }

    /**
     * @param int $promotionTypeId
     */
    public function setPromotionTypeId(int $promotionTypeId): void
    {
        $this->promotionTypeId = $promotionTypeId;
    }

    /**
     * @return string
     */
    public function getPromotionTypeName(): string
    {
        return $this->promotionTypeName;
    }

    /**
     * @param string $promotionTypeName
     */
    public function setPromotionTypeName(string $promotionTypeName): void
    {
        $this->promotionTypeName = $promotionTypeName;
    }

    /**
     * @return string
     */
    public function getPromotionType(): string
    {
        return $this->promotionType;
    }

    /**
     * @param string $promotionType
     */
    public function setPromotionType(string $promotionType): void
    {
        $this->promotionType = $promotionType;
    }

    /**
     * @return int
     */
    public function getPromotionId(): int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     */
    public function setPromotionId(int $promotionId): void
    {
        $this->promotionId = $promotionId;
    }

    /**
     * @return string
     */
    public function getChangeType(): string
    {
        return $this->changeType;
    }

    /**
     * @param string $changeType
     */
    public function setChangeType(string $changeType): void
    {
        $this->changeType = $changeType;
    }

    /**
     * @return int
     */
    public function getNewValue(): int
    {
        return $this->newValue;
    }

    /**
     * @param int $newValue
     */
    public function setNewValue(int $newValue): void
    {
        $this->newValue = $newValue;
    }

    /**
     * @return int
     */
    public function getOldValue(): int
    {
        return $this->oldValue;
    }

    /**
     * @param int $oldValue
     */
    public function setOldValue(int $oldValue): void
    {
        $this->oldValue = $oldValue;
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

    /**
     * @return string
     */
    public function getEndAt(): string
    {
        return $this->endAt;
    }

    /**
     * @param string $endAt
     */
    public function setEndAt(string $endAt): void
    {
        $this->endAt = $endAt;
    }

    /**
     * @return string
     */
    public function getStartAt(): string
    {
        return $this->startAt;
    }

    /**
     * @param string $startAt
     */
    public function setStartAt(string $startAt): void
    {
        $this->startAt = $startAt;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getCondition(): string
    {
        return $this->condition;
    }

    /**
     * @param string $condition
     */
    public function setCondition(string $condition): void
    {
        $this->condition = $condition;
    }

    /**
     * @return string
     */
    public function getOriginCondition(): string
    {
        return $this->originCondition;
    }

    /**
     * @param string $originCondition
     */
    public function setOriginCondition(string $originCondition): void
    {
        $this->originCondition = $originCondition;
    }

    /**
     * @return int
     */
    public function getDenominations(): int
    {
        return $this->denominations;
    }

    /**
     * @param int $denominations
     */
    public function setDenominations(int $denominations): void
    {
        $this->denominations = $denominations;
    }

    /**
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     */
    public function setDiscount(int $discount): void
    {
        $this->discount = $discount;
    }

    /**
     * @return bool
     */
    public function getIsAvailable(): bool
    {
        return $this->isAvailable;
    }

    /**
     * @param bool $isAvailable
     */
    public function setIsAvailable(bool $isAvailable): void
    {
        $this->isAvailable = $isAvailable;
    }

    /**
     * @return string
     */
    public function getActivityAlias(): string
    {
        return $this->activityAlias;
    }

    /**
     * @param string $activityAlias
     */
    public function setActivityAlias(string $activityAlias): void
    {
        $this->activityAlias = $activityAlias;
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
     * @return string
     */
    public function getActivityType(): string
    {
        return $this->activityType;
    }

    /**
     * @param string $activityType
     */
    public function setActivityType(string $activityType): void
    {
        $this->activityType = $activityType;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}