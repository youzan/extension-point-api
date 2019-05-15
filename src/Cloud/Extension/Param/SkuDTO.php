<?php

namespace Com\Youzan\Cloud\Extension\Param;

use Com\Youzan\Cloud\Extension\Param\SkuCompositeId;

/**
 * sku信息
 * @author Baymax
 * @create Mon Oct 22 20:30:57 CST 2018
 */
class SkuDTO implements \JsonSerializable {

    /**
     * 商品现价
     * @var int
     */
    private $currentPrice;

    /**
     * 商品原价
     * @var int
     */
    private $originPrice;

    /**
     * 是否外部商品
     * @var bool
     */
    private $outside;

    /**
     * 商品类型
     * @var string
     */
    private $type;

    /**
     * 属性
     * @var string
     */
    private $skuMap;

    /**
     * sku码
     * @var string
     */
    private $skuCode;

    /**
     * 图片地址
     * @var string
     */
    private $imageUrl;

    /**
     * 商品名称
     * @var string
     */
    private $name;

    /**
     * 复合id
     * @var SkuCompositeId
     */
    private $skuCompositeId;



    /**
     * @return int
     */
    public function getCurrentPrice(): int
    {
        return $this->currentPrice;
    }

    /**
     * @param int $currentPrice
     */
    public function setCurrentPrice(int $currentPrice): void
    {
        $this->currentPrice = $currentPrice;
    }

    /**
     * @return int
     */
    public function getOriginPrice(): int
    {
        return $this->originPrice;
    }

    /**
     * @param int $originPrice
     */
    public function setOriginPrice(int $originPrice): void
    {
        $this->originPrice = $originPrice;
    }

    /**
     * @return bool
     */
    public function getOutside(): bool
    {
        return $this->outside;
    }

    /**
     * @param bool $outside
     */
    public function setOutside(bool $outside): void
    {
        $this->outside = $outside;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getSkuMap(): string
    {
        return $this->skuMap;
    }

    /**
     * @param string $skuMap
     */
    public function setSkuMap(string $skuMap): void
    {
        $this->skuMap = $skuMap;
    }

    /**
     * @return string
     */
    public function getSkuCode(): string
    {
        return $this->skuCode;
    }

    /**
     * @param string $skuCode
     */
    public function setSkuCode(string $skuCode): void
    {
        $this->skuCode = $skuCode;
    }

    /**
     * @return string
     */
    public function getImageUrl(): string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     */
    public function setImageUrl(string $imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return SkuCompositeId
     */
    public function getSkuCompositeId(): SkuCompositeId
    {
        return $this->skuCompositeId;
    }

    /**
     * @param SkuCompositeId $skuCompositeId
     */
    public function setSkuCompositeId(SkuCompositeId $skuCompositeId): void
    {
        $this->skuCompositeId = $skuCompositeId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}