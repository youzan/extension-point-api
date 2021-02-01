<?php

namespace Com\Youzan\Cloud\Extension\Param\Trade;



/**
 * 商品sku信息
 * @author Baymax
 * @create 2019-09-04 18:01:28.0
 */
class TicketSkuDTO implements \JsonSerializable {

    /**
     * skuId
     * @var int
     */
    private $skuId;

    /**
     * goodsId
     * @var int
     */
    private $goodsId;

    /**
     * 商品编码
     * @var string
     */
    private $skuCode;



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
    public function getGoodsId(): ?int
    {
        return $this->goodsId;
    }

    /**
     * @param int $goodsId
     */
    public function setGoodsId(?int $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @return string
     */
    public function getSkuCode(): ?string
    {
        return $this->skuCode;
    }

    /**
     * @param string $skuCode
     */
    public function setSkuCode(?string $skuCode): void
    {
        $this->skuCode = $skuCode;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}