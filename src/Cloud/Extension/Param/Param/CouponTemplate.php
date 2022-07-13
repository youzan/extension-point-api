<?php

namespace Com\Youzan\Cloud\Extension\Param\Param;



/**
 *  
 * @author Baymax
 * @create Sat Apr 09 18:52:00 CST 2022
 */
class CouponTemplate implements \JsonSerializable {

    /**
     *  
     * @var int
     */
    private $kdtId;

    /**
     *  
     * @var int
     */
    private $activityId;

    /**
     *  
     * @var string
     */
    private $alias;

    /**
     *  
     * @var string
     */
    private $title;

    /**
     *  
     * @var string
     */
    private $description;

    /**
     *  
     * @var int
     */
    private $status;

    /**
     *  
     * @var int
     */
    private $preferentialMode;

    /**
     *  
     * @var int
     */
    private $activityTypeGroup;

    /**
     *  
     * @var int
     */
    private $value;

    /**
     *  
     * @var int
     */
    private $minValue;

    /**
     *  
     * @var int
     */
    private $maxValue;

    /**
     *  
     * @var bool
     */
    private $isDeleted;

    /**
     *  
     * @var int
     */
    private $thresholdType;

    /**
     *  
     * @var int
     */
    private $thresholdPiece;

    /**
     *  
     * @var int
     */
    private $thresholdAmount;



    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
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
    public function getAlias(): ?string
    {
        return $this->alias;
    }

    /**
     * @param string $alias
     */
    public function setAlias(?string $alias): void
    {
        $this->alias = $alias;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getPreferentialMode(): ?int
    {
        return $this->preferentialMode;
    }

    /**
     * @param int $preferentialMode
     */
    public function setPreferentialMode(?int $preferentialMode): void
    {
        $this->preferentialMode = $preferentialMode;
    }

    /**
     * @return int
     */
    public function getActivityTypeGroup(): ?int
    {
        return $this->activityTypeGroup;
    }

    /**
     * @param int $activityTypeGroup
     */
    public function setActivityTypeGroup(?int $activityTypeGroup): void
    {
        $this->activityTypeGroup = $activityTypeGroup;
    }

    /**
     * @return int
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(?int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getMinValue(): ?int
    {
        return $this->minValue;
    }

    /**
     * @param int $minValue
     */
    public function setMinValue(?int $minValue): void
    {
        $this->minValue = $minValue;
    }

    /**
     * @return int
     */
    public function getMaxValue(): ?int
    {
        return $this->maxValue;
    }

    /**
     * @param int $maxValue
     */
    public function setMaxValue(?int $maxValue): void
    {
        $this->maxValue = $maxValue;
    }

    /**
     * @return bool
     */
    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    /**
     * @param bool $isDeleted
     */
    public function setIsDeleted(?bool $isDeleted): void
    {
        $this->isDeleted = $isDeleted;
    }

    /**
     * @return int
     */
    public function getThresholdType(): ?int
    {
        return $this->thresholdType;
    }

    /**
     * @param int $thresholdType
     */
    public function setThresholdType(?int $thresholdType): void
    {
        $this->thresholdType = $thresholdType;
    }

    /**
     * @return int
     */
    public function getThresholdPiece(): ?int
    {
        return $this->thresholdPiece;
    }

    /**
     * @param int $thresholdPiece
     */
    public function setThresholdPiece(?int $thresholdPiece): void
    {
        $this->thresholdPiece = $thresholdPiece;
    }

    /**
     * @return int
     */
    public function getThresholdAmount(): ?int
    {
        return $this->thresholdAmount;
    }

    /**
     * @param int $thresholdAmount
     */
    public function setThresholdAmount(?int $thresholdAmount): void
    {
        $this->thresholdAmount = $thresholdAmount;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}