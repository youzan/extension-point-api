<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 商品列表
 * @author Baymax
 * @create Thu Jun 05 15:08:41 CST 2025
 */
class ItemSoldOutDTO implements \JsonSerializable {

    /**
     * 是否售罄，true-表示售罄，false-表示未售罄
     * @var bool
     */
    private $soldOut;

    /**
     * 商品Id，有赞生成的店铺下商品唯一id，平台唯一。可以通过列表接口如youzan.items.onsale.get （查询出售中商品）和 youzan.items.inventory.get （查询仓库中商品）获取
     * @var int
     */
    private $itemId;

    /**
     * 商品规格Id，微商城店铺商品规格标识（同一商品Id下，规格id唯一）可以通过youzan.item.get(商品详情)获取
     * @var int
     */
    private $skuId;



    /**
     * @return bool
     */
    public function getSoldOut(): ?bool
    {
        return $this->soldOut;
    }

    /**
     * @param bool $soldOut
     */
    public function setSoldOut(?bool $soldOut): void
    {
        $this->soldOut = $soldOut;
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

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}