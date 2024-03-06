<?php

namespace Com\Youzan\Cloud\Extension\Param;



/**
 * 不可购买商品列表
 * @author Baymax
 * @create Mon Feb 26 17:14:37 CST 2024
 */
class UnavailableItemMsgDTO implements \JsonSerializable {

    /**
     * 店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺
     * @var int
     */
    private $kdtId;

    /**
     * shop_id  店铺在有赞的id标识，有赞平台生成，在有赞平台唯一，用于判断信息属于哪一个店铺  66666
     * @var int
     */
    private $shopId;

    /**
     * 商品Id，有赞生成的店铺下商品唯一id，平台唯一
     * @var int
     */
    private $goodsId;

    /**
     * 商品规格Id，微商城店铺商品规格标识（同一商品Id下，规格id唯一）
     * @var int
     */
    private $skuId;

    /**
     * 商品数量
     * @var int
     */
    private $num;

    /**
     * 商品类型
     * @var int
     */
    private $goodsType;

    /**
     * 不可购买原因
     * @var string
     */
    private $reason;



    /**
     * @return int
     */
    public function getKdtId(): ?int
    {
        return $this->kdtId;
    }

    /**
     * @param int $kdtId
     */
    public function setKdtId(?int $kdtId): void
    {
        $this->kdtId = $kdtId;
    }

    /**
     * @return int
     */
    public function getShopId(): ?int
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId(?int $shopId): void
    {
        $this->shopId = $shopId;
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

    /**
     * @return int
     */
    public function getGoodsType(): ?int
    {
        return $this->goodsType;
    }

    /**
     * @param int $goodsType
     */
    public function setGoodsType(?int $goodsType): void
    {
        $this->goodsType = $goodsType;
    }

    /**
     * @return string
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}