<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Giftpack\GiftPackInfoExtDTO;

/**
 * 子商品（SKU）集合
 * @author Baymax
 * @create 2020-03-24 10:56:53.0
 */
class ValueCardExtProductBuyDTO implements \JsonSerializable {

    /**
     * SKU编号（规格级别,调用方生成,长度不得大于24）
     * @var string
     */
    private $productSkuNo;

    /**
     * 模板面额（分）
     * @var int
     */
    private $originalPrice;

    /**
     * 模板面额实际售价（分）
     * @var int
     */
    private $salePrice;

    /**
     * 库存
     * @var int
     */
    private $stock;

    /**
     * 礼包集合（同充值礼包一样）
     * @var array
     */
    private $giftPacks;



    /**
     * @return string
     */
    public function getProductSkuNo(): ?string
    {
        return $this->productSkuNo;
    }

    /**
     * @param string $productSkuNo
     */
    public function setProductSkuNo(?string $productSkuNo): void
    {
        $this->productSkuNo = $productSkuNo;
    }

    /**
     * @return int
     */
    public function getOriginalPrice(): ?int
    {
        return $this->originalPrice;
    }

    /**
     * @param int $originalPrice
     */
    public function setOriginalPrice(?int $originalPrice): void
    {
        $this->originalPrice = $originalPrice;
    }

    /**
     * @return int
     */
    public function getSalePrice(): ?int
    {
        return $this->salePrice;
    }

    /**
     * @param int $salePrice
     */
    public function setSalePrice(?int $salePrice): void
    {
        $this->salePrice = $salePrice;
    }

    /**
     * @return int
     */
    public function getStock(): ?int
    {
        return $this->stock;
    }

    /**
     * @param int $stock
     */
    public function setStock(?int $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @return array
     */
    public function getGiftPacks(): ?array
    {
        return $this->giftPacks;
    }

    /**
     * @param array $giftPacks
     */
    public function setGiftPacks(?array $giftPacks): void
    {
        $this->giftPacks = $giftPacks;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}