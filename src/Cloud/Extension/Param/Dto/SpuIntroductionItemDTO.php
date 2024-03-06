<?php

namespace Com\Youzan\Cloud\Extension\Param\Dto;

use Com\Youzan\Cloud\Extension\Param\Introduction\ItemMarkParam;

use Com\Youzan\Cloud\Extension\Param\Introduction\ItemCateProParam;
use Com\Youzan\Cloud\Extension\Param\Introduction\Picture;
use Com\Youzan\Cloud\Extension\Param\Price\ItemPriceParam;

/**
 *  单据明细
 * @author Baymax
 * @create Tue Apr 04 17:41:47 CST 2023
 */
class SpuIntroductionItemDTO implements \JsonSerializable {

    /**
     * 单据明细 id
     * @var int
     */
    private $orderItemId;

    /**
     * 单据明细编号
     * @var string
     */
    private $orderItemNo;

    /**
     * 临时数据 id
     * @var int
     */
    private $tempItemId;

    /**
     * 商品类型能力标属性集
     * @var ItemMarkParam
     */
    private $itemMarkParam;

    /**
     * com.youzan.mall.item.biz.enums.ShipmentTypeEnum商品类型枚举
     * @var int
     */
    private $shipment;

    /**
     * 名称
     * @var string
     */
    private $title;

    /**
     * 商品编码
     * @var string
     */
    private $goodsNo;

    /**
     * 商品条码
     * @var string
     */
    private $barcode;

    /**
     * 更多条码
     * @var array
     */
    private $barcodes;

    /**
     * 商品分类
     * @var int
     */
    private $categoryId;

    /**
     * 商品类目、商品参数
     * @var ItemCateProParam
     */
    private $categoryProperties;

    /**
     * 存货类别：0产成品；1半成品；2原材料
     * @var int
     */
    private $inventoryType;

    /**
     * 品牌id
     * @var int
     */
    private $brandId;

    /**
     *  图片
     * @var array
     */
    private $picture;

    /**
     * 主视频
     * @var int
     */
    private $videoId;

    /**
     * 图片高度
     * @var int
     */
    private $pictureHeight;

    /**
     * 单位
     * @var string
     */
    private $unit;

    /**
     * 是否展示 sku 图
     * @var bool
     */
    private $skuPictureDisplayConfig;

    /**
     * 规格型号，最多100个字
     * @var string
     */
    private $specifications;

    /**
     * 价格属性集
     * @var ItemPriceParam
     */
    private $itemPriceParam;

    /**
     * 请求来源
     * @var int
     */
    private $source;

    /**
     * 商品制作时长
     * @var int
     */
    private $productionTime;

    /**
     * 是否有网店渠道
     * @var bool
     */
    private $hasOnlineChannel;

    /**
     * 是否有门店渠道
     * @var bool
     */
    private $hasOfflineChannel;

    /**
     * 网店店渠道信息
     * @var string
     */
    private $itemOnlineChannelParamStr;

    /**
     * 门店店渠道信息
     * @var string
     */
    private $itemOfflineChannelParamStr;

    /**
     *  规格信息
     * @var string
     */
    private $itemStockV2ParamStr;



    /**
     * @return int
     */
    public function getOrderItemId(): ?int
    {
        return $this->orderItemId;
    }

    /**
     * @param int $orderItemId
     */
    public function setOrderItemId(?int $orderItemId): void
    {
        $this->orderItemId = $orderItemId;
    }

    /**
     * @return string
     */
    public function getOrderItemNo(): ?string
    {
        return $this->orderItemNo;
    }

    /**
     * @param string $orderItemNo
     */
    public function setOrderItemNo(?string $orderItemNo): void
    {
        $this->orderItemNo = $orderItemNo;
    }

    /**
     * @return int
     */
    public function getTempItemId(): ?int
    {
        return $this->tempItemId;
    }

    /**
     * @param int $tempItemId
     */
    public function setTempItemId(?int $tempItemId): void
    {
        $this->tempItemId = $tempItemId;
    }

    /**
     * @return ItemMarkParam
     */
    public function getItemMarkParam(): ?ItemMarkParam
    {
        return $this->itemMarkParam;
    }

    /**
     * @param ItemMarkParam $itemMarkParam
     */
    public function setItemMarkParam(?ItemMarkParam $itemMarkParam): void
    {
        $this->itemMarkParam = $itemMarkParam;
    }

    /**
     * @return int
     */
    public function getShipment(): ?int
    {
        return $this->shipment;
    }

    /**
     * @param int $shipment
     */
    public function setShipment(?int $shipment): void
    {
        $this->shipment = $shipment;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getGoodsNo(): ?string
    {
        return $this->goodsNo;
    }

    /**
     * @param string $goodsNo
     */
    public function setGoodsNo(?string $goodsNo): void
    {
        $this->goodsNo = $goodsNo;
    }

    /**
     * @return string
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     */
    public function setBarcode(?string $barcode): void
    {
        $this->barcode = $barcode;
    }

    /**
     * @return array
     */
    public function getBarcodes(): ?array
    {
        return $this->barcodes;
    }

    /**
     * @param array $barcodes
     */
    public function setBarcodes(?array $barcodes): void
    {
        $this->barcodes = $barcodes;
    }

    /**
     * @return int
     */
    public function getCategoryId(): ?int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     */
    public function setCategoryId(?int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return ItemCateProParam
     */
    public function getCategoryProperties(): ?ItemCateProParam
    {
        return $this->categoryProperties;
    }

    /**
     * @param ItemCateProParam $categoryProperties
     */
    public function setCategoryProperties(?ItemCateProParam $categoryProperties): void
    {
        $this->categoryProperties = $categoryProperties;
    }

    /**
     * @return int
     */
    public function getInventoryType(): ?int
    {
        return $this->inventoryType;
    }

    /**
     * @param int $inventoryType
     */
    public function setInventoryType(?int $inventoryType): void
    {
        $this->inventoryType = $inventoryType;
    }

    /**
     * @return int
     */
    public function getBrandId(): ?int
    {
        return $this->brandId;
    }

    /**
     * @param int $brandId
     */
    public function setBrandId(?int $brandId): void
    {
        $this->brandId = $brandId;
    }

    /**
     * @return array
     */
    public function getPicture(): ?array
    {
        return $this->picture;
    }

    /**
     * @param array $picture
     */
    public function setPicture(?array $picture): void
    {
        $this->picture = $picture;
    }

    /**
     * @return int
     */
    public function getVideoId(): ?int
    {
        return $this->videoId;
    }

    /**
     * @param int $videoId
     */
    public function setVideoId(?int $videoId): void
    {
        $this->videoId = $videoId;
    }

    /**
     * @return int
     */
    public function getPictureHeight(): ?int
    {
        return $this->pictureHeight;
    }

    /**
     * @param int $pictureHeight
     */
    public function setPictureHeight(?int $pictureHeight): void
    {
        $this->pictureHeight = $pictureHeight;
    }

    /**
     * @return string
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     */
    public function setUnit(?string $unit): void
    {
        $this->unit = $unit;
    }

    /**
     * @return bool
     */
    public function getSkuPictureDisplayConfig(): ?bool
    {
        return $this->skuPictureDisplayConfig;
    }

    /**
     * @param bool $skuPictureDisplayConfig
     */
    public function setSkuPictureDisplayConfig(?bool $skuPictureDisplayConfig): void
    {
        $this->skuPictureDisplayConfig = $skuPictureDisplayConfig;
    }

    /**
     * @return string
     */
    public function getSpecifications(): ?string
    {
        return $this->specifications;
    }

    /**
     * @param string $specifications
     */
    public function setSpecifications(?string $specifications): void
    {
        $this->specifications = $specifications;
    }

    /**
     * @return ItemPriceParam
     */
    public function getItemPriceParam(): ?ItemPriceParam
    {
        return $this->itemPriceParam;
    }

    /**
     * @param ItemPriceParam $itemPriceParam
     */
    public function setItemPriceParam(?ItemPriceParam $itemPriceParam): void
    {
        $this->itemPriceParam = $itemPriceParam;
    }

    /**
     * @return int
     */
    public function getSource(): ?int
    {
        return $this->source;
    }

    /**
     * @param int $source
     */
    public function setSource(?int $source): void
    {
        $this->source = $source;
    }

    /**
     * @return int
     */
    public function getProductionTime(): ?int
    {
        return $this->productionTime;
    }

    /**
     * @param int $productionTime
     */
    public function setProductionTime(?int $productionTime): void
    {
        $this->productionTime = $productionTime;
    }

    /**
     * @return bool
     */
    public function getHasOnlineChannel(): ?bool
    {
        return $this->hasOnlineChannel;
    }

    /**
     * @param bool $hasOnlineChannel
     */
    public function setHasOnlineChannel(?bool $hasOnlineChannel): void
    {
        $this->hasOnlineChannel = $hasOnlineChannel;
    }

    /**
     * @return bool
     */
    public function getHasOfflineChannel(): ?bool
    {
        return $this->hasOfflineChannel;
    }

    /**
     * @param bool $hasOfflineChannel
     */
    public function setHasOfflineChannel(?bool $hasOfflineChannel): void
    {
        $this->hasOfflineChannel = $hasOfflineChannel;
    }

    /**
     * @return string
     */
    public function getItemOnlineChannelParamStr(): ?string
    {
        return $this->itemOnlineChannelParamStr;
    }

    /**
     * @param string $itemOnlineChannelParamStr
     */
    public function setItemOnlineChannelParamStr(?string $itemOnlineChannelParamStr): void
    {
        $this->itemOnlineChannelParamStr = $itemOnlineChannelParamStr;
    }

    /**
     * @return string
     */
    public function getItemOfflineChannelParamStr(): ?string
    {
        return $this->itemOfflineChannelParamStr;
    }

    /**
     * @param string $itemOfflineChannelParamStr
     */
    public function setItemOfflineChannelParamStr(?string $itemOfflineChannelParamStr): void
    {
        $this->itemOfflineChannelParamStr = $itemOfflineChannelParamStr;
    }

    /**
     * @return string
     */
    public function getItemStockV2ParamStr(): ?string
    {
        return $this->itemStockV2ParamStr;
    }

    /**
     * @param string $itemStockV2ParamStr
     */
    public function setItemStockV2ParamStr(?string $itemStockV2ParamStr): void
    {
        $this->itemStockV2ParamStr = $itemStockV2ParamStr;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}