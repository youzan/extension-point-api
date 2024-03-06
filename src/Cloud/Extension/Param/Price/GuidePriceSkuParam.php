<?php

namespace Com\Youzan\Cloud\Extension\Param\Price;



/**
 * 指导价区间 有规格时传值
 * @author Baymax
 * @create Tue Apr 04 17:41:47 CST 2023
 */
class GuidePriceSkuParam implements \JsonSerializable {

    /**
     * 商品规格Id，微商城店铺商品规格标识（同一商品Id下，规格id唯一）可以通过youzan.item.get(商品详情)获取
     * @var int
     */
    private $skuId;

    /**
     * 最大建议售价
     * @var int
     */
    private $maxGuidePrice;

    /**
     * 最大建议售价string
     * @var string
     */
    private $maxGuidePriceStr;

    /**
     * 最小建议售价
     * @var int
     */
    private $minGuidePrice;

    /**
     * 最小建议售价string
     * @var string
     */
    private $minGuidePriceStr;

    /**
     * 规格值 1
     * @var int
     */
    private $s1;

    /**
     * 规格值 2
     * @var int
     */
    private $s2;

    /**
     * 规格值 3
     * @var int
     */
    private $s3;

    /**
     * 规格值 4
     * @var int
     */
    private $s4;

    /**
     * 规格值 5
     * @var int
     */
    private $s5;



    /**
     * @return int
     */
    public function getSkuId(): ?int
    {
        return $this->skuId;
    }

    /**
     * @param int $skuId
     */
    public function setSkuId(?int $skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * @return int
     */
    public function getMaxGuidePrice(): ?int
    {
        return $this->maxGuidePrice;
    }

    /**
     * @param int $maxGuidePrice
     */
    public function setMaxGuidePrice(?int $maxGuidePrice): void
    {
        $this->maxGuidePrice = $maxGuidePrice;
    }

    /**
     * @return string
     */
    public function getMaxGuidePriceStr(): ?string
    {
        return $this->maxGuidePriceStr;
    }

    /**
     * @param string $maxGuidePriceStr
     */
    public function setMaxGuidePriceStr(?string $maxGuidePriceStr): void
    {
        $this->maxGuidePriceStr = $maxGuidePriceStr;
    }

    /**
     * @return int
     */
    public function getMinGuidePrice(): ?int
    {
        return $this->minGuidePrice;
    }

    /**
     * @param int $minGuidePrice
     */
    public function setMinGuidePrice(?int $minGuidePrice): void
    {
        $this->minGuidePrice = $minGuidePrice;
    }

    /**
     * @return string
     */
    public function getMinGuidePriceStr(): ?string
    {
        return $this->minGuidePriceStr;
    }

    /**
     * @param string $minGuidePriceStr
     */
    public function setMinGuidePriceStr(?string $minGuidePriceStr): void
    {
        $this->minGuidePriceStr = $minGuidePriceStr;
    }

    /**
     * @return int
     */
    public function getS1(): ?int
    {
        return $this->s1;
    }

    /**
     * @param int $s1
     */
    public function setS1(?int $s1): void
    {
        $this->s1 = $s1;
    }

    /**
     * @return int
     */
    public function getS2(): ?int
    {
        return $this->s2;
    }

    /**
     * @param int $s2
     */
    public function setS2(?int $s2): void
    {
        $this->s2 = $s2;
    }

    /**
     * @return int
     */
    public function getS3(): ?int
    {
        return $this->s3;
    }

    /**
     * @param int $s3
     */
    public function setS3(?int $s3): void
    {
        $this->s3 = $s3;
    }

    /**
     * @return int
     */
    public function getS4(): ?int
    {
        return $this->s4;
    }

    /**
     * @param int $s4
     */
    public function setS4(?int $s4): void
    {
        $this->s4 = $s4;
    }

    /**
     * @return int
     */
    public function getS5(): ?int
    {
        return $this->s5;
    }

    /**
     * @param int $s5
     */
    public function setS5(?int $s5): void
    {
        $this->s5 = $s5;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}