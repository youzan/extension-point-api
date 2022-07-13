<?php

namespace Com\Youzan\Cloud\Extension\Param\DeliveryToWechatProcessRequestDTO;



/**
 * 商品信息列表
 * @author Baymax
 * @create Thu Jan 13 20:45:03 CST 2022
 */
class ItemInfo implements \JsonSerializable {

    /**
     * skuId
     * @var int
     */
    private $skuId;

    /**
     * 商品ID
     * @var int
     */
    private $itemId;

    /**
     * 数量
     * @var int
     */
    private $count;

    /**
     * 外部SkuId
     * @var string
     */
    private $outSkuId;

    /**
     * 外部商品ID
     * @var string
     */
    private $outItemId;



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
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * @param int $itemId
     */
    public function setItemId(?int $itemId): void
    {
        $this->itemId = $itemId;
    }

    /**
     * @return int
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @param int $count
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * @return string
     */
    public function getOutSkuId(): ?string
    {
        return $this->outSkuId;
    }

    /**
     * @param string $outSkuId
     */
    public function setOutSkuId(?string $outSkuId): void
    {
        $this->outSkuId = $outSkuId;
    }

    /**
     * @return string
     */
    public function getOutItemId(): ?string
    {
        return $this->outItemId;
    }

    /**
     * @param string $outItemId
     */
    public function setOutItemId(?string $outItemId): void
    {
        $this->outItemId = $outItemId;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}