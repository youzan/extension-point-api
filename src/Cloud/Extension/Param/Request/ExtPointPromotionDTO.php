<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 商品优惠
 * @author Baymax
 * @create 2021-01-29 16:16:00.0
 */
class ExtPointPromotionDTO implements \JsonSerializable {

    /**
     * 优惠类型
     * @var string
     */
    private $promotionType;

    /**
     * 优惠类型ID
     * @var int
     */
    private $promotionTypeId;

    /**
     * 优惠类型名称
     * @var string
     */
    private $promotionTypeName;

    /**
     * 优惠活动id
     * @var int
     */
    private $promotionId;

    /**
     * 优惠活动别名
     * @var string
     */
    private $promotionAlias;

    /**
     * 优惠活动名称
     * @var string
     */
    private $promotionTitle;

    /**
     * 优惠级别。order：订单、goods：商品
     * @var string
     */
    private $promotionLevel;

    /**
     * 活动自定义描述
     * @var array
     */
    private $promotionDesc;

    /**
     * 优惠价格
     * @var array
     */
    private $decrease;

    /**
     * 额外信息
     * @var array
     */
    private $extra;



    /**
     * @return string
     */
    public function getPromotionType(): ?string
    {
        return $this->promotionType;
    }

    /**
     * @param string $promotionType
     */
    public function setPromotionType(?string $promotionType): void
    {
        $this->promotionType = $promotionType;
    }

    /**
     * @return int
     */
    public function getPromotionTypeId(): ?int
    {
        return $this->promotionTypeId;
    }

    /**
     * @param int $promotionTypeId
     */
    public function setPromotionTypeId(?int $promotionTypeId): void
    {
        $this->promotionTypeId = $promotionTypeId;
    }

    /**
     * @return string
     */
    public function getPromotionTypeName(): ?string
    {
        return $this->promotionTypeName;
    }

    /**
     * @param string $promotionTypeName
     */
    public function setPromotionTypeName(?string $promotionTypeName): void
    {
        $this->promotionTypeName = $promotionTypeName;
    }

    /**
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     */
    public function setPromotionId(?int $promotionId): void
    {
        $this->promotionId = $promotionId;
    }

    /**
     * @return string
     */
    public function getPromotionAlias(): ?string
    {
        return $this->promotionAlias;
    }

    /**
     * @param string $promotionAlias
     */
    public function setPromotionAlias(?string $promotionAlias): void
    {
        $this->promotionAlias = $promotionAlias;
    }

    /**
     * @return string
     */
    public function getPromotionTitle(): ?string
    {
        return $this->promotionTitle;
    }

    /**
     * @param string $promotionTitle
     */
    public function setPromotionTitle(?string $promotionTitle): void
    {
        $this->promotionTitle = $promotionTitle;
    }

    /**
     * @return string
     */
    public function getPromotionLevel(): ?string
    {
        return $this->promotionLevel;
    }

    /**
     * @param string $promotionLevel
     */
    public function setPromotionLevel(?string $promotionLevel): void
    {
        $this->promotionLevel = $promotionLevel;
    }

    /**
     * @return array
     */
    public function getPromotionDesc(): ?array
    {
        return $this->promotionDesc;
    }

    /**
     * @param array $promotionDesc
     */
    public function setPromotionDesc(?array $promotionDesc): void
    {
        $this->promotionDesc = $promotionDesc;
    }

    /**
     * @return array
     */
    public function getDecrease(): ?array
    {
        return $this->decrease;
    }

    /**
     * @param array $decrease
     */
    public function setDecrease(?array $decrease): void
    {
        $this->decrease = $decrease;
    }

    /**
     * @return array
     */
    public function getExtra(): ?array
    {
        return $this->extra;
    }

    /**
     * @param array $extra
     */
    public function setExtra(?array $extra): void
    {
        $this->extra = $extra;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}