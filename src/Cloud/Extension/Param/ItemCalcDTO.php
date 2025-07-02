<?php

namespace Com\Youzan\Cloud\Extension\Param;

use StdClass;
use Com\Youzan\Cloud\Extension\Param\ExtPointChainedGoodsInfoDTO;

/**
 * 商品信息
 * @author Baymax
 * @create Thu Jan 25 17:40:15 CST 2024
 */
class ItemCalcDTO implements \JsonSerializable {

    /**
     * 扩展字段，自定义带入数据
     * @var stdClass
     */
    private $selfDefineData;

    /**
     * 订单条目id
     * @var int
     */
    private $orderItemId;

    /**
     * 重量(非标品,单位克)
     * @var int
     */
    private $weight;

    /**
     * 购买数量
     * @var int
     */
    private $num;

    /**
     * 原始单价(单位分)
     * @var int
     */
    private $originUnitPrice;

    /**
     * skuId信息
     * @var int
     */
    private $skuId;

    /**
     * 商品id
     * @var int
     */
    private $goodsId;

    /**
     * 优惠后价格
     * @var int
     */
    private $totalPrice;

    /**
     * 商品编码
     * @var string
     */
    private $goodsNo;

    /**
     * 商品条码
     * @var string
     */
    private $goodsBarcode;

    /**
     * 扩展模型
     * @var stdClass
     */
    private $extModelMap;

    /**
     * 是否分销商品
     * @var bool
     */
    private $fenXiaoGood;

    /**
     * 连锁商品模型
     * @var ExtPointChainedGoodsInfoDTO
     */
    private $chainedGoodsInfoDTO;



    /**
     * @return stdClass
     */
    public function getSelfDefineData(): ?stdClass
    {
        return $this->selfDefineData;
    }

    /**
     * @param stdClass $selfDefineData
     */
    public function setSelfDefineData(?stdClass $selfDefineData): void
    {
        $this->selfDefineData = $selfDefineData;
    }

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
     * @return int
     */
    public function getWeight(): ?int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(?int $weight): void
    {
        $this->weight = $weight;
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
    public function getOriginUnitPrice(): ?int
    {
        return $this->originUnitPrice;
    }

    /**
     * @param int $originUnitPrice
     */
    public function setOriginUnitPrice(?int $originUnitPrice): void
    {
        $this->originUnitPrice = $originUnitPrice;
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
    public function getTotalPrice(): ?int
    {
        return $this->totalPrice;
    }

    /**
     * @param int $totalPrice
     */
    public function setTotalPrice(?int $totalPrice): void
    {
        $this->totalPrice = $totalPrice;
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
    public function getGoodsBarcode(): ?string
    {
        return $this->goodsBarcode;
    }

    /**
     * @param string $goodsBarcode
     */
    public function setGoodsBarcode(?string $goodsBarcode): void
    {
        $this->goodsBarcode = $goodsBarcode;
    }

    /**
     * @return stdClass
     */
    public function getExtModelMap(): ?stdClass
    {
        return $this->extModelMap;
    }

    /**
     * @param stdClass $extModelMap
     */
    public function setExtModelMap(?stdClass $extModelMap): void
    {
        $this->extModelMap = $extModelMap;
    }

    /**
     * @return bool
     */
    public function getFenXiaoGood(): ?bool
    {
        return $this->fenXiaoGood;
    }

    /**
     * @param bool $fenXiaoGood
     */
    public function setFenXiaoGood(?bool $fenXiaoGood): void
    {
        $this->fenXiaoGood = $fenXiaoGood;
    }

    /**
     * @return ExtPointChainedGoodsInfoDTO
     */
    public function getChainedGoodsInfoDTO(): ?ExtPointChainedGoodsInfoDTO
    {
        return $this->chainedGoodsInfoDTO;
    }

    /**
     * @param ExtPointChainedGoodsInfoDTO $chainedGoodsInfoDTO
     */
    public function setChainedGoodsInfoDTO(?ExtPointChainedGoodsInfoDTO $chainedGoodsInfoDTO): void
    {
        $this->chainedGoodsInfoDTO = $chainedGoodsInfoDTO;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}