<?php

namespace Com\Youzan\Cloud\Extension\Param\Price;

use Com\Youzan\Cloud\Extension\Param\Price\GuidePriceSkuParam;

/**
 * 建议售价参数
 * @author Baymax
 * @create Tue Apr 04 17:41:46 CST 2023
 */
class GuidePriceParam implements \JsonSerializable {

    /**
     * 最大建议售价(无规格时）
     * @var int
     */
    private $maxGuidePrice;

    /**
     * 最大建议售价(无规格时）string
     * @var string
     */
    private $maxGuidePriceStr;

    /**
     * 最小建议售价(无规格时
     * @var int
     */
    private $minGuidePrice;

    /**
     * 最小建议售价(无规格时）string
     * @var string
     */
    private $minGuidePriceStr;

    /**
     * 指导价区间 有规格时传值
     * @var array
     */
    private $guidePriceSkuParams;



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
     * @return array
     */
    public function getGuidePriceSkuParams(): ?array
    {
        return $this->guidePriceSkuParams;
    }

    /**
     * @param array $guidePriceSkuParams
     */
    public function setGuidePriceSkuParams(?array $guidePriceSkuParams): void
    {
        $this->guidePriceSkuParams = $guidePriceSkuParams;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}