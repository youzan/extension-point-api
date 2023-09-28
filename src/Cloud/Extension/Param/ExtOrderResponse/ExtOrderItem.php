<?php

namespace Com\Youzan\Cloud\Extension\Param\ExtOrderResponse;



/**
 * 单据明细
 * @author Baymax
 * @create Tue Sep 26 14:39:27 CST 2023
 */
class ExtOrderItem implements \JsonSerializable {

    /**
     * 单据明细编号，由外部系统生成
     * @var string
     */
    private $itemBizNo;

    /**
     * 商品Id，有赞生成的店铺下商品唯一id，平台唯一。可以通过列表接口如youzan.items.onsale.get （查询出售中商品）和 youzan.items.inventory.get （查询仓库中商品）获取
     * @var int
     */
    private $itemId;

    /**
     * 商品规格Id，微商城店铺商品规格标识（同一商品Id下，规格id唯一）可以通过youzan.item.get(商品详情)获取，无规格商品可以不传，系统会默认为1
     * @var int
     */
    private $skuId;

    /**
     * 商品自定义商品编码，商家可以自定义参数，支持英文和数字组合，一般用于和外部商品对应字段。
     * @var string
     */
    private $itemNo;

    /**
     * 商品规格信息，多规格通过空格间隔，例如 ”XXL 白“
     * @var string
     */
    private $skuInfo;

    /**
     * 商品名称
     * @var string
     */
    private $itemTitle;

    /**
     * 商品图片链接，如果无可不传
     * @var string
     */
    private $itemImageUrl;

    /**
     * 单据中下单商品数量
     * @var int
     */
    private $num;

    /**
     * 单据明细产生的金额，单位: 分，订单金额不做限制，退款单和无原单退款单必须小于等于0
     * @var int
     */
    private $amount;

    /**
     * 商品原价，单位: 分，必须为非负数
     * @var int
     */
    private $originPrice;



    /**
     * @return string
     */
    public function getItemBizNo(): ?string
    {
        return $this->itemBizNo;
    }

    /**
     * @param string $itemBizNo
     */
    public function setItemBizNo(?string $itemBizNo): void
    {
        $this->itemBizNo = $itemBizNo;
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

    /**
     * @return string
     */
    public function getItemNo(): ?string
    {
        return $this->itemNo;
    }

    /**
     * @param string $itemNo
     */
    public function setItemNo(?string $itemNo): void
    {
        $this->itemNo = $itemNo;
    }

    /**
     * @return string
     */
    public function getSkuInfo(): ?string
    {
        return $this->skuInfo;
    }

    /**
     * @param string $skuInfo
     */
    public function setSkuInfo(?string $skuInfo): void
    {
        $this->skuInfo = $skuInfo;
    }

    /**
     * @return string
     */
    public function getItemTitle(): ?string
    {
        return $this->itemTitle;
    }

    /**
     * @param string $itemTitle
     */
    public function setItemTitle(?string $itemTitle): void
    {
        $this->itemTitle = $itemTitle;
    }

    /**
     * @return string
     */
    public function getItemImageUrl(): ?string
    {
        return $this->itemImageUrl;
    }

    /**
     * @param string $itemImageUrl
     */
    public function setItemImageUrl(?string $itemImageUrl): void
    {
        $this->itemImageUrl = $itemImageUrl;
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
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(?int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getOriginPrice(): ?int
    {
        return $this->originPrice;
    }

    /**
     * @param int $originPrice
     */
    public function setOriginPrice(?int $originPrice): void
    {
        $this->originPrice = $originPrice;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}