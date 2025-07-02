<?php

namespace Com\Youzan\Cloud\Extension\Param\Response;



/**
 * 商品信息
 * @author Baymax
 * @create Tue May 27 19:12:50 CST 2025
 */
class GoodsDTO implements \JsonSerializable {

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
     * 购买数量
     * @var int
     */
    private $num;



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

    /**
     * @return int
     */
    public function getNum(): ?int
    {
        return $this->num;
    }

    /**
     * @param int $num
     */
    public function setNum(?int $num): void
    {
        $this->num = $num;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}