<?php

namespace Com\Youzan\Cloud\Extension\Param\Request;



/**
 * 试用商品列表
 * @author Baymax
 * @create Thu Jun 05 15:08:41 CST 2025
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
     * 商品自定义商品编码，商家可以自定义参数，支持英文和数字组合，一般用于和外部商品对应字段。
     * @var string
     */
    private $itemCode;

    /**
     * 商品自定义规格编码
     * @var string
     */
    private $skuCode;

    /**
     * 下单数量
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
     * @return string
     */
    public function getItemCode(): ?string
    {
        return $this->itemCode;
    }

    /**
     * @param string $itemCode
     */
    public function setItemCode(?string $itemCode): void
    {
        $this->itemCode = $itemCode;
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